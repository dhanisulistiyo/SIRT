
<script src="<?php echo base_url();?>asset/backend/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url();?>asset/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/backend/bower_components/metisMenu/dist/metisMenu.min.js"></script>


<script src="<?php echo base_url();?>asset/backend/bower_components/raphael/raphael-min.js"></script>
<script src="<?php echo base_url();?>asset/backend/bower_components/morrisjs/morris.min.js"></script>
<!--<script src="<?php echo base_url();?>assets/backend/js/morris-data.js"></script>-->
<script src="<?php echo base_url();?>asset/backend/dist/js/sb-admin-2.js"></script>
</body>
</html>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/all/css/jquery.dataTables.min.css');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/all/css/dataTables.bootstrap.css');?>"/>
<script type="text/javascript" src="<?php echo base_url('asset/all/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?PHP echo base_url('asset/all/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="<?PHP echo base_url('asset/all/js/dataTables.responsive.min.js');?>"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $("#tables").dataTable(
            { "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
        );
    });
</script>
<script type="text/javascript">
$(document).ready( function() {
      $('#tables').dataTable( {
        "language": {
          "zeroRecords": "Tidak ada data yang ditemukan"
        }
      });
});
</script>
