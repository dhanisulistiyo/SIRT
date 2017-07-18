<?php $this->load->view('admin/v_header');?>
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kontak</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ubah Data Kontak
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php foreach ($kontak as $kon)
                            ?>
                            <form role="form" action="<?php echo site_url();?>backoffice/ubahkontak/<?php echo $kon->id_kontak ?>" method="post">
                                <div class="form-group">
                                    <label>Judul Kontak</label>
                                    <input class="form-control" value="<?php echo $kon->judul_kontak?>" name="judul_kontak" id="judul_kontak">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Kontak</label>
                                    <input class="form-control" value="<?php echo $kon->alamat_kontak?>" name="alamat_kontak" id="alamat_kontak">
                                </div>
                                <div class="form-group">
                                    <label>Email Kontak</label>
                                    <input class="form-control" value="<?php echo $kon->email_kontak?>" name="email_kontak">
                                </div>
                                <div class="form-group">
                                    <label>Garis Bujur</label>
                                    <input class="form-control" value="<?php echo $kon->garis_bujur ?>" name="garis_bujur">
                                </div>
                                <div class="form-group">
                                    <label>Garis Lintang</label>
                                    <input class="form-control" value="<?php echo $kon->garis_lintang?>" name="garis_lintang">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Ubah Kontak</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $this->load->view('admin/v_footer')?>