


<div class="content-section" id="services">
    <div class="container">
        <div class="row">
            <div class="heading-section col-md-12 text-center">
                <h2>ALL DATA OF DOTA2 TEAM</h2>
                <p>PLEASE SELECT YOUR TEAM THAT YOU WANT</p>
            </div> <!-- /.heading-section -->
        </div> <!-- /.row -->
        <div id="main" class="clearfix">
            <div class="container_12" style="width: 1300px; position: relative; right:120px;">


                <div class="grid_8">
                    <h2></h2>


                <table cellspacing='0'>
                    <thead>
                        <tr >
                            <th>TeamName</th>
                            <th>Matches Play</th>
                            <th>Ranking</th>
                            <th>Sponsor</th>
                            <th>Player1</th>
                            <th>Role1</th>
                            <th>Player2</th>
                            <th>Role2</th>
                            <th>Player3</th>
                            <th>Role3</th>
                            <th>Player4</th>
                            <th>Role4</th>
                            <th>Player5</th>
                            <th>Role5</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                        foreach ($dota2_team as $item):?>
                            <tr class="<?php  if((rand(1,2)) %2 == 0){echo "even";}?>">
                                <td><?=$item['teamname'];?></td>
                                <td><?=$item['matchesplay'];?></td>
                                <td><?=$item['ranking'];?></td>
                                <td><?=$item['sponsor'];?></td>
                                <td><?=$item['player1'];?></td>
                                <td><?=$item['role1'];?></td>
                                <td><?=$item['player2'];?></td>
                                <td><?=$item['role2'];?></td>
                                <td><?=$item['player3'];?></td>
                                <td><?=$item['role3'];?></td>
                                <td><?=$item['player4'];?></td>
                                <td><?=$item['role4'];?></td>
                                <td><?=$item['player5'];?></td>
                                <td><?=$item['role5'];?></td>
                                <td><a href="<?php echo "http://localhost/final/main/update/" . $item['teamname'];?>">EDIT</a></td>
                                <td><a href="<?php echo "http://localhost/final/main/delete/" . $item['teamname'];?>">DELETE</a></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

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