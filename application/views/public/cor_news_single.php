<?php $this->load->view('public/cor_header')?>

<section id="blog" class="container">
<div class="center">
    <h2>Berita</h2>
    <p class="lead">Berita</p>
</div>
<?php foreach($news as $berita)?>
<div class="blog">
<div class="row">
<div class="col-md-8">
    <div class="blog-item">
        <div class="row">
            <div class="col-xs-12 col-sm-2 text-center">
                <div class="entry-meta">
                    <span id="publish_date"><?php echo $berita->tgl?></span>
                    <span><i class="fa fa-user"></i> <a href="#"> <?php echo $berita->username?></a></span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-10 blog-content">
                <h2><?php echo $berita->judul ?></h2>
                <?php echo $berita->berita ?>
            </div>
        </div>
    </div><!--/.blog-item-->

</aside>

</div><!--/.row-->

</div><!--/.blog-->

</section><!--/#blog-->
<?php $this->load->view('public/cor_footer')?>