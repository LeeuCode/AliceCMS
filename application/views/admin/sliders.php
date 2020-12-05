<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Slideshow</span> 
            <a href="<?php echo base_url().'admin/sliders/create/'; ?>" class="btn btn-primary btn-flat">
                <i class="fa fa-plus"></i> Add New
            </a>
        </h1>

        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Slideshow</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div>

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

            <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-master">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Last Updated</th>
                            <th>Control</th>
                        </tr>
                        <?php
                        if (isset($sliders) && is_array($sliders)) :
                            foreach ($sliders as $slider) : ?>
                            <tr>
                                <td width="120">
                                    <img  src="<?php echo base_url().$slider->image; ?>" class="img-thumbnail" alt="">
                                </td>
                                <td>
                                    <h4><?php echo $slider->title; ?></h4>
                                </td>
                                <td>
                                    <h4><?php echo date('d/m/Y', strtotime($slider->created_at)); ?></h4>
                                </td>
                                <td>
                                    <a href="<?php echo base_url().'admin/sliders/edit/'.$slider->id; ?>/" class="btn btn-sm btn-primary btn-flat">
                                        <i class="fa fa-edit" ></i>
                                    </a>
                                    <button type="button" data-toggle="modal" data-target="#modal-remove-<?php echo $slider->id; ?>"  class="btn btn-sm btn-danger btn-flat remove-item">
                                        <i class="fa fa-trash" ></i>
                                    </button>

                                    <form action="<?php echo base_url().'admin/sliders/delete/'.$slider->id; ?>/" method="post">
                                        <?php get_csrf_input(); ?>
                                        <div class="modal fade" id="modal-remove-<?php echo $slider->id; ?>">
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

                    <div class="col-md-12">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
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