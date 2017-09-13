<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title;?></title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-6">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->


        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/header/logo-2.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?php 
                        $href = "/index.php";
                        if($_SERVER['PHP_SELF'] == $href)
                            echo 'class="active"';?>><a href=<?php echo '"' . $href . '"';?>>Home</a></li>
                        <li <?php 
                        $href = "/about-us.php";
                        if ($_SERVER['PHP_SELF'] == $href)
                            echo 'class="active"';?>><a href=<?php echo '"' . $href . '"';?>>Sobre nós</a></li>
                        <li <?php 
                        $href = "/services.php";
                        if ($_SERVER['PHP_SELF'] == $href)
                            echo 'class="active"';?>><a href=<?php echo '"' . $href . '"';?>>Serviços</a></li>
                        <li <?php 
                        $href = "/planos.php";
                        if ($_SERVER['PHP_SELF'] == $href)
                            echo 'class="active"';?>><a href=<?php echo '"' . $href . '"';?>>Planos</a></li>
                        <li <?php 
                        $href = "/programa_de_emagrecimento.php";
                        if ($_SERVER['PHP_SELF'] == $href)
                            echo 'class="active"';?>><a href=<?php echo '"' . $href . '"';?>>Programa de emagrecimento</a></li>
                        <li <?php 
                        $href = "/#.php";
                        if ($_SERVER['PHP_SELF'] == $href)
                            echo 'class="active"';?>><a href=<?php echo '"' . $href . '"';?>>Blog</a></li>
                        <li <?php 
                        $href = "/contact-us.php";
                        if ($_SERVER['PHP_SELF'] == $href)
                            echo 'class="active"';?>><a href=<?php echo '"' . $href . '"';?>>Contato</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->