<div class="content-section" id="services">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>RESULT PAGE</h2>
                <p></p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div id="main" class="clearfix">
            <div class="container_12">


                <div class="grid_8">
                    <h2></h2>

                    <div class="post">
                        <h2 class="entry-title"><a href="#"></a></h2>
                        <div class="entry-content clearfix">

                            <?php

                            if(strpos($notify_message,'SUCCESSFUL') !== FALSE)
                            {
                                echo "<img src=\"/final/public/images/023.png\">";
                            }
                            else
                            {
                                echo "<img src=\"/final/public/images/020.png\">";
                            }

                            ?>


                            <p>
                                <?=$notify_message;?>
                            </p>
                        </div>

                    </div>



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