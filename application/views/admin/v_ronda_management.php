<?php $this->load->view('admin/v_header');?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ronda Management</h1>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
        <a href="<?php echo site_url();?>backoffice/addronda" class="btn btn-primary"> Tambah Ronda</a>
        <a href="<?php echo site_url();?>backoffice/hapusallronda" class="btn btn-danger">Hapus Jadwal Ronda</a>
    <!-- /.row -->
        <div class="row">
            <p></p>
        </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <b>Ronda Data</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead class="bg-primary">
    <tr>
        <th>Sesi Ronda</th>
        <th>Nama Ronda</th>
        <th>Tanggal Ronda</th>
        <th>Action</th>
<!--        <th class="col-xs-2">Aksi</th>-->
    </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach ($ronda as $ron) {
        ?>

        <tr class="odd gradeX">
            <td><?php echo $no ?></td>
            <td><?php echo $ron->ronda_sesi ?></td>
            <td><?php echo $ron->ronda_date ?></td>
            <?php $query=$this->db->select('*')->from('schedule_tbl')->where('ronda_id',$ron->ronda_id)->get()->num_rows();?>
            <td><?php if($query==0){?><a href="<?php echo site_url();?>backoffice/addschedule/<?php echo $ron->ronda_id?> " class="btn btn-primary">Masukan Warga</i></a><?php }if ($query>0){ ?><a href="#" class="btn btn-success"><?php echo $query;?></a><?php } ?>          <a href="<?php echo site_url();?>backoffice/hapusronda/<?php echo $ron->ronda_id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
    <?php $no++;} ?>
    </tbody>
    </table>
    </div>

    </div>

    </div>

    </div>
<?php $this->load->view('admin/v_footer')?>


