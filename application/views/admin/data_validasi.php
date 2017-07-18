<?php if($query == Null)
    {
     redirect('admin/blank_validasi');
    }?>

<?php
echo form_open('admin/data_validasi');
?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data User(KTP) </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Gol. Darah</th>
                                <th>Agama</th>
                                <th>Status</th>
                                <th>Pekerjaan</th>
                                <th>Kewarganegaraan</th>
                                <th>Berlaku</th>
                                <th>Status Validasi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($query as $user) {
                                ?>
                                <tr>
                                    <td><?php echo $user->nik ?></td>
                                    <td><?php echo $user->nama ?></td>
                                    <td><?php echo $user->tempat_lahir ?>,<?php echo date('d-m-Y', strtotime($user->tgl_lahir)); ?> </td>
                                    <td><?php echo $user->jenis_kelamin ?></td>
                                    <td><?php echo $user->gol_darah ?></td>
                                    <td><?php echo $user->agama ?></td>
                                    <td><?php echo $user->status ?></td>
                                    <td><?php echo $user->pekerjaan ?></td>
                                    <td><?php echo $user->kewarganegaraan ?></td>
                                    <td><?php echo $user->berlaku ?></td>


                                    <td>
                                        
                                        <input type="checkbox" name="stat_validasi" id="stat_validasi" value="<?php echo $user->stat_validasi ?>">            
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success" id="submit" name="submit" value="submit" type="submit">Register</button>
                        </div>
                    </div>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section>
<?php echo form_close(); ?> 