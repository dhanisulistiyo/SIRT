
<?php
echo form_open('user/layanan');
?>
<?php
foreach ($query as $user) {
    ?>



    <fieldset>
        <div id="legend">
            <legend class="">Layanan Surat Menyurat</legend>
        </div>

      <!-- Button -->
      <div class="controls">
          <button class="btn btn-success" id="submit" name="submitSK" value="submitSK" type="submitSK">Surat Keterangan</button>
      </div>
    </div>
  </fieldset>
    </fieldset>
    
<?php } ?>
<?php echo form_close(); ?>    