<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-puzzle-piece"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Services</span>
                        <span class="info-box-number"><?php echo $services_count; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-folder-open"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Portfolio</span>
                        <span class="info-box-number"><?php echo $portfolios_count; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-group"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Team</span>
                        <span class="info-box-number"><?php echo $members_count; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-paper-plane"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Subscribers</span>
                        <span class="info-box-number"><?php echo $subscribers_count; ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Slideshow -->
            <div class="col-md-9">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-image"></i> Slideshow</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <?php if(isset($sliders) && is_array($sliders)) : ?>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php foreach ($sliders as $id => $slider) : ?>
                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $id; ?>" <?php echo ($id == 0) ? 'class="active"' : ''; ?>></li>
                                <?php endforeach; ?>
                            </ol>
                            <div class="carousel-inner">
                                <?php foreach ($sliders as $id => $slider) : ?>
                                    <div class="item <?php echo ($id == 0) ? 'active' : ''; ?>">
                                        <img src="<?php echo base_url().$slider->image; ?>" alt="<?php echo $slider->title; ?>">

                                        <div class="carousel-caption">
                                            <?php echo $slider->title; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </div>
                        <?php endif; ?> 
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- Slideshow -->

            <div class="col-md-3">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo $plans_count; ?></h3>

                        <p>Price Plans</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-money"></i>
                    </div>
                    <a href="<?php echo base_url().'admin/plans/'; ?>" class="small-box-footer">
                        Show All <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>

                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $testimonials_count; ?></h3>

                        <p>Testimonials</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-comments-o"></i>
                    </div>
                    <a href="<?php echo base_url().'admin/testimonials/'; ?>" class="small-box-footer">
                        Show All <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>

                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo $partners_count; ?></h3>

                        <p>Partners</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                    <a href="<?php echo base_url().'admin/partners/'; ?>" class="small-box-footer">
                        Show All <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>

            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php get_admin_footer(); ?>