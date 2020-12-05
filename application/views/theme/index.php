<?php require_once THEMEPATH.'includes/header.php'; ?>

<!-- Slideshow -->
<section class="slideshow">
    <hr class="transition-timer-carousel-progress-bar" />

    <div id="myCarousel" class="carousel carousel-fade slide" data-interval="false" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($sliders as $id => $slider) : ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo $id; ?>" <?php echo ($id == 0) ? 'class="active"' : ''; ?> ></li>
            <?php endforeach; ?>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <?php foreach ($sliders as $id => $slider) : ?>
                <div class="<?php echo ($id == 0) ? 'active' : ''; ?> item">
                    <img class="animated slideInDown" style="width: 100%;animation-delay: 0.1s; " src="<?php echo base_url().$slider->image; ?>" alt="<?php echo $slider->title; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="carousel-caption flex-container">
                                <h2 class="animated slideInUp" style="animation-delay: 1s;" ><?php echo $slider->title; ?></h2>
                                <p class="animated bounceInRight" style="animation-delay: 2s;" >
                                    <?php echo $slider->subtitle; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /.Slideshow -->

<!-- hero -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">
                    <?php echo @$title['service']; ?>
                </h2>
                <p class="section-short-description">
                    <?php echo @$subtitle['service']; ?>
                </p>
            </div>

            <?php foreach ($services as $service) : ?>

                <div class="col-md-4 col-sm-6">
                    <div class="serviceBox">
                        <div class="service-icon">
                            <i class="<?php echo $service->icon; ?>"></i>
                        </div>
                        <h3 class="title" >
                            <a class="title" href="<?php echo base_url().'service/'.$service->id.'/'.url_title($service->name).'/'; ?>">
                                <?php echo $service->name; ?>
                            </a>
                        </h3>
                        <p class="description"><?php echo $service->short_description; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /.hero -->

<!-- intro-video -->
<section class="intro-video" style="background-image:url('<?php echo base_url().$image['video']; ?>')" >
    <div class="video-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="video-title">
                        <?php echo @$title['video']; ?>
                    </h2>
                    <p class="video-short-description"><?php echo @$subtitle['video']; ?></p>
                    <a class="video-play link" href="<?php echo @$link['video']; ?>">
                        <i class="fa fa-play-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.intro-video -->

<!-- why-we -->
<section class="why-we">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">
                    <?php echo @$title['whyWe']; ?>
                </h2>
                <p class="section-short-description"><?php echo @$subtitle['whyWe']; ?></p>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <?php
                    if (isset($whyWe_icon) && is_array($whyWe_icon)) :
                        foreach ($whyWe_icon as $id => $icon) :
                            ?>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading<?php echo $id; ?>">
                                    <h4 class="panel-title">
                                        <a <?php echo ($id != 0) ? 'class="collapsed"' : ''; ?> role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $id; ?>">
                                            <i class="<?php echo $icon; ?>"></i> <?php echo $whyWe_title[$id]; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $id; ?>" class="panel-collapse collapse <?php echo ($id == 0) ? 'in' : ''; ?>" role="tabpanel" aria-labelledby="heading<?php echo $id; ?>">
                                    <div class="panel-body">
                                        <?php echo $whyWe_content[$id]; ?>
                                    </div>
                                </div>
                            </div>

                            <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <img style="width: 100%;" class="img-rounded" src="<?php echo base_url().$image['whyWe']; ?>" alt="<?php echo @$title['whyWe']; ?>">
            </div>
        </div>
    </div>
</section>
<!-- /.why-we -->

<!-- stats -->
<section class="stats-section">
    <div class="container">
        <div class="row">

            <?php
            if (isset($counter_icon) && is_array($counter_icon)) :
                foreach ($counter_icon as $countId => $countIcon) :
                    ?>

                    <!-- stats-info -->
                    <div class="col-md-3 col-sm-3 col-xs-6 ">
                        <div class="stats-info">
                            <i class="<?php echo $countIcon; ?>" aria-hidden="true"></i>
                            <p class="counter"><?php echo $counter_number[$countId]; ?></p>
                            <h4><?php echo $counter_title[$countId]; ?></h4>
                        </div>
                    </div>
                    <!-- /.stats-info -->

                    <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- /.stats -->

