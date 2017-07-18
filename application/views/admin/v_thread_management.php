<?php $this->load->view('admin/v_header');?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thread Management</h1>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
        <a href="<?php echo site_url();?>backoffice/addthread" class="btn btn-primary"> Tambah Thread</a>
    <!-- /.row -->
        <div class="row">
            <p></p>
        </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <b>Thread Data</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead class="bg-primary">
    <tr>
        <th>No</th>
        <th>Nama Thread</th>
        <th>Created By</th>
        <th>Created At</th>
        <th>Action</th>
<!--        <th class="col-xs-2">Aksi</th>-->
    </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach ($thread as $t) {
        ?>

        <tr class="odd gradeX">
            <td><?php echo $no ?></td>
            <td><?php echo $t->chat_name ?></td>
            <td><?php echo $t->created_at ?></td>
            <?php if ($t->created_by!=0){?>
            <td><?php echo $t->created_by ?></td><?php }else{ ?>
            <td><?php echo 'admin'; ?></td>
            <?php } ?>
            <td><a href="<?php echo site_url();?>backoffice/deletethread/<?php echo $t->chat_id;?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
    <?php $no++;} ?>
    </tbody>
    </table>
    </div>

    </div>

    </div>

    </div>
<?php $this->load->view('admin/v_footer')?>


