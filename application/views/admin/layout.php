<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Section Layout</span> 
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Section Layout</li>
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

        <form action="<?php echo $formLink; ?>" method="post">
            <?php get_csrf_input(); ?>
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom" style="overflow:hidden;" >
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#Services" data-toggle="tab">
                            <b> <i class="fa fa-puzzle-piece " ></i> Services</b>
                        </a>
                    </li>
                    <li>
                        <a href="#video" data-toggle="tab">
                            <b><i class="fa fa-youtube-play" ></i> Video</b>
                        </a>
                    </li>
                    <li>
                        <a href="#why_we_choose" data-toggle="tab">
                            <b> <i class="fa fa-briefcase " ></i> Why Choose Us</b>
                        </a>
                    </li>
                    <li>
                        <a href="#Counter" data-toggle="tab">
                            <b> <i class="fa fa-th-large" ></i> Counter</b>
                        </a>
                    </li>
                    <li>
                        <a href="#Portfolio" data-toggle="tab">
                            <b> <i class="fa fa-folder-open" ></i> Portfolio</b>
                        </a>
                    </li>
                    <li>
                        <a href="#Pricing-plan" data-toggle="tab" >
                            <b><i class="fa fa-money"></i> Pricing plan</b>
                        </a>
                    </li>
                    <li>
                        <a href="#Team" data-toggle="tab" >
                            <b><i class="fa fa-group"></i> Team</b>
                        </a>
                    </li>
                    <li>
                        <a href="#Testimonials" data-toggle="tab" >
                            <b><i class="fa fa-comments-o"></i> Testimonials</b>
                        </a>
                    </li>
                    <li>
                        <a href="#Partners" data-toggle="tab" >
                            <b><i class="fa fa-handshake-o"></i> Partners</b>
                        </a>
                    </li>
                    <li>
                        <a href="#Talkus" data-toggle="tab">
                            <b><i class="fa fa-commenting" ></i> Talk us</b>
                        </a>
                    </li>
                    <li>
                        <a href="#Footer" data-toggle="tab">
                            <b><i class="fa fa-delicious" ></i> Footer</b>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active" id="Services">
                        <?php get_admin_components('layout/services'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="video">
                        <?php get_admin_components('layout/video'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="why_we_choose">
                        <?php get_admin_components('layout/why-we-tab'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Counter">
                        <?php get_admin_components('layout/counter-tab'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Portfolio">
                        <?php get_admin_components('layout/portfolio'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Pricing-plan">
                        <?php get_admin_components('layout/pricing-plan'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Team">
                        <?php get_admin_components('layout/team'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Testimonials">
                        <?php get_admin_components('layout/testimonials'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Partners">
                        <?php get_admin_components('layout/partners'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Talkus">
                        <?php get_admin_components('layout/talk-us'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="Footer">
                        <?php get_admin_components('layout/footer'); ?>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="col-md-12">
                        <button name="submit" type="submit" class="btn btn-flat btn-primary margin-bottom-30" >
                            <i class="fa fa-save"></i> 
                            Save
                        </button>
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </form>
    </section>
    <!-- /.content -->
</div>

<?php get_admin_footer(); ?>