



<div class="content-section" id="services">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>SEARCH PAGE</h2>
                <p>PLEASE FILL YOUR WORD</p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div id="main" class="clearfix">
            <div class="container_12">


                <div class="grid_8">

                    <?php echo validation_errors(); ?>
                    <?=form_open('main/search_submit');?>
                    <div>
                        <label><strong>Search(Team Name)</strong></label><br>
                        <?php
                        $data = array(
                            'name'  => 'teamname',
                            'id'    => 'TeamName',
                            'size'  => '60'
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <?php
                    $data = array(
                        'value' => 'Submit Search',
                    );
                        echo form_submit($data);
                        ?>
                    </div>
                    <p><small>*ใช้ _ แทน Spacebar สำหรับการค้นหาข้อมูลเก่านะครับ*</small></p>
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