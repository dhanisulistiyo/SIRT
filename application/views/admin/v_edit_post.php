<?php $this->load->view('admin/v_header');?>
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Berita</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Masukan Berita
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php foreach ($news as $berita)
                            ?>
                            <form role="form" action="<?php echo site_url();?>backoffice/updatenews/<?php echo $berita->id_berita?>" method="post">
                                <div class="form-group">
                                    <label>Judul halaman</label>
                                    <input class="form-control" value="<?php echo $berita->judul?>" name="judul" id="judul">
                                </div>
                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="col-md-6" name="editorpost" id="editorpost" rows="5" ><?php echo $berita->berita?></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    </div>
<?php $this->load->view('admin/v_footer')?>

<script type="text/javascript">
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editorpost' );
</script>