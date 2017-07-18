<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type="text/css" media="all" href=" <?php echo base_url();?>asset/style.css" />
    </head>
    <body>
        <header>
            <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo anchor('appspublic/','<a class="navbar-brand">Sistem Informasi RT</a>') ?>               
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <?php echo anchor('user/','Profil') ?>
                        </li>
                        <li>
                            <?php echo anchor('user/layanan','layanan') ?>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo site_url();?>user/ubahprofil"><?php echo $user['nik'];?></a>
                        </li>
                        <li>
                             <?php echo anchor('user/logout','Logout') ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </header>
        <div class="container body-content">
        
