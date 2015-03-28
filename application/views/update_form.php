



<div class="content-section" id="services">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>EDIT TEAM</h2>
                <p>PLEASE FILL YOUR NEW INFORMATION</p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div id="main" class="clearfix">
            <div class="container_12">


                <div class="grid_8">
                    <h2></h2>


                    <?php echo validation_errors(); ?>
                    <?=form_open('main/update/' . $dota2_team['0']['teamname']);?>
                    <div >
                        <label><strong>Team Name</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'teamname',
                            'id'    => 'TeamName',
                            'size'  => '60',
                            'value' => $dota2_team['0']['teamname']
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <div >
                        <label><strong>Matches Play</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'matchesplay',
                            'id'    => 'MatchesPlay',
                            'size'  => '60',
                            'value' => $dota2_team['0']['matchesplay']
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <div >
                        <label><strong>Ranking</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'ranking',
                            'id'    => 'Ranking',
                            'size'  => '60',
                            'value' => $dota2_team['0']['ranking']
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <div >
                        <label><strong>Sponsor</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'sponsor',
                            'id'    => 'Sponsor',
                            'size'  => '60',
                            'value' => $dota2_team['0']['sponsor']

                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <div >
                        <label><strong>Player1</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'player1',
                            'id'    => 'Player',
                            'size'  =>  '60',
                            'value' => $dota2_team['0']['player1']
                        );
                        echo form_input($data);
                        $options = array(
                            'Carry'  => 'Carry',
                            'Midlane'    => 'Midlane',
                            'Offlane'   => 'Offlane',
                            'Ganker' => 'Ganker',
                            'Support' => 'Support'
                        );

                        echo form_dropdown('role1', $options,$dota2_team['0']['role1']);
                        ?>
                    </div>
                    <div >
                        <label><strong>Player2</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'player2',
                            'id'    => 'Player',
                            'size'  =>  '60',
                            'value' => $dota2_team['0']['player2']
                        );
                        echo form_input($data);
                        $options = array(
                            'Carry'  => 'Carry',
                            'Midlane'    => 'Midlane',
                            'Offlane'   => 'Offlane',
                            'Ganker' => 'Ganker',
                            'Support' => 'Support'
                        );

                        echo form_dropdown('role2', $options,$dota2_team['0']['role2']);
                        ?>
                    </div>
                    <div >
                        <label><strong>Player3</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'player3',
                            'id'    => 'Player',
                            'size'  =>  '60',
                            'value' => $dota2_team['0']['player3']
                        );
                        echo form_input($data);

                        $options = array(
                            'Carry'  => 'Carry',
                            'Midlane'    => 'Midlane',
                            'Offlane'   => 'Offlane',
                            'Ganker' => 'Ganker',
                            'Support' => 'Support'
                        );

                        echo form_dropdown('role3', $options,$dota2_team['0']['role3']);
                        ?>
                    </div>
                    <div >
                        <label><strong>Player4</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'player4',
                            'id'    => 'Player',
                            'size'  =>  '60',
                            'value' => $dota2_team['0']['player4']
                        );
                        echo form_input($data);
                        $options = array(
                            'Carry'  => 'Carry',
                            'Midlane'    => 'Midlane',
                            'Offlane'   => 'Offlane',
                            'Ganker' => 'Ganker',
                            'Support' => 'Support'
                        );

                        echo form_dropdown('role4', $options,$dota2_team['0']['role4']);
                        ?>
                    </div>
                    <div >
                        <label><strong>Player5</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'player5',
                            'id'    => 'Player',
                            'size'  =>  '60',
                            'value' => $dota2_team['0']['player5']
                        );
                        echo form_input($data);
                        $options = array(
                            'Carry'  => 'Carry',
                            'Midlane'    => 'Midlane',
                            'Offlane'   => 'Offlane',
                            'Ganker' => 'Ganker',
                            'Support' => 'Support'
                        );

                        echo form_dropdown('role5', $options,$dota2_team['0']['role5']);
                        ?>
                    </div>
                    <div >
                        <?php
                        $data = array(
                            'value' => 'Submit New Information',
                        );
                        echo form_submit($data);
                        ?>

                    </div>
                    <p><small>*ถ้ามีการแก้ไขตัวผู้เล่น ต้องมีรูปผู้เล่นคนนั้นด้วยเพื่อการแก้ไขที่ถูกต้องที่สุด*</small></p>
                    <?=form_close();?>



                </div><!--//grid_8-->


                <div class="clear"></div><!--//clear-->


            </div><!-- //container_12 -->
        </div><!-- //main -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
</div> <!-- /#services -->




<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 text-left">

            </div> <!-- /.text-center -->
            <div class="col-md-4 hidden-xs text-right">
                <a href="#top" id="go-top">Back to top</a>
            </div> <!-- /.text-center -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /#footer -->


<script src="/final/public/js/vendor/jquery-1.11.0.min.js"></script>
<script>window.jQuery || document.write('<script src="/final/public/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="/final/public/js/bootstrap.js"></script>
<script src="/final/public/js/plugins.js"></script>
<script src="/final/public/js/main.js"></script>


<!-- templatemo 406 flex -->
<!--
Flex Template
http://www.templatemo.com/preview/templatemo_406_flex
-->
</body>
</html>