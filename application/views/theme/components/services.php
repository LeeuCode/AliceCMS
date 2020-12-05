<?php
// $stmt This is a select all sliders.
$stmt = $this->db->query('SELECT * FROM services ORDER BY id DESC');

// $sliders Return all sliders as object.
$services = $stmt->result();

$counter = 0;
?>

<!-- hero -->
<section class="hero">
    <div class="container">
        <div class="row">
            <?php
            foreach ($services as $service) :
                if ($counter < 3) :
                    ?>

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
                    <?php
                    $counter++;
                endif;
            endforeach;
            ?>
        </div>
    </div>
</section>
<!-- /.hero -->

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

                foreach (array_slice($services, 3) as $service) :
                    ?>

                    <!-- service-section-content -->
                    <div class="col-md-4">
                        <div class="service-section-content">
                            <span class="service-icon">
                                <i class="<?php echo $service->icon; ?>"></i>
                            </span>
                            <h4 class="service-heading">
                                <a href="<?php echo base_url().'service/'.$service->id.'/'.url_title($service->name).'/'; ?>"> 
                                    <?php echo $service->name; ?>
                                </a>
                            </h4>
                            <p class="service-description" >
                                <?php echo $service->short_description; ?>
                            </p>
                            <a class="read-more" href="<?php echo base_url().'service/'.$service->id.'/'.url_title($service->name).'/'; ?>" >
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

                <?php
                $stmtPlan = $this->db->query('SELECT * FROM plans LIMIT 3');
                $plans    = $stmtPlan->result();

                foreach ($plans as $plan) :
                    ?>

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
