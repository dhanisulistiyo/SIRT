<?php $this->load->view('admin/v_header');?>

    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Organiasi</h1>
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
        <b>Struktur</b>
    </div>

    <div class="panel-body">
    <div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="tables">
    <thead class="bg-primary">
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Modif</th>

<!--        <th class="col-xs-2">Aksi</th>-->
    </tr>
    </thead>
    <tbody>
        <?php
        foreach ($organisasi as $org) {
        ?>

        <tr class="odd gradeX">
            <td><?php echo $org->nama ?></td>
            <td><?php echo $org->jabatan ?></td>
            <td><?php echo $org->telepon ?></td>
            <td><?php echo $org->email ?></td>
            <td><?php echo $org->alamat ?></td>
            <td><a href="<?php echo site_url();?>backoffice/editorg/<?php echo $org->id_org;?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a></td>
<!--            <td><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a> <a href="--><?php //echo site_url();?><!--backoffice/hapususer/--><?php //echo $user->nik?><!--" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>-->
        </tr>
    <?php } ?>
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
                        location.href="<?php echo site_url();?>backoffice/hapususer/"+ $user;
                    } else {
                        alertify.error("Batal Menghapus Berita ");
                    }
                });
                return false;
            }
        </script>

