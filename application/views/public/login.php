<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> <?php echo $title ?> </title>
         <link rel="shortcut icon" href="<?php echo base_url('asset/images/RT.png');?>" />
        <link rel="stylesheet" type="text/css" media="all" href=" <?php echo base_url(); ?>asset/css/login.css" />
        <link rel="stylesheet" type="text/css" media="all" href=" <?php echo base_url(); ?>asset/css/bootstrap.css" />
    </head>
    <body>
        <div class="container">
            <div class="card card-container">
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="//asset/corlate/images/blog/avatar1.png" />
                <p id="profile-name" class="profile-name-card"></p>
                <?php echo $this->session->flashdata('pesan')?>
                <?php echo form_open('verifylogin'); ?>
                <div class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" id="inputEmail" class="form-control" placeholder="nik" name="nik" required autofocus>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Masuk</button>
                </div>
                </form><!-- /form -->
                <a href="#" class="forgot-password">
                    Forgot the password?
                </a>
                <a class="forgot-password">
                    <?php echo anchor('appspublic/', 'Back to Home') ?>
                </a>
            </div><!-- /card-container -->
        </div><!-- /container -->
    </body>
</html>