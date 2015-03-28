<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dota2_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function insert_data($data)
    {
        return $this->db->insert('dota2_team',$data);
    }

    function show_data()
    {
        $query = $this->db->get('dota2_team');
        foreach ($query->result() as $row)
        {
            $data[] = array(
                'teamname' => $row->TeamName,
                'matchesplay' => $row->MatchesPlay,
                'ranking' => $row->Ranking,
                'sponsor' => $row->Sponsor,
                'player1' => $row->Player1,
                'role1' => $row->Role1,
                'player2' => $row->Player2,
                'role2' => $row->Role2,
                'player3' => $row->Player3,
                'role3' => $row->Role3,
                'player4' => $row->Player4,
                'role4' => $row->Role4,
                'player5' => $row->Player5,
                'role5' => $row->Role5
            );
        }
        return $data;
    }

    function get_data_edit_delete($id)
    {
        if(strpos($id,'%20') !== FALSE)
        {
            $check = str_replace("%20"," ",$id);
            $this->db->from('dota2_team');
            $this->db->where('TeamName',$check);
            $query=$this->db->get();

            if($query->num_rows() > 0)
            {
                $row = $query->row();
                $data[] = array(
                    'teamname' => $row->TeamName,
                    'matchesplay' => $row->MatchesPlay,
                    'ranking' => $row->Ranking,
                    'sponsor' => $row->Sponsor,
                    'player1' => $row->Player1,
                    'role1' => $row->Role1,
                    'player2' => $row->Player2,
                    'role2' => $row->Role2,
                    'player3' => $row->Player3,
                    'role3' => $row->Role3,
                    'player4' => $row->Player4,
                    'role4' => $row->Role4,
                    'player5' => $row->Player5,
                    'role5' => $row->Role5
                );
                return $data;
            }
            else
            {
                return NULL;
            }
        }
        else
        {
            $this->db->from('dota2_team');
            $this->db->where('TeamName',$id);
            $query=$this->db->get();

            if($query->num_rows() > 0)
            {
                $row = $query->row();
                $data[] = array(
                    'teamname' => $row->TeamName,
                    'matchesplay' => $row->MatchesPlay,
                    'ranking' => $row->Ranking,
                    'sponsor' => $row->Sponsor,
                    'player1' => $row->Player1,
                    'role1' => $row->Role1,
                    'player2' => $row->Player2,
                    'role2' => $row->Role2,
                    'player3' => $row->Player3,
                    'role3' => $row->Role3,
                    'player4' => $row->Player4,
                    'role4' => $row->Role4,
                    'player5' => $row->Player5,
                    'role5' => $row->Role5
                );
                return $data;
            }
            else
            {
                return NULL;
            }
        }
    }

    function get_data($id)
    {
        $this->db->from('dota2_team');
        $this->db->like('TeamName',$id);
        $query=$this->db->get();

        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
            $data[] = array(
                'teamname' => $row->TeamName,
                'matchesplay' => $row->MatchesPlay,
                'ranking' => $row->Ranking,
                'sponsor' => $row->Sponsor,
                'player1' => $row->Player1,
                'role1' => $row->Role1,
                'player2' => $row->Player2,
                'role2' => $row->Role2,
                'player3' => $row->Player3,
                'role3' => $row->Role3,
                'player4' => $row->Player4,
                'role4' => $row->Role4,
                'player5' => $row->Player5,
                'role5' => $row->Role5
            );
            }
            return $data;
        }
        else
        {
            return NULL;
        }
    }

    function update_data($id,$data)
    {
        $this->db->where('TeamName',$id);
        return $this->db->update('dota2_team',$data);
    }

    function delete_data($id)
    {
        if(strpos($id,'%20') !== FALSE)
        {
            $check = str_replace("%20"," ",$id);
            $this->db->where('TeamName',$check);
            return $this->db->delete('dota2_team');
        }

        else
        {
            return $this->db->delete('dota2_team',array('TeamName' => $id));
        }
    }
}

/* End of file post_model.php */
/* Location: ./application/models/post_model.php */