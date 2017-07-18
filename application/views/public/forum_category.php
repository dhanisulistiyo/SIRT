<?php $this->load->view('public/cor_header');?>

<section id="blog" class="container">
    <div class="center">
        <h2>Forum Kategori</h2>
        <p class="lead">Pemilihan Topik</p>
    </div>

    <div class="col-md-12">
     <a href="<?php echo site_url('user/createthread');?>" class="btn btn-success">Buat Topic</a>
    </div>
    <div class="row">
        <p class="col-md-12"></p>
    </div>
    <?php foreach ($kategori as $r){?>

        <div class="col-md-6">
            <div class="text-center" id="desc">
            <p><b>Judul Thread<br><?php echo $r->chat_name ?> </b></p>
            <p>Created By <?php if ($r->nama!=null){echo $r->nama;}else{ echo "admin";} ?> </p>
            </div>
            <a class="btn btn-primary btn-block" href="<?php echo site_url();?>user/forum/<?php echo $r->chat_id?>"><?php echo strtoupper("Join Thread") ?></a>
			<br>
        </div>
		
    <?php } ?>
	
</section><!--/#blog-->
<?php $this->load->view('public/cor_footer')?>
<style>
    .judul{
        background-color: #111111;
    }
</style>
<style>
    #desc{
        background-color: #0f74a8;
    }
</style>