<?php get_admin_header(); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Create Service</span> 
            <!-- <button class="btn btn-primary">
                <i class="fa fa-plus"></i> Add New
            </button> -->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/services/'; ?>"> Services</a></li>
            <li class="active"> Create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div >
            
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
            
            <form class="form-horizontal" action="<?php echo base_url().'admin/services/store/'; ?>" method="post">
                <?php get_csrf_input(); ?>   
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Photo-Title" class="col-sm-2 control-label text-right">Icon</label>
                            <div class="col-sm-4">
                                <a class="btn btn-app f-ico" data-toggle="modal" data-target="#choose-icon" >
                                    <i class="fa fa-fonticons" ></i>
                                    Choose Icon
                                </a>

                                <input name="icon" class="icon-input" type="hidden">

                                <div class="modal fade" id="choose-icon">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content"  >
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">
                                                    <i class="fa fa-fonticons"></i> 
                                                    Choose Icon
                                                </h4>
                                            </div>
                                            <div class="modal-body modal-fonts" style="max-height: 500px;overflow-x: scroll;">

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
                            <label for="Upload-Photo" class="col-sm-2 control-label text-right">Upload Photo</label>
                            <div class="col-sm-4">
                                <img id="Upload-Photo" src="<?php echo base_url().'assets/admin/'; ?>img/default-image.png" class="img-thumbnail" alt="">
                                <input name="image" id="uploadImage" type="hidden" >
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
                            <label for="service-name" class="col-sm-2 control-label text-right">Service Name</label>
                            <div class="col-sm-4">
                                <input name="name" type="text" class="form-control" id="service-name" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="short-description" class="col-sm-2 control-label text-right">Short Description</label>
                            <div class="col-sm-6">
                                <textarea name="short_description" width="100%" class="form-control" rows="3" id="short-description" ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label text-right">Description</label>
                            <div class="col-sm-9">
                                <textarea name="content" class="form-control editor" rows="3" id="description" ></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h4 class="seo-heading" >SEO Setting</h4>
                        </div>

                        <div class="form-group">
                            <label for="meta-keywords" class="col-sm-2 control-label text-right">Meta Keywords</label>
                            <div class="col-sm-6">
                                <input name="meta_keywords" type="text" class="form-control" id="meta-keywords" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="meta-description" class="col-sm-2 control-label text-right">Meta Description</label>
                            <div class="col-sm-6">
                                <textarea name="meta_description" width="100%" class="form-control" rows="3" id="meta-description" ></textarea>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button name="submit" type="submit" class="btn btn-info btn-flat " >
                            <i class="fa fa-save"></i> 
                            Save
                        </button>
                        <a href="<?php echo base_url().'admin/services/'; ?>" class="btn btn-github btn-flat ">
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