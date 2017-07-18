<?php $this->load->view('public/cor_header')?>
<!--<link rel="stylesheet" href="--><?php //echo base_url();?><!--asset/galeri/css/bootstrap.min.css">-->
<link rel="stylesheet" href="<?php echo base_url();?>asset/galeri/css/bootstrap-responsive.min.css">
<!--<link rel="stylesheet" href="--><?php //echo base_url();?><!--asset/galeri/css/main.css">-->
<link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
<div class="container gallery">
    <h2 class="page-title">Galeri RT </h2>


    <div class="thumbnails">
        <?php foreach ($gambar as $pict){?>
        <div class="span3">
            <a  rel="lightbox[group]" href="<?php echo base_url();?>asset/upload/<?php echo $pict->nama_gambar ?>"><img src="<?php echo base_url();?>asset/upload/<?php echo $pict->nama_gambar ?>" width="200px"  height="200px" title="<?php echo $pict->judul_gambar ?>" /></a>
        </div> <!--end thumb -->
        <?php } ?>
    </div><!--end thumbnails -->
</div> <!-- /container -->
<?php $this->load->view('public/cor_footer')?>
<script src="<?php echo base_url();?>asset/galeri/js/plugins.js"></script>
<script src="<?php echo base_url();?>asset/galeri/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url();?>asset/galeri/js/main.js"></script>

<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));

    // Colorbox Call

    $(document).ready(function(){
        $("[rel^='lightbox']").prettyPhoto();
    });
</script>
</body>
</html>