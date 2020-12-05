<?php get_admin_header(); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span><?php echo lang('create_user_heading');?></span> 
            <!-- <button class="btn btn-primary">
                <i class="fa fa-plus"></i> Add New
            </button> -->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'auth/'; ?>"> Users</a></li>
            <li class="active"> Create</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div>
            <p><?php echo lang('create_user_subheading');?></p>

            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open("auth/create_user",array('class'=>'form-horizontal'));?>

            <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-body">

                <div class="form-group">
                    <label for="menu-type" class="col-sm-2 control-label text-right" >
                        <?php echo lang('create_user_fname_label', 'first_name');?>
                    </label>
                    <div class="col-sm-3">
                        <?php echo form_input($first_name);?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="menu-type" class="col-sm-2 control-label text-right" >
                        <?php echo lang('create_user_lname_label', 'last_name');?>
                    </label>
                    <div class="col-sm-3">
                        <?php echo form_input($last_name);?>
                    </div>
                </div>

            
            <?php
            if($identity_column!=='email') {
                echo '<p>';
                echo lang('create_user_identity_label', 'identity');
                echo '<br />';
                echo form_error('identity');
                echo form_input($identity);
                echo '</p>';
            }
            ?>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label text-right" >
                <?php echo lang('create_user_company_label', 'company');?>
                </label>
                <div class="col-sm-3">
                    <?php echo form_input($company);?>
                </div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label text-right" >
                    <?php echo lang('create_user_email_label', 'email');?> 
                </label>
                <div class="col-sm-3">
                    <?php echo form_input($email);?>
                </div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label text-right" >
                    <?php echo lang('create_user_phone_label', 'phone');?> 
                </label>
                <div class="col-sm-3">
                    <?php echo form_input($phone);?>
                </div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label text-right" >
                    <?php echo lang('create_user_password_label', 'password');?> 
                </label>
                <div class="col-sm-3">
                <?php echo form_input($password);?>
                </div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label text-right" >
                    <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
                </label>
                <div class="col-sm-3">
                    <?php echo form_input($password_confirm);?>
                </div>
            </div>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button name="submit" type="submit" class="btn btn-info btn-flat " >
                    <i class="fa fa-save"></i> 
                    Save
                </button>
                <a href="<?php echo base_url().'auth/index/'; ?>" class="btn btn-github btn-flat ">
                    <i class="fa fa-reply "></i> 
                    Back
                </a>
            </div>
        </div>
        <!-- /.box -->
<?php echo form_close();?>


        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php get_admin_footer(); ?>