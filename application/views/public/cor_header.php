<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SI RT</title>
	<link rel="shortcut icon" href="<?php echo base_url('asset/images/RT.png');?>" />
	<!-- core CSS -->
    <link href="<?php echo base_url();?>asset/corlate/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/corlate/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/corlate/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/corlate/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/corlate/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/corlate/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>asset/corlate/js/html5shiv.js"></script>
    <script src="<?php echo base_url();?>asset/corlate/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
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
<!--                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                </div>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url();?>">Beranda</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Surat <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url();?>user/layanan">Pengantar</a></li>
                                <li><a href="<?php echo site_url();?>user/suratketerangan">Keterangan</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url();?>appspublic/gallery">Galeri</a></li>
                        <li><a href="<?php echo site_url();?>appspublic/organisasi">Organisasi</a></li>
                        <li><a href="<?php echo site_url();?>appspublic/news">Berita</a></li>
                        <li><a href="<?php echo site_url();?>user/generalforum">Chat</a></li>
                        <li><a href="<?php echo site_url();?>user/forum">Forum</a></li>
                        <li><a href="<?php echo site_url();?>user/ronda">Jadwal Ronda</a></li>
                        <li><a href="<?php echo site_url();?>appspublic/kontak">Kontak</a></li>
                        <?php if ($this->session->userdata('login_user') == true) {?>
                            <li class="dropdown">                              
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('user')['nik'];?> <span class="glyphicon glyphicon-user"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url();?>user/getdetail">Detail Profil  <i class="fa fa-user"></i></a></li>
                                    <li><a href="<?php echo site_url();?>user/changepassword">Change Password  <i class="fa fa-user"></i></a></li>
                                    <li><a href="<?php echo site_url();?>user/logout">Keluar</a></li>
                                </ul>
                            </li>
                        <?php }else { ?>
                        <li><a href="<?php echo site_url();?>appspublic/registeruser">Daftar</a></li>
                        <li><a href="<?php echo site_url();?>user">Masuk</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
