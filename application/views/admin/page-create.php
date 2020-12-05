<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Create Page </span>
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/pages/'; ?>"> Pages</a></li>
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

            <form class="form-horizontal" action="<?php echo base_url().'admin/pages/store/'; ?>" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Upload-Photo" class="col-sm-2 control-label text-right">Banner</label>
                            <div class="col-sm-3">
                                <img id="Upload-Photo" src="<?php echo base_url().'assets/admin/'; ?>img/default-banner.jpg" class="img-thumbnail" alt="">
                                <input id="uploadImage" name="banner" type="hidden" value="" >
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
                            <label for="page-layout" class="col-sm-2 control-label text-right" >Page Layout</label>
                            <div class="col-sm-5">
                                <select name="layout" id="page-layout" class="form-control choose-layout">
                                    <option value="Standard" >Standard Page Layout</option>
                                    <option value="About-us" >About Page Layout</option>
                                    <option value="Portfolio" >Portfolio Page Layout</option>
                                    <option value="Services" >Services Page Layout</option>
                                    <option value="Contact" >Contact Page Layout</option>
                                    <option value="faq" >FAQ Page Layout</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Page-Title" class="col-sm-2 control-label text-right">Page Title</label>
                            <div class="col-sm-6">
                                <input  name="title" type="text" class="form-control" id="Page-Title" required >
                            </div>
                        </div>

                        <div class="form-group page-thumbnail">
                            <label for="Upload-Photo" class="col-sm-2 control-label text-right">Thumbnail</label>
                            <div class="col-sm-7">
                                <div class="input-group">
                                    <input name="thumbnail" id="uploadThumbnail" class="form-control" type="text" >
                                    <span class="input-group-btn" >
                                        <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#modal-Thumbnail">
                                            <i class="fa fa-image"></i>
                                        </button>
                                    </span>
                                </div>

                                <div class="modal fade" id="modal-Thumbnail">
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
                                                <iframe width="100%" height="500" frameborder="0" src="<?php echo base_url(); ?>assets/filemanager/dialog.php?type=1&field_id=uploadThumbnail'&fldr="> </iframe>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>

                        <div class="form-group page-editor">
                            <label for="Partner-Link" class="col-sm-2 control-label text-right">Page Content</label>
                            <div class="col-sm-9">
                                <textarea  name="content" id="editor1" cols="30" rows="10"></textarea>
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
                                <!-- <input type="text" class="form-control" id="meta-description" > -->
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
                        <a href="<?php echo base_url().'admin/pages/'; ?>" class="btn btn-github btn-flat ">
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