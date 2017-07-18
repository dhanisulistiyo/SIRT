<?php $this->load->view('admin/v_header');?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Upload Management</h1>
        </div>
    </div>
        <a href="<?php echo site_url();?>backoffice/upload" class="btn btn-primary"> Upload File</a>
    <!-- /.row -->
        <div class="row">
            <p></p>
        </div>
    <div class="row">
    <div class="col-lg-12">
    <div class="panel panel-default">
    <div class="panel-heading">
        <b>Upload Management</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead class="bg-primary">
    <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Keterangan Gambar</th>
        <th>Tanggal</th>
        <th>Admin</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach ($gambar as $pict) {
        ?>

        <tr class="odd gradeX">
            <td><?php echo $no; ?></td>
            <td><img src="<?php echo base_url();?>asset/upload/<?php echo $pict->nama_gambar ?>" width="50px" height="50px"></td>
            <td><?php echo $pict->judul_gambar ?></td>
            <td><?php echo $pict->tgl_upload ?></td>
            <td><?php echo $pict->username ?></td>
            <td><a onclick="hapusdata('<?php echo $pict->nama_gambar ?>')" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
    <?php $no++;} ?>
    </tbody>
    </table>
    </div>

    </div>

    </div>

    </div>
<?php $this->load->view('admin/v_footer')?>

        <link rel="stylesheet" href="<?php echo base_url();?>asset/alert/themes/alertify.core.css" />
        <link rel="stylesheet" href="<?php echo base_url();?>asset/alert/themes/alertify.default.css" id="toggleCSS" />
        <script src="<?php echo base_url();?>asset/alert/lib/alertify.min.js"></script>
        <script>
            function reset () {
                $("#toggleCSS").attr("href", "<?php echo base_url();?>asset/alert/themes/alertify.bootstrap.css");
                alertify.set({
                    labels : {
                        ok     : "OK",
                        cancel : "Cancel"
                    },
                    delay : 5000,
                    buttonReverse : false,
                    buttonFocus   : "ok"
                });
            }

            // ==============================
            // Standard Dialogs
            function hapusdata($name) {
                reset();
                alertify.set({ labels: { ok: "Hapus", cancel: "Batal" } });
                alertify.confirm("Anda yakin menghapus gambar ?", function (e) {
                    if (e) {
                        alertify.success("Anda sudah menghapus gambar");
                        location.href="<?php echo site_url();?>backoffice/hapusgambar/"+ $name;
                    } else {
                        alertify.error("Batal Menghapus Berita ");
                    }
                });
                return false;
            }
        </script>

