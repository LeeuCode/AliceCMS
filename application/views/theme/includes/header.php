<?php
// Include the general Site settings file.
require_once THEMEPATH.'general-settings.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta name="description" content="<?php echo @$description; ?>">
        <meta name="keywords" content="<?php echo @$keywords; ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title><?php echo $setting->site_name.$pageTitle; ?></title>

        <link rel="shortcut icon" href="<?php echo base_url().$setting->fivicon; ?>" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/bootsnav.css">
        <!-- Animation Liberary -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/animate.css">
        <!-- Magnific PopUp -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/magnific-popup.css">
        <!-- Main file CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/style.css">
        <style>
            .item{
                text-align: center;
            }
            .control-buttons{
                text-align:center;
            }
        </style>
    </head>
    <body>

        <div style="display:none;" class="container loading">
            <div class="row">
                <div class="col-md-12">
                    <div class="loader">
                        <div class="loader-inner"></div>
                        <div class="loader-inner"></div>
                        <div class="loader-inner"></div>
                        <div class="loader-inner"></div>
                        <div class="loader-inner"></div>
                        <div class="loader-inner"></div>
                        <div class="loader-inner"></div>
                        <div class="loader-inner"></div>
                        <div class="loader-inner"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- xs-header-top -->
        <div class="xs-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                        <div class="header-top-info">
                            <ul>
                                <li><i class="fa fa-road"></i> <?php echo $setting->address; ?></li>
                                <li><i class="fa fa-phone"></i> <?php echo $phone['primary']; ?></li>
                            </ul>
                        </div>
                    </div><!-- .col end -->

                    <div class="col-lg-6 align-self-center col-md-4 col-sm-4 col-xs-12">
                        <div class="header-top-social">
                            <ul>
                                <?php
                                if (isset($socail_icon) && is_array($socail_icon)) :
                                    foreach ($socail_icon as $id => $icon) :
                                        ?>
                                        <li><a href="<?php echo $socail_link[$id]; ?>"><i class="fa fa-<?php echo $icon; ?>"></i></a></li>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div><!-- .col end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div>
        <!-- /.xs-header-top -->

        <!-- header -->
        <header class="header">
            <nav class="navbar navbar-default navbar-mobile bootsnav on">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-3 col-ms-3 col-xs-3">
                            <img class="logo" src="<?php echo base_url().$setting->logo; ?>" alt="<?php echo $setting->site_name; ?>">
                        </div>
                        <div class="col-md-9 pull-right">
                            <!--<nav class="navbar navbar-default navbar-mobile bootsnav on">-->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="navbar-menu">
                                <ul class="nav navbar-nav pull-right" data-in="fadeInDown" data-out="fadeOutUp">
                                    <?php echo hierarchy(); ?>
                                </ul>
                            </div>
                            <!--</nav>--> 
                        </div>
                    </div>
                </div>
            </nav>
        </header>
