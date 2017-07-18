<?php $this->load->view('public/cor_header');?>

    <section id="blog" class="container">
        <div class="center">
            <h2>Berita</h2>
            <p class="lead">Berita tentang RT RW</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach($news as $berita){?>
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo $berita->tgl ?></span>
                                    <span><i class="fa fa-user"></i> <a href="#"><?php echo $berita->username?></a></span>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <h2><a href="<?php echo site_url();?>appspublic/berita/<?php echo $berita->slug;?>"><?php echo $berita->judul ?></a></h2>
                                <h3><?php $limit_word=word_limiter($berita->berita,50); echo $limit_word; ?></h3>

                                <a class="btn btn-primary readmore" href="<?php echo site_url();?>appspublic/berita/<?php echo $berita->slug;?>">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <ul class="pager">
                        <?php echo $pagination ?>
                    </ul>
                </div>

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form" action="<?php echo site_url();?>appspublic/findnews" method="post">
                            <input type="text" class="form-control search_box"placeholder="Search Here" name="cari">
                        </form>
                    </div><!--/.search-->


                </aside>
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
<?php $this->load->view('public/cor_footer')?>