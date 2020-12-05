<?php get_admin_header(); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span><?php echo lang('edit_user_heading');?></span> 
            <!-- <button class="btn btn-primary">
                <i class="fa fa-plus"></i> Add New
            </button> -->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'auth/'; ?>">Users</a></li>
            <li class="active"> Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div>
            <p><?php echo lang('edit_user_subheading');?></p>

            <div class="box box-primary">
                  <!-- /.box-header -->
                  <div class="box-body">
            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open(uri_string(), array('class'=>'form-horizontal'));?>

      
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

            <div class="form-group">
                <label for="menu-type" class="col-sm-2 control-label text-right" >
                    <?php echo lang('create_user_email_label', 'email');?>
                </label>
                <div class="col-sm-3">
                    <?php echo form_input($email);?>
                </div>
            </div>

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
                    <?php echo lang('create_user_phone_label', 'phone');?> 
                </label>
                <div class="col-sm-3">
                    <?php echo form_input($phone);?>
                </div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label text-right" >
                <?php echo lang('edit_user_password_label', 'password');?>
                </label>
                <div class="col-sm-3">
                    <?php echo form_input($password);?>
                </div>
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label text-right" >
                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
                </label>
                <div class="col-sm-3">
                    <?php echo form_input($password_confirm);?>
                </div>
            </div>

      <?php if ($this->ion_auth->is_admin()): ?>
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>
      <?php endif ?>

      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

        <div class="box-footer">
            <button name="submit" type="submit" class="btn btn-info btn-flat ">
                <i class="fa fa-save"></i> 
                Save
            </button>
            <a href="<?php echo base_url('auth/index/') ?>" class="btn btn-github btn-flat ">
                <i class="fa fa-reply "></i> 
                Back
            </a>
        </div>

<?php echo form_close();?>


</div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php get_admin_footer(); ?>
