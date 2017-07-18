<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/img/pesawat.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin RT 002</title>

    <link rel="shortcut icon" href="<?php echo base_url('asset/images/RT.png');?>" />

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>asset/backend/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>asset/backend/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>asset/backend/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>asset/backend/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>asset/backend/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>asset/backend/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>

</head>

<body>
<?php $query=$this->db->select('*')->from('tbl_user')->where('stat_validasi',0)->get();$hasil=$query->num_rows();
    if ($hasil>0){
?>
<style>
    #tes{
       color: #cc0000;
    }
</style>
<?php } ?>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url();?>/backoffice">Admin RT 002</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="<?php if ($hasil>0){ echo site_url('backoffice/usernonvalid');}else {echo '#';}?>">
                    <i id='tes'class="fa fa-bell fa-fw"></i>  <span id="notification_count"></span>  <i></i>
                </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $admin['username'];?></a>
                    </li>
                    <li><a href="<?php echo site_url();?>backoffice/editpass"><i class="fa fa-gear fa-fw"></i> Ubah Password</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url();?>backoffice/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="<?php echo site_url();?>backoffice/usermanagement"><i class="fa fa-dashboard fa-fw"></i> User Valid</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/usernonvalid"><i class="fa fa-newspaper-o fa-fw"></i> User Non Valid <?php if ($hasil>0){?><i class="btn btn-danger btn-circle fa "><?php echo $hasil;?></i><?php } ?>
                            </button></a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/messagemanagement"><i class="fa fa-file fa-fw"></i> Message Management</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/newsmanagement"><i class="fa fa-newspaper-o fa-fw"></i> Management Berita</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/lettermanagement"><i class="fa fa-android fa-fw"></i> Transaksi Surat</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/uploadmanagement"><i class="fa fa-file fa-fw"></i> Upload</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/organisasimanagement"><i class="fa fa-file fa-fw"></i> Organisasi</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/adminmanagement"><i class="fa fa-user"></i> Admin Management</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/rondamanagement"><i class="fa fa-user"></i> Ronda Management</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/kontakmanagement"><i class="fa fa-phone"></i> Contact Management</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url();?>backoffice/threadmanagement"><i class="fa fa-book"></i> Thread Management</a>
                    </li>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
