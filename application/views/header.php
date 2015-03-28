<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>



    <style>
        table a:link {
            color: #666;
            font-weight: bold;
            text-decoration:none;
        }
        table a:visited {
            color: #999999;
            font-weight:bold;
            text-decoration:none;
        }
        table a:active,
        table a:hover {
            color: #bd5a35;
            text-decoration:underline;
        }
        table {
            color:#666;
            font-size:1px;
            text-shadow: 1px 1px 0px #fff;
            background:#eaebec;
            margin:10px;
            border:#ccc 1px solid;

            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            border-radius:3px;

            -moz-box-shadow: 0 1px 2px #d1d1d1;
            -webkit-box-shadow: 0 1px 2px #d1d1d1;
            box-shadow: 0 1px 2px #d1d1d1;
        }
        table th {
            text-align: center;
            padding:10px 10px 10px 10px;
            border-top:1px solid #fafafa;
            border-bottom:1px solid #e0e0e0;

            background: #ededed;
            background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
            background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
        }
        table th:first-child {
            text-align: center;
            padding-left:20px;
        }
        table tr:first-child th:first-child {
            -moz-border-radius-topleft:3px;
            -webkit-border-top-left-radius:3px;
            border-top-left-radius:3px;
        }
        table tr:first-child th:last-child {
            -moz-border-radius-topright:3px;
            -webkit-border-top-right-radius:3px;
            border-top-right-radius:3px;
        }
        table tr {
            text-align: center;
            padding-left:10px;
        }
        table td:first-child {
            text-align: center;
            padding-left:10px;
            border-left: 0;
        }
        table td {
            padding:10px;
            border-top: 1px solid #ffffff;
            border-bottom:1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;

            background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
        }
        table tr.even td {
            background: #f6f6f6;
            background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
            background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
        }
        table tr:last-child td {
            border-bottom:0;
        }
        table tr:last-child td:first-child {
            -moz-border-radius-bottomleft:3px;
            -webkit-border-bottom-left-radius:3px;
            border-bottom-left-radius:3px;
        }
        table tr:last-child td:last-child {
            -moz-border-radius-bottomright:3px;
            -webkit-border-bottom-right-radius:3px;
            border-bottom-right-radius:3px;
        }
        table tr:hover td {
            background: #f2f2f2;
            background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
            background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);
        }


    </style>

































    <meta charset="utf-8">
    <title>DOTA2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/final/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/final/public/css/font-awesome.css">
    <link rel="stylesheet" href="/final/public/css/animate.css">
    <link rel="stylesheet" href="/final/public/css/templatemo_misc.css">
    <link rel="stylesheet" href="/final/public/css/templatemo_style.css">

    <script src="/final/public/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->


<div class="site-main" id="sTop">
    <div class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social-icons">
                        <li><a target="_blank" href="https://www.facebook.com/chochosama" class="fa fa-facebook"></a></li>
                        <li><a target="_blank" href="https://twitter.com/chochochoDOTA2" class="fa fa-twitter"></a></li>
                    </ul>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        <div class="main-header">
            <div class="container">
                <div id="menu-wrapper">
                    <div class="row">
                        <div class="logo-wrapper col-md-4 col-sm-2 col-xs-8">
                            <h1>
                                <a href="http://localhost/final/">DOTA2</a>
                            </h1>
                        </div> <!-- /.logo-wrapper -->
                        <div class="col-md-8 col-sm-10 col-xs-4 main-menu text-right">
                            <ul class="hidden-sm hidden-xs">
                                <li class="

                                    <?php if(current_url()== "http://localhost/final/")
                                    {
                                        echo "active";
                                    }

                                    ?>"

                                    ><a href="http://localhost/final/">Home</a></li>
                                <li class="

                                    <?php if(current_url()== "http://localhost/final/main/show")
                                {
                                    echo "active";
                                }

                                ?>" ><a href="http://localhost/final/main/show">Show</a></li>
                                <li class="

                                    <?php if(current_url()== "http://localhost/final/main/search")
                                {
                                    echo "active";
                                }

                                ?>" ><a href="http://localhost/final/main/search">Search</a></li>
                                <li class="

                                    <?php if(current_url()== "http://localhost/final/main/form")
                                {
                                    echo "active";
                                }

                                ?>" ><a href="http://localhost/final/main/form">Insert</a></li>

                                <li class="
                                <?php if(current_url()== "http://localhost/final/main/show_edit_delete")
                                {
                                    echo "active";
                                }

                                ?>" ><a href="http://localhost/final/main/show_edit_delete">Edit&Delete</a></li>
                            </ul>
                            <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.row -->
                </div> <!-- /#menu-wrapper -->
                <div class="menu-responsive hidden-md hidden-lg">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="">Insert</a></li>
                    </ul>
                </div> <!-- /.menu-responsive -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
    </div> <!-- /.site-header -->
    <div class="site-slider">
        <div class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="overlay"></div>
                        <img src="/final/public/images/d1.jpg" alt="" width="1600" height="750">
                        <div class="slider-caption visible-md visible-lg">
                            <h2>FREE TO PLAY</h2>
                            <p>LET'S PLAY TOGETHER</p>
                            <a target="_blank" href="http://blog.dota2.com/" class="slider-btn">DOTA2 OFFICIAL PAGE</a>
                        </div>
                    </li>
                    <li>
                        <div class="overlay"></div>
                        <img src="/final/public/images/d2.png" alt="" width="1600" height="750">
                        <div class="slider-caption visible-md visible-lg">
                            <h2>WANT TO WATCH MORE GAMES?</h2>
                            <p>PLEASE ENTER BELOW LINK AND LET'S FUNS</p>
                            <a target="_blank" href="http://www.twitch.tv/directory/game/Dota%202" class="slider-btn">CLICK HERE</a>
                        </div>
                    </li>
                    <li>
                        <div class="overlay"></div>
                        <img src="/final/public/images/d3.jpg" alt="" width="1600" height="750">
                        <div class="slider-caption visible-md visible-lg">
                            <h2>REFERENCE INFORMATION</h2>
                            <p>YOU CAN SEE THAT PAGE BELOW</p>
                            <a target="_blank" href="http://www.gosugamers.net/dota2" class="slider-btn">REFERENCE PAGE</a>
                        </div>
                    </li>
                </ul>
            </div> <!-- /.flexslider -->
        </div> <!-- /.slider -->
    </div> <!-- /.site-slider -->
</div> <!-- /.site-main -->