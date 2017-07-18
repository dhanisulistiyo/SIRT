<?php $this->load->view('admin/v_header');?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Admin Management</h1>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
        <a href="<?php echo site_url();?>backoffice/addadmin" class="btn btn-primary"> Tambah Admin</a>
    <!-- /.row -->
        <div class="row">
            <p></p>
        </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <b>Admin Data</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead class="bg-primary">
    <tr>
        <th>Admin</th>
        <th>Action</th>
<!--        <th class="col-xs-2">Aksi</th>-->
    </tr>
    </thead>
    <tbody>
        <?php
        foreach ($adm as $adminas) {
        ?>

        <tr class="odd gradeX">
            <td><?php echo $adminas->username ?></td>
            <td><a href="<?php echo site_url();?>backoffice/hapusadmin/<?php echo $adminas->username?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>

    </div>

    </div>

    </div>
<?php $this->load->view('admin/v_footer')?>


