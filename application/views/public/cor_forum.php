
<?php $this->load->view('public/cor_header')?>

    <style>
        #isi_chat{height:400px;overflow-y: auto ;}
        #chatting{border-radius: 25px;}
    </style>
<div id="container">
    <div class="col-md-2"></div>
    <div class="col-md-8" >
        <div class="panel panel-default" id="chatting">
            <div class="panel-heading">
                <h3 class="panel-title">Kotak Percakapan</h3>
            </div>
            <div class="panel-body" id="isi_chat" >

            </div>
        </div>

        <div class="col-md-10">
            <input placeholder="pesan" type="text" id="pesan" class="form-control">
        </div>
        <div class="col-md-2">
            <input type="button" value="kirim" id="kirim" class="btn btn-md btn-warning">
        </div>
    </div>
<div class="col-md-2">
    <p></p>
</div>
<?php if (current_url()!=site_url('user/generalforum')&&current_url()!=site_url('user/generalforum/')){?>
<div class="col-md-9">
    <a class="btn btn-danger" href="<?php echo site_url();?>user/forum">Back</a>
</div>
    <?php } ?>
</div>
<?php $this->load->view('public/cor_footer')?>
<?php if (current_url()!=site_url('user/generalforum') && current_url()!=site_url('user/generalforum/')){?>
<script>
    $(document).ready(function(){
        $('#pesan').keypress(function (e) {
            var key = e.which;
            if(key == 13)  // the enter key code
            {
                if( $(this).val().length === 0 ) {
                    return false;
                }
                else {
                    $('#kirim').click();
                    return false;
                }
            }
        });
        function tampildata(){
            $.ajax({
                type:"POST",
                url:"<?php echo site_url('user/ambil_pesan/'.$this->uri->segment(3));?>",
                success: function(data){
                    $('#isi_chat').html(data);
                }
            });
        }


        $('#kirim').click(function(){
            var pesan = $('#pesan').val();
            var user = $('#user').val();
            $('#user').val('');
            $('#pesan').val('');
            $.ajax({
                type:"POST",
                url:"<?php echo site_url('user/kirim_chat/'.$this->uri->segment(3));?>",
                data: 'pesan=' + pesan + '&user=' + user,
                success: function(data){
                    $('#isi_chat').html(data);
                }
            });
        });


        setInterval(function(){
            tampildata();},1000);
    });
</script>
<?php }else{?>
<script>
    $(document).ready(function(){
        $('#pesan').keypress(function (e) {
            var key = e.which;
            if(key == 13)  // the enter key code
            {
                if( $(this).val().length === 0 ) {
                    return false;
                }
                else {
                    $('#kirim').click();
                    return false;
                }
            }
        });
        function tampildata(){
            $.ajax({
                type:"POST",
                url:"<?php echo site_url('user/ambil_pesan_general');?>",
                success: function(data){
                    $('#isi_chat').html(data);
                }
            });
        }


        $('#kirim').click(function(){
            var pesan = $('#pesan').val();
            var user = $('#user').val();
            $('#user').val('');
            $('#pesan').val('');
            $.ajax({
                type:"POST",
                url:"<?php echo site_url('user/kirim_chat_general');?>",
                data: 'pesan=' + pesan + '&user=' + user,
                success: function(data){
                    $('#isi_chat').html(data);
                }
            });
        });


        setInterval(function(){
            tampildata();},1000);
    });
</script>
<?php } ?>