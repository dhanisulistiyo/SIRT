<?php $this->load->view('public/cor_header')?>
<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Surat Keterangan</h2>
            <p class="lead"></p>
        </div>
        <div class="row contact-wrap">
<!--            <div class="status alert alert-success" style="display: none"></div>-->
            <form method="post" action="<?php echo site_url();?>user/keterangan">
                <div class="col-sm-8 col-sm-offset-1">
                    <div class="form-group">
                        <label>Perihal : </label><br>
                        <input type="checkbox" name="keperluan[]" value="Domisili">Domisili<br>
                        <input type="checkbox" name="keperluan[]" value="Banjir">Banjir<br>
                        <input type="checkbox" name="keperluan[]" value="Lapor Diri">Lapor Diri<br>
                        <input type="checkbox" name="keperluan[]" value="Lain-lain">Lain-lain<br>
                    </div>
                    <div class="form-group">
                        <label>Adalah benar bahwa yang bersangkutan : </label><br>
                        <input type="checkbox"  name="bersangkutan[]" value="Bertempat tinggal di alamat tersebut diatas">Bertempat tinggal di alamat tersebut diatas<br>
                        <input type="checkbox" name="bersangkutan[]" value="Terkena musibah banjir">Terkena musibah banjir<br>
                        <input type="checkbox" name="bersangkutan[]" value="Telah melapor ke pengurus RT 002 RW 037">Telah melapor ke pengurus RT 002 RW 037<br>
                        <label>Lain-lain : </label>
                        <input type="text" class="form-control" name="bersangkutan[]" placeholder="masukan alasan">
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
