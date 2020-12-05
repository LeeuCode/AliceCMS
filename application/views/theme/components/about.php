<!-- service-container -->
<section class="service-container" >
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img style="width: 100%;" class="img-rounded" src="<?php echo base_url().$page->thumbnail; ?>" alt="">
            </div>

            <div class="col-md-6">
                <h2 class="service-title" ><?php echo $page->title; ?></h2>
                <?php echo htmlspecialchars_decode($page->content); ?>
            </div>   
        </div>
    </div>

</section>
<!-- /.service-container -->

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

            <?php
            $stmtTeam = $this->db->query('SELECT * FROM members ORDER BY id DESC Limit 4 ');

            $team = $stmtTeam->result();

            foreach ($team as $member) :
                ?>

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
                            <?php foreach ($socailLink as $id => $link) : ?>
                                <li><a href="<?php echo $link; ?>"><i class="fa fa-<?php echo $socailIcon[$id]; ?>"></i></a></li>
                            <?php endforeach; ?>
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
                    <?php
                    $stmtTestimonial = $this->db->query('SELECT * FROM testimonials ORDER BY id DESC');

                    $testimonials = $stmtTestimonial->result();

                    foreach ($testimonials as $testimonial) :
                        ?>
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

                <?php
                $stmtPartner = $this->db->query('SELECT * FROM partners  ORDER BY id DESC');

                $partners = $stmtPartner->result();

                foreach ($partners as $partner) :
                    ?>

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