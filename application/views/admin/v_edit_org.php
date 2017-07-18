<?php $this->load->view('admin/v_header');?>
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Struktur</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ubah Struktur
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="<?php echo site_url();?>backoffice/ubahorganisasi" method="post">

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Ketua RW</label></div>
                                        <div class="col-md-8">
                                            <input class="form-control" value="<?php echo $RT->nama?>" name="rw" id="judul">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                        <label>Ketua RT</label></div>
                                        <div class="col-md-8">
                                        <input class="form-control" value="<?php echo $RT->nama?>" name="rw" id="judul">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Ketua RT</label></div>
                                        <div class="col-md-8">
                                            <input class="form-control" value="<?php echo $bendahara->nama?>" name="rw" id="judul">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Ketua RT</label></div>
                                        <div class="col-md-8">
                                            <input class="form-control" value="<?php echo $sekertaris->nama?>" name="rw" id="judul">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        </div>
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