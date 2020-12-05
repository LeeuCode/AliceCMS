<?php get_admin_header(); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Edit Member</span> 
            <!-- <button class="btn btn-primary">
                <i class="fa fa-plus"></i> Add New
            </button> -->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/members/'; ?>"> Team</a></li>
            <li class="active"> Edit</li>
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
            
            <form class="form-horizontal" action="<?php echo base_url().'admin/members/update/'.$member->id; ?>/" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="form-group">
                            <label for="Upload-Photo" class="col-sm-2 control-label text-right">Member Photo</label>
                            <div class="col-sm-2">
                                <img id="Upload-Photo" src="<?php echo base_url().$member->image; ?>" class="img-thumbnail" alt="">
                                <input name="image" id="uploadImage" type="hidden" value="<?php echo $member->image; ?>" >
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
                            <label for="Member-Name" class="col-sm-2 control-label text-right">Member Name</label>
                            <div class="col-sm-4">
                                <input name="name" type="text" class="form-control" id="Member-Name" value="<?php echo $member->name; ?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Member-career" class="col-sm-2 control-label text-right">Member Career</label>
                            <div class="col-sm-4">
                                <input name="career" type="text" class="form-control" id="Member-career" value="<?php echo $member->career; ?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="screenshots" class="col-sm-2 control-label text-right">Member Socail Madia</label>
                            <div class="col-sm-10">

                                <div class="">
                                    <button data-loop="0" type="button" class="btn btn-primary btn-flat add-Member-item">
                                        <i class="fa fa-plus"></i> Add Socail
                                    </button>
                                </div>

                                <div class="clearfix">

                                    <div class="Member-items-container">

                                        <?php
                                        $socailIcon = unserialize($member->socail_icon);
                                        $socailLink = unserialize($member->socail_link);

                                        foreach ($socailLink as $id => $link) :
                                            ?>
                                            <div class="col-md-7">
                                                <div class="input-group margin ">
                                                    <span class="input-group-btn" >
                                                        <select name="socail_icon[]" id="SocailMadia" class="form-control socail-madia-select" >
                                                            <?php foreach (socialMedia() as $key => $value) : ?>
                                                                <option value="<?php echo $key; ?>" <?php echo ( $key == $socailIcon[$id] ) ? 'selected' : ''; ?> ><?php echo $value; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </span>
                                                    <input name="socail_link[]" class="form-control" id="uploadscreenshot" type="text" value="<?php echo $link; ?>" >
                                                    <span class="input-group-btn" >
                                                        <button type="button" class="btn btn-flat btn-danger remove-screenshot">
                                                            <i class="fa fa-trash"></i> 
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button name="submit" type="submit" class="btn btn-info btn-flat " >
                                <i class="fa fa-save"></i> 
                                Save
                            </button>
                            <a href="<?php echo base_url().'admin/members/'; ?>" class="btn btn-github btn-flat ">
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