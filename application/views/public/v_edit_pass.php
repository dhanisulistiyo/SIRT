<?php $this->load->view('public/cor_header')?>
<section id="contact-page" class="daftar">
    <div class="container">
        <div class="center">
            <h2>Password</h2>
            <p class="lead">Ganti Password</p>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <div class="row contact-wrap">
<!--            <div class="status alert alert-success" style="display: none"></div>-->
            <form method="post" action="<?php echo site_url();?>user/updatepassword">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Password Lama</label>
                        <input type="password" id="nama" name="lama" placeholder="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" id="tempat_lahir" name="baru" placeholder="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" id="tempat_lahir" name="baru2" placeholder="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Ubah Password">
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
<?php $this->load->view('public/cor_footer')?>
