<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Settings</span> 
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Settings</li>
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

        <form action="<?php echo $formLink; ?>" method="post" >
            <?php get_csrf_input(); ?>
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom" style="overflow:hidden;">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#General-Settings" data-toggle="tab"><b> <i class="fa  fa-globe " ></i> General Settings</b></a></li>
                    <li><a href="#video" data-toggle="tab"><b><i class="fa fa-address-book" ></i> Contact Settings</b></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="General-Settings">
                        <div class="row">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label for="Upload-Photo1" class="col-sm-2 control-label text-right">FivIcon</label>
                                    <div class="col-sm-2">
                                        <img id="Upload-Photo1" src="<?php echo (!empty($fivicon)) ? $fivicon : base_url().'assets/admin/img/default-image.png'; ?>" class="img-thumbnail" alt="">
                                        <input name="fivicon" value="<?php echo $fivicon; ?>" id="uploadImage1" type="hidden" >
                                        <button type="button" class="btn btn-block btn-flat btn-primary" data-toggle="modal" data-target="#modal-default1">
                                            <i class="fa fa-image"></i> 
                                            Upload 
                                        </button>

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
                                                        <iframe width="100%" height="500" frameborder="0" src="<?php echo base_url(); ?>assets/filemanager/dialog.php?type=1&field_id=uploadImage1'&fldr="> </iframe>
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
                                    <label for="Upload-Photo1" class="col-sm-2 control-label text-right">Logo</label>
                                    <div class="col-md-2">
                                        <img style="width:100%" id="Upload-Photo" src="<?php echo (!empty($logo)) ? $logo : base_url().'assets/admin/img/default-image.png'; ?>" class="img-thumbnail" alt="">
                                        <input name="logo" value="<?php echo $logo; ?>" id="uploadImage" type="hidden" >
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
                                    <label for="Site-Name" class="col-sm-2 control-label text-right">Site Name </label>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="<?php echo $site_name; ?>" name="site_name" placeholder="Enter Your Site Name Here.">
                                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="meta-keywords" class="col-sm-2 control-label text-right">Meta Keywords</label>
                                    <div class="col-sm-6">
                                        <input name="meta_keywords" value="<?php echo $meta_keywords; ?>" type="text" class="form-control" id="meta-keywords" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="meta-description" class="col-sm-2 control-label text-right">Meta Description</label>
                                    <div class="col-sm-6">
                                        <textarea name="meta_description" width="100%" class="form-control" rows="3" id="meta-description" ><?php echo $meta_description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="video">
                        <div class="row">
                            <div class="form-horizontal">

                                <div class="form-group">
                                    <label for="Address" class="col-sm-2 control-label text-right"> Address </label>
                                    <div class="col-sm-4">
                                        <input name="address" value="<?php echo $address; ?>" type="text" class="form-control" id="Address" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="map_code" class="col-sm-2 control-label text-right"> Map Code </label>
                                    <div class="col-sm-4">
                                        <textarea name="map_code" width="100%" rows="3" class="form-control" id="map_code" ><?php echo $map_code; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Primary-Phone" class="col-sm-2 control-label text-right">Primary Phone </label>
                                    <div class="col-sm-4">
                                        <input name="phone[primary]" value="<?php echo @$phone['primary']; ?>" type="text" class="form-control" id="Primary-Phone" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Secondary-Phone" class="col-sm-2 control-label text-right">Secondary Phone</label>
                                    <div class="col-sm-4">
                                        <input name="phone[secondary]" value="<?php echo @$phone['secondary']; ?>" type="text" class="form-control" id="Secondary-Phone" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Primary-email" class="col-sm-2 control-label text-right">Primary Email </label>
                                    <div class="col-sm-4">
                                        <input name="email[primary]" value="<?php echo @$email['primary']; ?>" type="text" class="form-control" id="Primary-email" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Secondary-email" class="col-sm-2 control-label text-right">Secondary Email</label>
                                    <div class="col-sm-4">
                                        <input name="email[secondary]" value="<?php echo @$email['secondary']; ?>" type="text" class="form-control" id="Secondary-email" >
                                    </div>
                                </div>

                                <div class="col-md-12 margin-bottom-30">
                                    <h4 class="seo-heading" >Socail Madia Setting</h4>
                                </div>

                                <div class="form-group">
                                    <label for="screenshots" class="col-sm-2 control-label text-right">Site Socail Madia</label>
                                    <div class="col-sm-10">
                                        <div class="">
                                            <button data-loop="0" type="button" class="btn btn-primary btn-flat add-Member-item">
                                                <i class="fa fa-plus"></i> Add Socail
                                            </button>
                                        </div>

                                        <div class="clearfix">

                                            <div class="Member-items-container">

                                                <?php
                                                if (isset($socail_icon) && is_array($socail_icon)) :
                                                    foreach ($socail_icon as $id => $icon) :
                                                        ?>
                                                        <div class="col-md-7">
                                                            <div class="input-group margin ">
                                                                <span class="input-group-btn" >
                                                                    <select name="socail_icon[]" id="SocailMadia" class="form-control socail-madia-select" >
                                                                        <?php foreach (socialMedia() as $key => $value) : ?>
                                                                            <option value="<?php echo $key; ?>" <?php echo ($key == $icon) ? 'selected' : ''; ?> ><?php echo $value; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </span>
                                                                <input name="socail_link[]" value="<?php echo $socail_link[$id]; ?>" class="form-control" id="uploadscreenshot" type="text" >
                                                                <span class="input-group-btn" >
                                                                    <button type="button" class="btn btn-flat btn-danger remove-screenshot">
                                                                        <i class="fa fa-trash"></i> 
                                                                    </button>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->

                    <div class="col-md-12">
                        <button name="submit" type="submit" class="btn btn-flat btn-primary margin-bottom-30" >
                            <i class="fa fa-save"></i> 
                            Save
                        </button>
                    </div>

                </div>
                <!-- nav-tabs-custom -->
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php get_admin_footer(); ?>