<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('content');
    }

    public function form()
    {
        $this->load->view('header');
        $this->load->view('form');
    }

    public function form_submit()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('teamname','Team Name','required');
        $this->form_validation->set_rules('matchesplay','Matches Play','required');
        $this->form_validation->set_rules('ranking','Ranking','required|is_natural_no_zero');
        $this->form_validation->set_rules('sponsor','Sponsor','required');
        $this->form_validation->set_rules('player1','Player Name(1)','required');
        $this->form_validation->set_rules('player2','Player Name(2)','required');
        $this->form_validation->set_rules('player3','Player Name(3)','required');
        $this->form_validation->set_rules('player4','Player Name(4)','required');
        $this->form_validation->set_rules('player5','Player Name(5)','required');




        $this->form_validation->set_message('required', '* กรุณากรอก %s ด้วยครับ');
        $this->form_validation->set_message('is_natural_no_zero', '* %s ต้องเป็นตัวเลขจำนวนเต็มและไม่เป็นศูนย์นะครับ');


        if ($this->form_validation->run() == FALSE)
        {
            $this->form();
        }
        else
        {
            // Load post_model
            $this->load->model('dota2_model');

            $submit_data = $this->input->post(NULL, TRUE);

            if ($this->dota2_model->insert_data($submit_data))
            {
                $data['notify_message'] = 'ADD DATA SUCCESSFUL YOU CAN SEE IT.';
            }
            else
            {
                $data['notify_message'] = 'FAIL, YOUR DATA HAVE A PROBLEM.';
            }
            $this->load->view('header');
            $this->load->view('answerview',$data);
        }
    }

    public function show()
    {
        $this->load->model('dota2_model');
        $data['dota2_team']=$this->dota2_model->show_data();

        $this->load->view('header');
        $this->load->view('showview',$data);
    }



    public function search()
    {
        $this->load->view('header');
        $this->load->view('search');
    }

    public function search_submit()
    {

        $this->load->library('form_validation');


        $this->form_validation->set_rules('teamname','ชื่อทีม','required');

        $this->form_validation->set_message('required', 'กรุณาป้อน%sด้วยครับ!');

        if ($this->form_validation->run() == FALSE)
        {
            $this->search();
        }
        else
        {
            // Load post_model
            $this->load->model('dota2_model');

            $submit_data = $this->input->post(NULL, TRUE);

            extract($submit_data);

            $data['dota2_team'] = $this->dota2_model->get_data($teamname);


            if ($data['dota2_team'] != NULL)
            {
                $this->load->view('header');
                $this->load->view('showview',$data);
            }
            else
            {
                $this->load->view('header');
                $this->load->view('showview',$data);

            }
        }
    }

    public function update($id)
    {
        $this->load->model('dota2_model');

        // Load form validation library and set rules
        $this->load->library('form_validation');
        $this->form_validation->set_rules('teamname','Team Name','required');
        $this->form_validation->set_rules('ranking','Ranking','required|is_natural_no_zero');
        $this->form_validation->set_rules('player1','Player Name(1)','required');
        $this->form_validation->set_rules('player2','Player Name(2)','required');
        $this->form_validation->set_rules('player3','Player Name(3)','required');
        $this->form_validation->set_rules('player4','Player Name(4)','required');
        $this->form_validation->set_rules('player5','Player Name(5)','required');




        $this->form_validation->set_message('required', '* กรุณากรอก %s ด้วยครับ');
        $this->form_validation->set_message('is_natural_no_zero', '* %s ต้องเป็นตัวเลขจำนวนเต็มและไม่เป็นศูนย์');



        if ($this->form_validation->run() == FALSE) {

            $data['dota2_team'] = $this->dota2_model->get_data_edit_delete($id);

            $this->load->view('header');
            $this->load->view('update_form', $data);
        }
        else
        {
            $submit_data = $this->input->post(NULL, TRUE);

            if ($this->dota2_model->update_data($id,$submit_data))
            {
                $data['notify_message'] = 'UPDATE DATA SUCCESSFUL YOU CAN SEE IT.';
                $this->load->view('header');
                $this->load->view('answerview',$data);
            }
            else
            {
                $data['notify_message'] = 'FAIL, YOUR NEW DATA HAVE A PROBLEM.';
                $this->load->view('header');
                $this->load->view('answerview',$data);
            }
        }
    }

    public function show_edit_delete()
    {

        $this->load->model('dota2_model');
        $data['dota2_team']=$this->dota2_model->show_data();

        $this->load->view('header');
        $this->load->view('view_edit_delete',$data);
    }

    public function delete($id)
    {
        $this->load->model('dota2_model');

        if ($this->dota2_model->delete_data($id))
        {
            $data['notify_message'] = 'DELETE DATA SUCCESSFUL YOU CAN\'T SEE IT.';
            $this->load->view('header');
            $this->load->view('answerview',$data);
        }
        else
        {
            $data['notify_message'] = 'FAIL, CAN\'T DELETE DATA';
            $this->load->view('header');
            $this->load->view('answerview',$data);
        }
    }

}