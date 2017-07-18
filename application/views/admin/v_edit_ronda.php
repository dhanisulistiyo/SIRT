<?php $this->load->view('admin/v_header');?>
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ronda</h1>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
        <?php foreach($ronda as $ron) ?>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ubah Sesi Ronda Ke- <?php echo $ron->ronda_id ?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="<?php echo site_url();?>backoffice/ubahronda/<?php echo $ron->ronda_id ?>" method="post">
                                <div class="form-group">
                                    <label>Nama Sesi Ronda</label>
                                    <input class="form-control"  name="sesi" id="sesi"  value="<?php echo $ron->ronda_sesi ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" name="tgl" id="tgl"  value="<?php echo $ron->ronda_date ?>" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Ubah Sesi Ronda</button>
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