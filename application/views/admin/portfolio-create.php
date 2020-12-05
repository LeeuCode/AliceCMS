<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Create Portfolio</span> 
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/portfolios/'; ?>"> Portfolio</a></li>
            <li class="active"> Create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="col-md-12" >

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

            <form class="form-horizontal" action="<?php echo base_url().'admin/portfolios/store/'; ?>" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Upload-Photo" class="col-sm-2 control-label text-right">Upload Thumbnail</label>
                            <div class="col-sm-4">
                                <img id="Upload-Photo" src="<?php echo base_url().'assets/admin/'; ?>img/default-image.png" class="img-thumbnail" alt="">
                                <input name="thumbnail" id="uploadImage" type="hidden" >
                                <button type="button" class="btn btn-block btn-flat btn-primary" data-toggle="modal" data-target="#modal-default">
                                    <i class="fa fa-image"></i> 
                                    Upload thumbnail
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
                            <label for="project-name" class="col-sm-2 control-label text-right">Project Name</label>
                            <div class="col-sm-4">
                                <input name="portfolio_name" type="text" class="form-control" id="project-name" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="category" class="col-sm-2 control-label text-right" >Category</label>
                            <div class="col-sm-5">
                                <select name="category_id" id="category" class="form-control">
                                    <option value="0" >Select Category ....</option>
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category->id; ?>"> 
                                            <?php echo $category->category_name; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label text-right">Description</label>
                            <div class="col-sm-9">
                                <textarea  name="content" class="form-control editor" rows="3" id="description" ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-sm-2 control-label text-right">Link</label>
                            <div class="col-sm-6">
                                <input name="link" type="text" class="form-control" id="link" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="screenshots" class="col-sm-2 control-label text-right">Screenshots</label>
                            <div class="col-sm-10">
                                <div class="col-md-12">
                                    <button type="button" data-id="0" class="btn btn-primary btn-flat add-screenshot">
                                        <i class="fa fa-plus"></i> Add Screenshot
                                    </button>
                                </div>

                                <div class="clearfix">

                                    <div class="screenshot-container">
                                        <div class="col-md-8">
                                            <div class="input-group margin"> 
                                                <input name="screenshots[]" class="form-control" id="uploadscreenshot" type="text" >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#modal-default1">
                                                        <i class="fa fa-upload"></i> 
                                                    </button>
                                                </span>
                                                <!-- <span class="input-group-btn" >
                                                    <button type="button" class="btn btn-flat btn-danger remove-screenshot">
                                                        <i class="fa fa-trash"></i> 
                                                    </button>
                                                </span> -->
                                            </div>
                                            <div class="modal fade" id="modal-default1">
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
                                                            <iframe width="100%" height="500" frameborder="0" src="<?php echo base_url(); ?>assets/filemanager/dialog.php?type=1&field_id=uploadscreenshot'&fldr="> </iframe>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <!-- </div> -->
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
                            <a href="<?php echo base_url().'admin/portfolios/'; ?>" class="btn btn-github btn-flat ">
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