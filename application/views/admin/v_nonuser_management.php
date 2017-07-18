<?php $this->load->view('admin/v_header');?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User Non Valid</h1>
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
        <b>Data User</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead class="bg-primary">
    <tr>
        <th class="col-xs-1">No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th class="col-xs-2">Aksi</th>
    </tr>
    </thead>
    <tbody>
        <?php $no=1;
        foreach ($validuser as $user) {
        ?>

        <tr class="odd gradeX">
            <td><?php echo $no ?></td>
            <td><?php echo $user->nik ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo $user->alamat ?> RT <?php echo $user->rt ?> RW <?php echo $user->rw ?></td>
            <td><a href="<?php echo site_url();?>backoffice/makevalid/<?php echo $user->nik ?>" class="btn btn-primary">Validasi</a> <a href="<?php echo site_url();?>backoffice/hapususernonvalid/<?php echo $user->nik?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        </tr>
    <?php $no=$no+1; } ?>
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
            function hapusdata($user) {
                reset();
                alertify.set({ labels: { ok: "Hapus", cancel: "Batal" } });
                alertify.confirm("Anda yaking menghapus data ?", function (e) {
                    if (e) {
                        alertify.success("Anda sudah menghapus berita");
                        location.href="<?php echo site_url();?>backoffice/hapususernonvalid/"+ $user;
                    } else {
                        alertify.error("Batal Menghapus Berita ");
                    }
                });
                return false;
            }
        </script>

