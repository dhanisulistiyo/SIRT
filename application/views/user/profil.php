<?php
            foreach ($query as $user) {
                ?>
<fieldset>
    <div id="legend">
        <legend class="">Register</legend>
    </div>
    <div class="control-group">
        <!-- Username -->
        <label class="control-label"  for="username">NIK</label>
        <div class="controls">

                <?php echo $user->nik ?>
            
        </div>
    </div>

    <div class="control-group">
        <!-- E-mail -->
        <label class="control-label" for="email">Nama</label>
        <div class="controls">
            <?php echo $user->nama ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Tempat Lahir</label>
        <div class="controls">
            <?php echo $user->tempat_lahir ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Tanggal Lahir</label>
        <div class="controls">
            <?php echo $user->tgl_lahir ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Jenis Kelamin</label>
        <div class="controls">
            <?php echo $user->jenis_kelamin ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Golongan Darah</label>
        <div class="controls">
            <?php echo $user->gol_darah ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Agama</label>
        <div class="controls">
            <?php echo $user->agama ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Status</label>
        <div class="controls">
            <?php echo $user->status ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Pekerjaan</label>
        <div class="controls">
            <?php echo $user->pekerjaan ?>
        </div>
    </div> 

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Kewarganegaraan</label>
        <div class="controls">
            <?php echo $user->kewarganegaraan ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Berlaku</label>
        <div class="controls">
            <?php echo $user->berlaku ?>
        </div>
    </div>


    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Alamat</label>
        <div class="controls">
            <?php echo $user->alamat ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">RT</label>
        <div class="controls">
            <?php echo $user->rt ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">RW</label>
        <div class="controls">
            <?php echo $user->rw ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Desa</label>
        <div class="controls">
            <?php echo $user->desa ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Kecamatan</label>
        <div class="controls">
            <?php echo $user->kecamatan ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Kabupaten</label>
        <div class="controls">
            <?php echo $user->kabupaten ?>
        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Provinsi</label>
        <div class="controls">
            <?php echo $user->provinsi ?>
        </div>
    </div>


    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Username</label>
        <div class="controls">
                <?php echo $user->username ?>
        </div>
    </div>


    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Password</label>
        <div class="controls">

        </div>
    </div>

    <div class="control-group">
        <!-- Password-->
        <label class="control-label" for="password">Email</label>
        <div class="controls">
            <?php echo $user->email ?>
        </div>
    </div>



</fieldset>
<?php } ?>