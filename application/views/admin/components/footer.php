<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <strong>Version </strong>1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="#">Alice</a>.</strong> All rights reserved.
</footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/bootstrap.min.js"></script>
<!-- include summernote css/js -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/summernote-master/dist/summernote.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/jquery.slimscroll.min.js"></script>
<!-- CKeditor Editor -->
<script type="text/javascript" src="<?php echo base_url().'assets/admin/'; ?>js/ckeditor/ckeditor.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/bootstrap-colorpicker.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url().'assets/admin/'; ?>js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/admin/'; ?>js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url().'assets/admin/'; ?>js/buttons.flash.min.js"></script>
<script src="<?php echo base_url().'assets/admin/'; ?>js/jszip.min.js"></script>
<script src="<?php echo base_url().'assets/admin/'; ?>js/pdfmake.min.js"></script>
<script src="<?php echo base_url().'assets/admin/'; ?>js/vfs_fonts.js"></script>
<script src="<?php echo base_url().'assets/admin/'; ?>js/buttons.html5.min.js"></script>
<script src="<?php echo base_url().'assets/admin/'; ?>js/buttons.print.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/admin/'; ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '5%' /* optional */
    });
  });
</script>
<!-- Admin js script -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/admin.min.js"></script>

<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";

  // Config CKeditor Editor.
  CKEDITOR.replace('editor1', {

      height: '400',
      filebrowserBrowseUrl: base_url+'assets/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
      filebrowserUploadUrl: base_url+'assets/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
      filebrowserImageBrowseUrl: base_url+'assets/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
  });

</script>

<!-- My App Script -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/app.js"></script>

</body>
</html>
