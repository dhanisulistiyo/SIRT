
</div>
<div class="copy-right">
	<div class="container">
			<p> &copy; 2016 Rizal. All Rights Reserved | Design by  <a href="http://rizal1101.blogspot.com/"> Rizal</a></p>
	</div>
</div>
<script type='text/javascript'> 
        $(window).load(function () {
            var options = new primitives.orgdiagram.Config();

            var items = [
                new primitives.orgdiagram.ItemConfig({
                    id: 0,
                    parent: null,
                    title: "Direktur",
                    description: "Aji Permana, M.Kom",
                    image: "images/photos/a.png"
                }),
                new primitives.orgdiagram.ItemConfig({
                    id: 1,
                    parent: 0,
                    title: "Kepala Divisi I",
                    description: "Maman Suryaman, S.Kom",
                    image: "images/photos/b.png"
                }),
                new primitives.orgdiagram.ItemConfig({
                    id: 2,
                    parent: 0,
                    title: "Kepala Divisi II",
                    description: "Nureka Fathoni, S.Kom",
                    image: "images/photos/c.png"
                }),
                new primitives.orgdiagram.ItemConfig({
                    id: 3,
                    parent: 0,
                    title: "Kepala Divisi III",
                    description: "Taufiq Fathurahman, S.Kom",
                    image: "images/photos/d.png"
                }),
                new primitives.orgdiagram.ItemConfig({
                    id: 4,
                    parent: 3,
                    title: "Manager Divisi I",
                    description: "Wangsa",
                    image: "images/photos/e.png"
                }),
                new primitives.orgdiagram.ItemConfig({
                    id: 5,
                    parent: 3,
                    title: "Manager Divisi II",
                    description: "Permana",
                    image: "images/photos/f.png"
                }),
                new primitives.orgdiagram.ItemConfig({
                    id: 6,
                    parent: 3,
                    title: "Manager Divisi III",
                    description: "Aqsa",
                    image: "images/photos/g.png"
                })
				
            ];

            options.items = items;
            options.cursorItem = 0;
            options.hasSelectorCheckbox = primitives.common.Enabled.True;

            jQuery("#struktur").orgDiagram(options);
        });//]]>  
        
        
      </script>
     
<script type="text/javascript" src=" <?php echo base_url();?>asset/js/jquery-2.2.1.js"></script>
<script type="text/javascript" src=" <?php echo base_url();?>asset/js/jquery.validate.min.js"></script>
<script type="text/javascript" src=" <?php echo base_url();?>asset/js/bootstrap.js"></script>
<script type="text/javascript" src=" <?php echo base_url();?>asset/js/responds.js"></script>
<script type="text/javascript" src=" <?php echo base_url();?>asset/js/modernizr-2.6.2.js"></script>





</body>
</html>