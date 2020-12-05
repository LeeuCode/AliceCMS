<?php 

require_once THEMEPATH.'includes/header.php'; ?>
<!-- page-banner -->
<section class="page-banner" style="background-image:url(<?php echo base_url().$portfolioCrumb->banner; ?>)"> 
    <div class="banner-content flex-container">
        <h1 class="banner-heading">
            <?php echo isset($portfolioCrumb->title) ? $portfolioCrumb->title : 'Portfolio'; ?>
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item">
                    <a href="<?php echo isset($portfolioCrumb->id) ? base_url().'page/'.$portfolioCrumb->id.'/'.url_title($portfolioCrumb->title).'/' : '#'; ?>">
                        <?php echo isset($portfolioCrumb->title) ? $portfolioCrumb->title : 'Portfolio'; ?>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $portfolio->portfolio_name; ?></li>
            </ol>
        </nav>
    </div>
</section>
<!-- /.page-banner -->

<!-- service-container -->
<section class="service-container"  >
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-6">
                <img style="width: 100%;" class="img-rounded" src="<?php echo base_url().$portfolio->thumbnail; ?>" alt="<?php echo $portfolio->portfolio_name; ?>">
            </div>

            <div class="col-md-6">

                <h3 class="service-title" ><?php echo $portfolio->portfolio_name; ?></h3>
                <?php echo htmlspecialchars_decode($portfolio->content); ?>

                <p><strong>Category :</strong> <?php echo $portfolio->category_name; ?> </p>

                <div class="portfolio-btn">
                    <a href="<?php echo $link['single_portfolio_getPro']; ?>" class="btn btn-success btn-md"> 
                        <i class="fa fa-paper-plane"></i> 
                        <?php echo @$title['single_portfolio_getPro']; ?>
                    </a>
                    <?php if (!empty($portfolio->link)) : ?>
                        <a href="<?php echo $portfolio->link; ?>" class="btn btn-primary btn-md">
                            <i class="fa fa-link"></i>
                            <?php echo @$title['single_portfolio_visitSite']; ?>
                        </a>
                    <?php endif; ?>

    <?php
    $screenshots = unserialize($portfolio->screenshots);

    if (is_array($screenshots) && !empty($screenshots[0])) :
        ?>
        <a href="#gallery-screenshots" class="btn btn-default btn-md btn-gallery">
            <i class="fa fa-eye"></i> 
            <?php echo @$title['single_portfolio_Screenshots']; ?>
                        </a>

                        <div id="gallery-screenshots" style="display:none;">
            <?php foreach ($screenshots as $id => $screenshot) : ?>
                                <a href="<?php echo $screenshot; ?>">screenshot <?php echo $id; ?></a>
            <?php endforeach; ?>
                        </div>

    <?php endif; ?>
                </div>
            </div>   
        </div>
    </div>
</section>
<!-- /.service-container -->

<!-- portfolio -->
<section class="portfolio single-portfolio" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title" <?php echo isset($subtitle['single_portfolio']) ? 'style="margin-bottom:25px;"' : ''; ?>>
                    <?php echo @$title['single_portfolio']; ?>
                </h2>
                <p class="section-short-description">
                    <?php echo @$subtitle['single_portfolio']; ?>
                </p>
            </div>

            <?php
            

            foreach ($portfolios as $item) :
                ?>

                <div class="portfolio-item col-md-4 col-sm-6">
                    <div class="box">
                        <img src="<?php echo base_url().$item->thumbnail; ?>" alt="">
                        <div class="box-content">
                            <h3 class="title"><?php echo $item->portfolio_name; ?></h3>
                            <span class="post"><?php echo $item->category_name; ?></span>
                        </div>
                        <ul class="icon">
                            <li><a class="test-popup-link" href="<?php echo $item->thumbnail; ?>"><i class="fa fa-search"></i></a></li>
                            <li><a href="<?php echo base_url().'portfolio/'.$item->id.'/'.url_title($item->portfolio_name).'/'; ?>"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /.portfolio -->

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
