<?php $this->load->view('admin/v_header');?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kontak</h1>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
<!--        <a href="--><?php //echo site_url();?><!--berita/post" class="btn btn-primary"> Tambah Berita</a>-->
    <!-- /.row -->
        <div class="row">
            <p></p>
        </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <b>Data Kontak</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead class="bg-primary">
    <tr>
        <th>Contact</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Garis Bujur</th>
        <th>Garis Lintang</th>
    </tr>
    </thead>
    <tbody>
        <?php
        foreach ($kontak as $kon) {
        ?>
        <tr class="odd gradeX">
            <td><?php echo $kon->judul_kontak ?></td>
            <td><?php echo $kon->alamat_kontak ?></td>
            <td><?php echo $kon->email_kontak ?></td>
            <td><?php echo $kon->garis_bujur ?></td>
            <td><?php echo $kon->garis_lintang ?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
        <a href="<?php echo site_url();?>backoffice/editkontak" class="btn btn-primary">Edit Kontak</a>
    </div>
    </div>
    </div>
<?php $this->load->view('admin/v_footer')?>