<?php require_once THEMEPATH.'includes/header.php'; ?>

<!-- page-banner -->
<section class="page-banner" <?php echo (!empty($serviceCrumb->banner)) ? 'style="background-image: url('.base_url().$serviceCrumb->banner.');"' : ''; ?> >
    <div class="banner-content flex-container">
        <h1 class="banner-heading">
            <?php echo isset($serviceCrumb->title) ? $serviceCrumb->title : 'Services'; ?>
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url().'page/'.$serviceCrumb->id.'/'.url_title($serviceCrumb->title).'/'; ?>">
                        <?php echo isset($serviceCrumb->title) ? $serviceCrumb->title : 'Services'; ?>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $service->name; ?></li>
            </ol>
        </nav>
    </div>
</section>
<!-- /.page-banner -->

<!-- service-container -->
<section class="service-container">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img style="width: 100%;" class="img-rounded" src="<?php echo base_url().$service->image; ?>" alt="<?php echo $service->name; ?>">
            </div>

            <div class="col-md-6">
                <h2 class="service-title" ><?php echo $service->name; ?></h2>
                <?php echo htmlspecialchars_decode($service->content); ?>
            </div>   
        </div>
    </div>

</section>
<!-- /.service-container -->

<!-- services-section -->
<section class="services-section">
    <div class="services-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">
                        <?php echo @$title['single_service']; ?>
                    </h2>
                    <p class="section-short-description">
                        <?php echo @$subtitle['single_service']; ?> 
                    </p>
                </div>

                <?php
                $counter = 1;

                foreach ($recentServices as $recentService) :
                    ?>

                    <!-- service-section-content -->
                    <div class="col-md-4">
                        <div class="service-section-content">
                            <span class="service-icon">
                                <i class="<?php echo $recentService->icon; ?>"></i>
                            </span>
                            <h4 class="service-heading">
                                <a href="<?php echo base_url().'service/'.$recentService->id.'/'.url_title($recentService->name).'/'; ?>"> 
                                    <?php echo $recentService->name; ?>
                                </a>
                            </h4>
                            <p class="service-description" >
                                <?php echo $recentService->short_description; ?>
                            </p>
                            <a class="read-more" href="<?php echo base_url().'service/'.$recentService->id.'/'.url_title($recentService->name).'/'; ?>" >
                                <?php echo @$title['single_service_btnTitle']; ?> <i class="icon fa fa-arrow-circle-o-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /.service-section-content -->
                    <?php
                    if ($counter == 3) :
                        echo '<div class="clearfix"></div>';

                        $counter = 0;
                    endif;

                    $counter++;
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- /.services-section -->

<!-- call-us -->
<section class="call-us">
    <div class="container">
        <div class="row">
            <h4><?php echo @$title['talkUs']; ?></h4>
            <a href="<?php echo @$link['talkUs']; ?>" class="btn"><?php echo @$title['talkUsbtn']; ?></a>
        </div>
    </div>
</section>
<!-- /.call-us -->

<?php require_once THEMEPATH.'includes/footer.php'; ?>