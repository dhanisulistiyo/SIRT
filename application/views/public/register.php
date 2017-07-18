 <style type="text/css">
    .daftar{
        background-color: #6b8786;
    }
</style>
<section id="contact-page" class="daftar">
    <div class="container">
        <div class="center">
            <h2>Daftar</h2>
            <p class="lead">Silahkan isi form dibawah ini</p>
            <?php echo $this->session->flashdata('pesan')?>
        </div>
        <div class="row contact-wrap">
<!--            <div class="status alert alert-success" style="display: none"></div>-->
            <form method="post" action="<?php echo site_url();?>appspublic/registeruser">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>NIK *</label>
                        <input type="text" id="nik" name="nik" placeholder="Masukan NIK" required class="form-control" pattern=".{16,16}">
                    </div>
                    <div class="form-group">
                        <label>Nama *</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukan Nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Anda Lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir" class="form-control datepicker" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Golongan Darah *</label>
                        <input type="text" id="gol_darah" name="gol_darah" placeholder="Masukan Golongan Darah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Agama *</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katholik">Katholik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status *</label>
                        <input type="text" id="status" name="status" placeholder="Masukan Status Anda" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan *</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukan Pekerjaan Anda" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kewarganegaraan *</label>
                        <input type="text" id="kewarganegaraan" name="kewarganegaraan" placeholder="Masukan Kewarganegaraan Anda" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Berlaku *</label>
                        <input type="text" id="berlaku" name="berlaku" placeholder="Berlaku KTP" class="form-control datepicker" required>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat *</label>
                        <input type="text" id="alamat" name="alamat" placeholder="Masukan Alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>RT *</label>
                        <input type="text" id="rt" name="rt" placeholder="Masukan RT" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label>RW *</label>
                        <input type="text" id="rw" name="rw" placeholder="Masukan RW" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label>Desa *</label>
                        <input type="text" id="desa" name="desa" placeholder="Masukan Desa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kecamatan *</label>
                        <input type="text" id="kecamatan" name="kecamatan" placeholder="Masukan Kecamatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kabupaten *</label>
                        <input type="text" id="kabupaten" name="kabupaten" placeholder="Masukan Kabupaten" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Provinsi *</label>
                        <input type="text" id="provinsi" name="provinsi" placeholder="Masukan Provinsi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password *</label>
                        <input type="password" id="password" name="password" placeholder="Masukan Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" id="password" name="konf_password" placeholder="Konfirmasi Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" id="email" name="email" placeholder="Masukan Email Anda" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Daftar">
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
<script src="<?php echo base_url();?>asset/datepicker/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/datepicker/zebra_datepicker.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>asset/datepicker/css/default.css" />

<script>
    $(document).ready(function(){
        $('.datepicker').Zebra_DatePicker({
            format: 'Y-m-d',
            months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
            days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
            days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu']
        });
    });
</script>