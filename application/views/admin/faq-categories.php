<?php get_admin_header(); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>FAQ Categories</span> 
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"> FAQ Categories</li>
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
            <form class="form-horizontal" action="<?php echo base_url().'admin/faq_categories/store/'; ?>" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-success ">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Category</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="service-name" class="col-xs-3 control-label text-right">Category Name</label>
                            <div class="col-xs-9">
                                <input name="category_name" type="text" class="form-control" id="service-name" >
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button name="submit" type="submit" class="btn btn-info btn-flat " >
                            <i class="fa fa-save"></i> 
                            Save
                        </button>
                    </div>
                </div>
                <!-- /.box -->
            </form>
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">All Categories</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-master">
                        <tr>
                            <th>Category Name</th>
                            <th>FAQ Count</th>
                            <th>Last Updated</th>
                            <th>Control</th>
                        </tr>
                        <?php 
                        if (isset($categories) && is_array($categories)) :
                            foreach ($categories as $category) :
                        ?>
                            <tr>
                                <td >
                                    <p><?php echo $category->category_name; ?></p>
                                </td>
                                <td>
                                    <p class="badge  <?php echo ($category->categoryCount == '0' ) ? 'bg-orange' : 'bg-blue'; ?> " ><?php echo $category->categoryCount; ?></p>
                                </td>
                                <td>
                                    <p><?php echo date('d/m/Y', strtotime($category->created_at)); ?></p>
                                </td>
                                <td>
                                    <a href="<?php echo base_url().'admin/faq_categories/edit/'.$category->id; ?>/" class="btn btn-xs btn-primary btn-flat">
                                        <i class="fa fa-edit" ></i>
                                    </a>
                                    <button type="button" data-toggle="modal" data-target="#modal-remove-<?php echo $category->id; ?>"  class="btn btn-xs btn-danger btn-flat remove-item">
                                        <i class="fa fa-trash" ></i>
                                    </button>

                                    <form action="<?php echo base_url().'admin/faq_categories/delete/'.$category->id; ?>/" method="post">
                                        <?php get_csrf_input(); ?>
                                        <div class="modal fade" id="modal-remove-<?php echo $category->id; ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">Remove Item</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong><i class="fa fa-warning"></i> Would you like to delete the item?</strong> <br> When you clear the item, you will not be able to retrieve it again</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle-o"></i> Close</button>
                                                        <button name="submit" type="submit" class="btn btn-danger"><i class="fa fa-trash" ></i> Delete</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                    </form>
                                </td>
                            </tr>
                        <?php 
                            endforeach;
                        endif; 
                        ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php get_admin_footer(); ?>