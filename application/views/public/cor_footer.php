<?php if (current_url()!=site_url('user/generalforum')&& current_url()!=site_url().'user/forum/'.$this->uri->segment(3)){?>
<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2016 Rizal. All Rights Reserved.
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</footer><!--/#footer-->
<?php } ?>

<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; if ($actual_link!=site_url('appspublic/registeruser')){?>
<script src="<?php echo base_url();?>asset/corlate/js/jquery.js"></script><?php } ?>
<script src="<?php echo base_url();?>asset/corlate/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>asset/corlate/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo base_url();?>asset/corlate/js/jquery.isotope.min.js"></script>
<script src="<?php echo base_url();?>asset/corlate/js/main.js"></script>
<script src="<?php echo base_url();?>asset/corlate/js/wow.min.js"></script>
</body>
</html>