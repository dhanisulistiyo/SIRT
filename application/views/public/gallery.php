<?php $this->load->view('public/cor_header');?>
<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Galeri</h2>
            <p class="lead">Galeri Foto</p>
        </div>

        <div class="row">
<?php foreach ($gambar as $pict){?>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img  src="<?php echo base_url();?>asset/upload/<?php echo $pict->nama_gambar ?>" width="300px" height="300px" alt="">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#"></a> </h3>
                            <p><?php echo $pict->judul_gambar?></p>
                            <a class="preview" href="<?php echo base_url();?>asset/upload/<?php echo $pict->nama_gambar ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
            </div>
    <?php } ?>


        </div><!--/.row-->
        <ul class="pager">
            <?php echo $pagination ?>
        </ul>
    </div><!--/.container-->
</section><!--/#recent-works-->
<?php $this->load->view('public/cor_footer');?>