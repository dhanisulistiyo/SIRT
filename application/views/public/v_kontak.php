<?php $this->load->view('public/cor_header');?>

<section id="contact-info">
    <div class="center">
        <?php echo $this->session->flashdata('pesan')?>
        <h2>Cara menjangkau kami?</h2>
        <p class="lead">Hubungi Kami</p>
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap" id="peta">
<!--                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Griya Asri,&amp;aq=0&amp;oq=griya asri&amp;sll=-6.1371907,106.8519065&amp;sspn=-6.1371907,106.8519065&amp;ie=UTF8&amp;hq=Griya Asri,&amp;hnear=Griya asri&amp;ll=-6.1371907,106.8519065&amp;spn=-6.1371907,106.8519065&amp;t=m&amp;z=17&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>-->
                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <?php foreach($kontak as $kon){?>
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5><?php echo $kon->judul_kontak ?></h5>
                                <p><?php echo $kon->alamat_kontak?></p>
                                <p><?php echo $kon->email_kontak ?></p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Kirim Kritik dan Saran</h2>
            <p class="lead">Kirimkan kritik dan saran anda agar kami dapat memperbaiki layanan kami</p>
        </div>
        <div class="row contact-wrap">
<!--            <div class="status alert alert-success" style="display: none"></div>-->
            <form method="post" action="<?php echo site_url();?>appspublic/kirimpesan">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Nama *</label>
                        <input type="text" name="nama" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Kritik & Saran *</label>
                        <textarea name="saran" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" required="required" value="Kirim Pesan">
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
<?php $this->load->view('public/cor_footer');?>
<script
    src="http://maps.googleapis.com/maps/api/js">
</script>
<script>
    var myCenter=new google.maps.LatLng(<?php echo $kon->garis_bujur ?>,<?php echo $kon->garis_lintang ?>);
    function initialize()
    {
        var mapProp = {
            center:myCenter,
            zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("peta"),mapProp);
        var marker=new google.maps.Marker({
            position:myCenter
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php } ?>