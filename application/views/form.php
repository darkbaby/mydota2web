



<div class="content-section" id="services">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>INSERT TEAM</h2>
                <p>PLEASE FILL YOUR INFORMATION</p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
            <div id="main" class="clearfix">
                <div class="container_12">


                    <div class="grid_8">



                        <?php echo validation_errors(); ?>
                        <?=form_open('main/form_submit');?>
                        <div >
                            <label><strong>Team Name</strong></label><br>
                            <?php
                            $data = array(
                                'name'  => 'teamname',
                                'id'    => 'TeamName',
                                'size'  => '60',
                                'value' => set_value('teamname')
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
                                'value' => set_value('matchesplay')
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
                                'value' => set_value('ranking')
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
                                'value' => set_value('sponsor')
                            );
                            echo form_input($data);
                            ?>
                        </div>
                        <div >
                            <label><strong>Player Name (1)</strong></label><br>
                            <?php
                            $data = array(
                                'name'  => 'player1',
                                'id'    => 'Player',
                                'size'  =>  '60',
                                'value' => set_value('player1')
                            );
                            echo form_input($data);
                            $options = array(
                                'Carry'  => 'Carry',
                                'Midlane'    => 'Midlane',
                                'Offlane'   => 'Offlane',
                                'Ganker' => 'Ganker',
                                'Support' => 'Support'
                            );
                            echo " Role (1) ";
                            echo form_dropdown('role1', $options);
                            ?>
                        </div>
                        <div >
                            <label><strong>Player Name (2)</strong></label><br>
                            <?php
                            $data = array(
                                'name'  => 'player2',
                                'id'    => 'Player',
                                'size'  =>  '60',
                                'value' => set_value('player2')
                            );
                            echo form_input($data);
                            $options = array(
                                'Carry'  => 'Carry',
                                'Midlane'    => 'Midlane',
                                'Offlane'   => 'Offlane',
                                'Ganker' => 'Ganker',
                                'Support' => 'Support'
                            );
                            echo " Role (2) ";
                            echo form_dropdown('role2', $options);
                            ?>
                        </div>
                        <div >
                            <label><strong>Player Name (3)</strong></label><br>
                            <?php
                            $data = array(
                                'name'  => 'player3',
                                'id'    => 'Player',
                                'size'  =>  '60',
                                'value' => set_value('player3')
                            );
                            echo form_input($data);

                            $options = array(
                                'Carry'  => 'Carry',
                                'Midlane'    => 'Midlane',
                                'Offlane'   => 'Offlane',
                                'Ganker' => 'Ganker',
                                'Support' => 'Support'
                            );
                            echo " Role (3) ";
                            echo form_dropdown('role3', $options);
                            ?>
                        </div>
                        <div >
                            <label><strong>Player Name (4)</strong></label><br>
                            <?php
                            $data = array(
                                'name'  => 'player4',
                                'id'    => 'Player',
                                'size'  =>  '60',
                                'value' => set_value('player4')
                            );
                            echo form_input($data);
                            $options = array(
                                'Carry'  => 'Carry',
                                'Midlane'    => 'Midlane',
                                'Offlane'   => 'Offlane',
                                'Ganker' => 'Ganker',
                                'Support' => 'Support'
                            );
                            echo " Role (4) ";
                            echo form_dropdown('role4', $options);
                            ?>
                        </div>
                        <div >
                            <label><strong>Player Name (5)</strong></label><br>
                            <?php
                            $data = array(
                                'name'  => 'player5',
                                'id'    => 'Player',
                                'size'  =>  '60',
                                'value' => set_value('player5')
                            );
                            echo form_input($data);
                            $options = array(
                                'Carry'  => 'Carry',
                                'Midlane'    => 'Midlane',
                                'Offlane'   => 'Offlane',
                                'Ganker' => 'Ganker',
                                'Support' => 'Support'
                            );
                            echo " Role (5) ";
                            echo form_dropdown('role5', $options);
                            ?>
                        </div>
                        <div >
                            <?php
                            $data = array(
                                'value' => 'Submit Information',
                            );
                            echo form_submit($data);
                            ?>

                        </div>
                        <p><small>*ถ้าต้องการที่จะ Insert ข้อมูลอย่างถูกต้องที่สุด จะต้องมีรูปของผู้เล่นแต่ละคนด้วย*</small></p>
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