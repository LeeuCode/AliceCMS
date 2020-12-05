<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Create Plan</span> 
            <!-- <button class="btn btn-primary">
                <i class="fa fa-plus"></i> Add New
            </button> -->
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/plans/'; ?>"> Price Plans</a></li>
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

            <form class="form-horizontal" action="<?php echo base_url().'admin/plans/store/'; ?>" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="Photo-Title" class="col-sm-2 control-label text-right">Plan Icon</label>
                            <div class="col-sm-4">
                                <a class="btn btn-app f-ico" data-toggle="modal" data-target="#choose-icon" >
                                    <i class="fa fa-fonticons" ></i>
                                    Choose Icon
                                </a>

                                <input name="plan_icon" class="icon-input" type="hidden">

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
                            <label for="Plan-Name" class="col-sm-2 control-label text-right">Plan Name</label>
                            <div class="col-sm-4">
                                <input name="plan_name" type="text" class="form-control" id="Plan-Name" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Plan-Price" class="col-sm-2 control-label text-right">Plan Price</label>
                            <div class="col-sm-4">
                                <input name="plan_price" type="text" class="form-control" id="Plan-Price" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="screenshots" class="col-sm-2 control-label text-right">Plan Items</label>
                            <div class="col-sm-10">
                                <div class="">
                                    <button type="button" class="btn btn-primary btn-flat add-plan-item">
                                        <i class="fa fa-plus"></i> Add Plan Item
                                    </button>
                                </div>

                                <div class="clearfix">

                                    <div class="plan-items-container">
                                        <div class="col-md-7">
                                            <div class="input-group margin"> 
                                                <input name="plan_items[]" class="form-control" type="text" >
                                                <span class="input-group-btn" >
                                                    <button type="button" class="btn btn-flat btn-danger remove-screenshot">
                                                        <i class="fa fa-trash"></i> 
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
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
                            <a href="<?php echo base_url().'admin/plans/'; ?>" class="btn btn-github btn-flat ">
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