<!-- portfolio -->
<section class="portfolio" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">
                    <?php echo $title['portfolio']; ?>
                </h2>
                <p class="section-short-description"><?php echo $subtitle['portfolio']; ?></p>
            </div>
            <div class="col-md-12">
                <ul class="portfolio-filter">

                    <li class="active fbtn-filter" data-filter="all">All</li>
                    <?php

                    $founded = [];

                    foreach ($portfolios as $item) :
                        if (!in_array($item->category_name, $founded)) :
                            ?>
                            <li class="fbtn-filter" data-filter="<?php echo url_title($item->category_name); ?>"><?php echo $item->category_name; ?></li>
                            <?php
                        endif;
                        $founded[] = $item->category_name;
                    endforeach;
                    ?>
                </ul>
            </div>
            <?php foreach ($portfolios as $item) : ?>
                <div class="portfolio-item col-md-4 col-sm-6 filter <?php echo url_title($item->category_name); ?>"  >
                    <div class="box">
                        <img src="<?php echo base_url().$item->thumbnail; ?>" alt="<?php echo $item->portfolio_name; ?>">
                        <div class="box-content">
                            <h3 class="title"><?php echo $item->portfolio_name; ?></h3>
                            <span class="post"><?php echo $item->category_name; ?></span>
                        </div>
                        <ul class="icon">
                            <li><a class="test-popup-link" href="<?php echo base_url().$item->thumbnail; ?>"><i class="fa fa-search"></i></a></li>
                            <li><a href="<?php echo base_url().'portfolio/'.$item->id.'/'.url_title($item->portfolio_name).'/'; ?>"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /.portfolio -->

<!-- pricingTable-section -->
<section class="pricingTable-section" style="background-image:url(<?php echo base_url().$image['plan']; ?>)">
    <div class="pricingTable-content" <?php echo ($color['plan'] != '') ? 'style="background-color:'.$color['plan'].';"' : ''; ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">
                        <?php echo $title['plan']; ?>
                    </h2>
                    <p class="section-short-description"><?php echo $subtitle['plan']; ?></p>
                </div>

                <?php foreach ($plans as $plan) : ?>

                    <div class="col-md-4 col-sm-4">
                        <div class="pricingTable">
                            <span class="icon"><i class="<?php echo $plan->plan_icon; ?>"></i></span>
                            <div class="pricingTable-header">
                                <h3 class="title"><?php echo $plan->plan_name; ?></h3>
                                <span class="price-value"><?php echo $plan->plan_price; ?></span>
                            </div>
                            <ul class="pricing-content">
                                <?php
                                // unserialize  plan items to get array.
                                $planItems = unserialize($plan->plan_items);
                                // loop items data.
                                foreach ($planItems as $itemPlan) :
                                    ?>
                                    <li><?php echo $itemPlan; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="<?php echo @$link['btn_pricePlan']; ?>" class="pricingTable-signup"><?php echo @$title['btn_pricePlan']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- /.pricingTable-section -->

<!-- team-section -->
<section class="team-section">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2 class="section-title">
                    <?php echo @$title['team']; ?>
                </h2>
                <p class="section-short-description">
                    <?php echo @$subtitle['team']; ?>
                </p>
            </div>

            <?php foreach ($team as $member) : ?>

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="box">
                        <img src="<?php echo base_url().$member->image; ?>" alt="<?php echo $member->name; ?>">
                        <div class="box-content">
                            <h3 class="title"><?php echo $member->name; ?></h3>
                            <span class="post"><?php echo $member->career; ?></span>
                        </div>

                        <?php
                        $socailIcon = unserialize($member->socail_icon);
                        $socailLink = unserialize($member->socail_link);
                        ?>
                        <ul class="icon">
                            <?php
                            foreach ($socailLink as $id => $link) :
                                if (!empty($link) && !empty($socailIcon[$id])) :
                                    ?>
                                    <li><a href="<?php echo $link; ?>"><i class="fa fa-<?php echo $socailIcon[$id]; ?>"></i></a></li>
                                    <?php
                                endif;
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /.team-section -->

<!-- testimonial-section -->
<section class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">
                    <?php echo @$title['testimonial']; ?>
                </h2>
                <p class="section-short-description">
                    <?php echo @$subtitle['testimonial']; ?>
                </p>
            </div>

            <div class="col-md-offset-2 col-md-8">
                <div id="testimonial-slider" class="owl-carousel">
                    <?php foreach ($testimonials as $testimonial) : ?>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="<?php echo base_url().$testimonial->image; ?>" alt="<?php echo $testimonial->name; ?>">
                            </div>
                            <p class="description"><?php echo $testimonial->comment; ?></p>
                            <h3 class="testimonial-title"><?php echo $testimonial->name; ?></h3>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.testimonial-section -->

<!-- clients-section -->
<section class="clients-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">
                    <?php echo @$title['partner']; ?>
                </h2>
                <p class="section-short-description"><?php echo @$subtitle['partner']; ?></p>
            </div>

            <div class="clients-slider">

                <?php foreach ($partners as $partner) : ?>

                    <div class="item">
                        <a href="<?php echo $partner->partner_link; ?>" target="_blank">
                            <img src="<?php echo base_url().$partner->banner; ?>" alt="<?php echo $partner->partner_name; ?>" title="<?php echo $partner->partner_name; ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- clients-section -->

<?php require_once THEMEPATH.'includes/footer.php'; ?>
