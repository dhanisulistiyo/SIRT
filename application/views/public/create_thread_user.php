<?php $this->load->view('public/cor_header')?>
<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Buat Topic</h2>
            <p class="lead"></p>
        </div>
        <div class="row contact-wrap">
            <!--            <div class="status alert alert-success" style="display: none"></div>-->
            <form method="post" action="<?php echo site_url();?>user/createthread">
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="form-group">
                        <label>Nama Thread</label>
                       <input type="text" class="form-control" placeholder="Masukan Judul Thread" name="judul_thread">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submitSK" class="btn btn-primary btn-lg" value="Buat Thread">
                    </div>
                </div>

            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
<?php $this->load->view('public/cor_footer')?>
