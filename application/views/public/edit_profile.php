<?php $this->load->view('public/cor_header')?>
<section id="contact-page" class="daftar">
    <div class="container">
        <div class="center">
            <h2>Daftar</h2>
            <p class="lead">Daftar User</p>
        </div>
        <div class="row contact-wrap">
<!--            <div class="status alert alert-success" style="display: none"></div>-->
            <form method="post" action="<?php echo site_url();?>user/updateprofil">
                <?php foreach ($query as $pengguna){
                ?>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Nama *</label>
                        <input type="text" id="nama" name="nama" placeholder="" class="form-control"  value="<?php echo $pengguna->nama ?>">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="" class="form-control"  value="<?php echo $pengguna->tempat_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="" class="form-control"  value="<?php echo $pengguna->tgl_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"  value="<?php echo $pengguna->jenis_kelamin ?>">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Golongan Darah *</label>
                        <input type="text" id="gol_darah" name="gol_darah" placeholder="" class="form-control"  value="<?php echo $pengguna->gol_darah ?>">
                    </div>
                    <div class="form-group">
                        <label>Agama *</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="islam" <?php if ($pengguna->agama=='islam'){?>selected<?php } ?>>Islam</option>
                            <option value="kristen" <?php if ($pengguna->agama=='kristen'){?>selected<?php } ?>>Kristen</option>
                            <option value="katholik" <?php if ($pengguna->agama=='katholik'){?>selected<?php } ?>>Katholik</option>
                            <option value="hindu" <?php if ($pengguna->agama=='hindu'){?>selected<?php } ?>>Hindu</option>
                            <option value="budha" <?php if ($pengguna->agama=='budha'){?>selected<?php } ?>>Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status *</label>
                        <input type="text" id="status" name="status" value="<?php echo $pengguna->status?>" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan *</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" placeholder="" class="form-control"  value="<?php echo $pengguna->pekerjaan?>">
                    </div>
                    <div class="form-group">
                        <label>Kewarganegaraan *</label>
                        <input type="text" id="kewarganegaraan" name="kewarganegaraan" placeholder="" class="form-control"  value="<?php echo $pengguna->kewarganegaraan ?>">
                    </div>
                    <div class="form-group">
                        <label>Berlaku *</label>
                        <input type="date" id="berlaku" name="berlaku" class="form-control"  value="<?php echo $pengguna->berlaku ?>">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat *</label>
                        <input type="text" id="alamat" name="alamat" placeholder="" class="form-control"  value="<?php echo $pengguna->alamat ?>">
                    </div>
                    <div class="form-group">
                        <label>RT *</label>
                        <input type="text" id="rt" name="rt" placeholder="" class="form-control"  pattern="[0-9]" value="<?php echo $pengguna->rt ?>">
                    </div>
                    <div class="form-group">
                        <label>RW *</label>
                        <input type="text" id="rw" name="rw" placeholder="" class="form-control"  pattern="[0-9]" value="<?php echo $pengguna->rw ?>">
                    </div>
                    <div class="form-group">
                        <label>Desa *</label>
                        <input type="text" id="desa" name="desa" placeholder="" class="form-control"  value="<?php echo $pengguna->desa ?>">
                    </div>
                    <div class="form-group">
                        <label>Kecamatan *</label>
                        <input type="text" id="kecamatan" name="kecamatan" placeholder="" class="form-control"  value="<?php echo $pengguna->kecamatan ?>">
                    </div>
                    <div class="form-group">
                        <label>Kabupaten *</label>
                        <input type="text" id="kabupaten" name="kabupaten" placeholder="" class="form-control"  value="<?php echo $pengguna->kabupaten ?>">
                    </div>
                    <div class="form-group">
                        <label>Provinsi *</label>
                        <input type="text" id="provinsi" name="provinsi" placeholder="" class="form-control"  value="<?php echo $pengguna->provinsi ?>">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" id="email" name="email" placeholder="" class="form-control"  value="<?php echo $pengguna->email ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Ubah Profil">
                    </div>
                </div>
                <?php } ?>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
<?php $this->load->view('public/cor_footer')?>
