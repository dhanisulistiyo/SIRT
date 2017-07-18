<?php $this->load->view('public/cor_header')?>
<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Surat Pengantar</h2>
            <p class="lead"></p>
        </div>
        <div class="row contact-wrap">
<!--            <div class="status alert alert-success" style="display: none"></div>-->
            <form method="post" action="<?php echo site_url();?>user/pengantar">
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="form-group">
                        <label>Keperluan *</label>
                        <textarea rows="4" class="form-control" name="keperluan"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submitSK" class="btn btn-primary btn-lg" value="Cetak">
                    </div>
                </div>

            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
<?php $this->load->view('public/cor_footer')?>
