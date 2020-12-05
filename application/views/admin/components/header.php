<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo 'Admin Panel'.$page_title; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/font-awesome.min.css">
        <!-- include summernote css/js -->
        <link href="<?php echo base_url().'assets/admin/'; ?>js/summernote-master/dist/summernote.css" rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/buttons.dataTables.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/bootstrap-colorpicker.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>plugins/iCheck/square/blue.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/admin.min.css">
        <!-- skin style admin panel -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/skins/skin-blue.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="<?php echo base_url().'admin/'; ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>C</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Alice</b> CMS</span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li>
                                <form action="<?php echo base_url().'assets/admin/logout/'; ?>" method="post">
                                    <?php get_csrf_input(); ?>
                                    <button name="submit" type="submit" class="btn-logout">
                                    <i class="fa fa-sign-out"></i> LogOut  
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->

<?php get_admin_sidebar(); ?>