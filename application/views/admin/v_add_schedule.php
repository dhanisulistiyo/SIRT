<?php $this->load->view('admin/v_header');?>
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ronda Schedule</h1>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Jadwal Ronda
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php foreach ($ronda as $r){?>
                            <form role="form" action="<?php echo site_url();?>backoffice/insertschedule/<?php echo $r->ronda_id ?>" method="post">
                                <div class="form-group">
                                    <label>Sesi Ronda: <?php echo $r->ronda_sesi?></label>
                                </div>
                                <?php } ?>
                                <?php foreach ($user as $usr){
                                    date_default_timezone_set("Asia/Jakarta");
                                    $from=new DateTime($usr->tgl_lahir);
                                    $to=new DateTime('today');
                                    if ($from->diff($to)->y>=25){?>
                                <div class="form-group col-md-4">
                                    <input type="checkbox"  name="warga[]" value="<?php echo $usr->nik ?>">
                                    <label><?php echo $usr->nik ?></label>
                                </div>
                                <?php }} ?>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Tambah Sesi Ronda</button>
                                </div>
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