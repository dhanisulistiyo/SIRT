<?php $this->load->view('admin/v_header');?>
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Admin</h1>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ubah Password
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="<?php echo site_url();?>backoffice/ubahpass" method="post">
                                <div class="form-group">
                                    <label>Pasword Lama</label>
                                    <input class="form-control"  type="password" name="lama" id="judul">
                                </div>
                                <div class="form-group">
                                    <label>Pasword Baru</label>
                                    <input class="form-control"   type="password" name="baru" id="judul">
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password</label>
                                    <input class="form-control"  type="password" name="baru2" id="judul">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Ubah Password</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    </div>
<?php $this->load->view('admin/v_footer')?>