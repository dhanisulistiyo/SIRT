<?php $this->load->view('public/cor_header');?>

    <section id="blog" class="container">
        <div class="center">
            <h2>Ronda</h2>
            <p class="lead">Jadwal Ronda RT RW</p>
        </div>

                <?php foreach ($ronda as $r){?>
                <div class="col-md-6">
                    <table class="table  table-bordered " id="tables">
                        <thead class="bg-primary judul">
                        <tr>
                            <th><b><?php echo strtoupper($r->ronda_sesi) ?> (<?php echo $r->ronda_date?>)</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $query=$this->db->select('*')->from('schedule_tbl')->join('tbl_ktp','schedule_tbl.nik=tbl_ktp.nik')->where('ronda_id',$r->ronda_id)->get();
                        foreach ($query->result() as $h){
                        ?>
                        <tr> <td><?php echo $h->nama ?></td></tr>
                        <?php } ?>

                        </tbody>
                    </table>

                </div>
    <?php } ?>
    </section><!--/#blog-->
<?php $this->load->view('public/cor_footer')?>
<style>
    .judul{
        background-color: #111111;
    }
</style>