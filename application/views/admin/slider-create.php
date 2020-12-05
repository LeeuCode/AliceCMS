<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Create New Slideshow</span> 
            <!-- <button class="btn btn-primary">
                <i class="fa fa-reply"></i> All Slideshow
            </button> -->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/sliders/'; ?>">Slideshow</a></li>
            <li class="active">Create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <?php if (isset($_SESSION['message'])) : ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><i class="icon fa fa-check"></i> Success!</strong>
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>

        <div >
            <form class="form-horizontal" action="<?php echo base_url().'admin/sliders/store/'; ?>" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body ">
                        <div class="form-group">
                            <label for="Upload-Photo" class="col-sm-2 control-label text-right">Upload Photo</label>
                            <div class="col-sm-4">
                                <img id="Upload-Photo" src="<?php echo base_url().'assets/admin/'; ?>img/default-image.png" class="img-thumbnail" alt="">
                                <input id="uploadImage" name="image" type="hidden" required >
                                <button type="button" class="btn btn-block btn-flat btn-primary" data-toggle="modal" data-target="#modal-default">
                                    <i class="fa fa-image"></i> 
                                    Upload Picture
                                </button>

                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content"  >
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">
                                                    <i class="fa fa-image"></i> 
                                                    Upload Picture
                                                </h4>
                                            </div>
                                            <div class="modal-body" style="padding:0;margin:0;">
                                                <iframe width="100%" height="500" frameborder="0" src="<?php echo base_url(); ?>assets/filemanager/dialog.php?type=1&field_id=uploadImage'&fldr="> </iframe>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Photo-Title" class="col-sm-2 control-label text-right">Photo Title</label>
                            <div class="col-sm-5">
                                <input name="title" type="text" class="form-control" id="Photo-Title" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Photo-Description" class="col-sm-2 control-label text-right">Photo Description</label>
                            <div class="col-sm-7">
                                <input name="subtitle" type="text" class="form-control" id="Photo-Description" required >
                            </div>
                        </div> 
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button name="submit" type="submit" class="btn btn-info btn-flat " >
                            <i class="fa fa-save"></i> 
                            Save
                        </button>
                        <a href="<?php echo base_url().'admin/slideshow.php'; ?>" class="btn btn-github btn-flat ">
                            <i class="fa fa-reply "></i> 
                            Back
                        </a>
                    </div>
                </div>
                <!-- /.box -->
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php get_admin_footer(); ?>