
<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Portfolio Categories</span> 
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/portfolios_categories/'; ?>"> Portfolio Categories</a></li>
            <li class="active"> Edit </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="col-md-12">
            
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
            
        </div>
        <div class="col-md-6" >
            <form class="form-horizontal" action="<?php echo base_url().'admin/portfolios_categories/update/'.$portfolio_cat->id; ?>/" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-success ">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Category</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="category_name" class="col-xs-3 control-label text-right">Category Name</label>
                            <div class="col-xs-9">
                                <input name="category_name" type="text" class="form-control" id="category_name" value="<?php echo $portfolio_cat->category_name; ?>" >
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button name="submit" type="submit" class="btn btn-info btn-flat " >
                            <i class="fa fa-save"></i> 
                            Update
                        </button>
                        <a href="<?php echo base_url().'admin/portfolios_categories/'; ?>" class="btn btn-github btn-flat ">
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