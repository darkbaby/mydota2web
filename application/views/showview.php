<div class="content-section" id="services">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">

                <?php

                if(current_url()=="http://localhost/final/main/search_submit")
                {
                    echo "<h2>RESULT TEAM</h2>";
                }
                else
                {
                    echo "<h2>ALL PROFESSIONAL TEAM DOTA2</h2>";
                }
                ?>


            </div> <!-- /.heading-section -->




            <?php

            if($dota2_team == NULL)
            {
                echo "No Result";
            }

            else
            {

            foreach($dota2_team as $item)
            {
                echo "<div style=\" float: left; height: 400px; width: 1300px;\">";
                echo "<ul>";

                echo "<li style=\"float: left; margin:10px;\"><img width=\"300px\" height=\"275px\" src=\"/final/public/images/" .
                    $item['teamname'] .
                    "300.png\" alt=\"\">";


                echo "
                                <div style=\"position: relative; text-align: center;\">"
                    . "Sponsor:"

                    . $item['sponsor'] . ", Stat:"
                    . $item['matchesplay'] . ", Rank:" . $item['ranking']  . "</div>
                            </li> ";

                echo "<li style=\"float: left; margin:10px;\"><img width=\"150px\" height=\"200px\" src=\"/final/public/images/" .
                $item['teamname'] . "/" .
                        $item['player1'] . ".jpg\" alt=\"\">";

                echo "<div style=\"height: 30px;\"></div>
                                <div style=\"position: relative; text-align: center;\">"


                                . $item['player1'] . "</div>
                                <div style=\"height: 20px;\"></div>
                                <div style=\"text-align: center;\">"

                                . $item['role1'] .  "</div>
                            </li> ";

                echo "<li style=\"float: left; margin:10px;\"><img width=\"150px\" height=\"200px\" src=\"/final/public/images/" . $item['teamname'] . "/" .
                    $item['player2'] . ".jpg\" alt=\"\">";

                echo "<div style=\"height: 30px;\"></div>
                                <div style=\"position: relative; text-align: center;\">"


                    . $item['player2'] . "</div>
                                <div style=\"height: 20px;\"></div>
                                <div style=\"text-align: center;\">"

                    . $item['role2'] .  "</div>
                            </li> ";

                echo "<li style=\"float: left; margin:10px;\"><img width=\"150px\" height=\"200px\" src=\"/final/public/images/" . $item['teamname'] . "/" .
                    $item['player3'] . ".jpg\" alt=\"\">";

                echo "<div style=\"height: 30px;\"></div>
                                <div style=\"position: relative; text-align: center;\">"


                    . $item['player3'] . "</div>
                                <div style=\"height: 20px;\"></div>
                                <div style=\"text-align: center;\">"

                    . $item['role3'] .  "</div>
                            </li> ";

                echo "<li style=\"float: left; margin:10px;\"><img width=\"150px\" height=\"200px\" src=\"/final/public/images/" . $item['teamname'] . "/" .
                    $item['player4'] . ".jpg\" alt=\"\">";

                echo "<div style=\"height: 30px;\"></div>
                                <div style=\"position: relative; text-align: center;\">"


                    . $item['player4'] . "</div>
                                <div style=\"height: 20px;\"></div>
                                <div style=\"text-align: center;\">"

                    . $item['role4'] .  "</div>
                            </li> ";

                echo "<li style=\"float: left; margin:10px;\"><img width=\"150px\" height=\"200px\" src=\"/final/public/images/" . $item['teamname'] . "/" .
                    $item['player5'] . ".jpg\" alt=\"\">";

                echo "<div style=\"height: 30px;\"></div>
                                <div style=\"position: relative; text-align: center;\">"


                    . $item['player5'] . "</div>
                                <div style=\"height: 20px;\"></div>
                                <div style=\"text-align: center;\">"

                    . $item['role5'] .  "</div>
                            </li> ";



                echo "</ul></div>";

            }

            }
            ?>


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