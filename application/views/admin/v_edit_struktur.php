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
        <?php foreach ($data as $d)?>
    <div class="row"
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ubah Struktur
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="<?php echo site_url();?>backoffice/ubahstruktur/<?php echo $d->id_org ?>" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control"  type="text" value="<?php echo $d->nama;?>" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input class="form-control" disabled value="<?php echo $d->jabatan;?>" name="jabatan">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control"  type="text" name="alamat" id="judul" value="<?php echo $d->alamat;?>" >
                                </div>
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input class="form-control"  type="number" value="<?php echo $d->telepon;?>" name="telepon">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control"  type="text" name="email" id="judul" value="<?php echo $d->email;?>">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary">Ubah Struktur</button>
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