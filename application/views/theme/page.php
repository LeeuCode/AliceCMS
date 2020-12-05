<?php require_once THEMEPATH.'includes/header.php'; ?>

<!-- page-banner -->
<section class="page-banner" style="background-image:url(<?php echo base_url().$page->banner; ?>)">
    <div class="banner-content flex-container">
        <h1 class="banner-heading"><?php echo $page->title; ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url(); ?>">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $page->title; ?>
                </li>
            </ol>
        </nav>
    </div>
</section>
<!-- /.page-banner -->

<?php
switch ($page->layout) {
    case 'About-us':
            require_once THEMEPATH.'components/about.php';
        break;

    case 'Portfolio':
            require_once THEMEPATH.'components/portfolios.php';
        break;

    case 'Services':
            require_once THEMEPATH.'components/services.php';
        break;

    case 'Contact':
            require_once THEMEPATH.'components/contact-us.php';
        break;

    case 'faq':
            require_once THEMEPATH.'components/faq.php';
        break;

    case 'Standard':
            require_once THEMEPATH.'components/standard.php';
        break;

    default:
        break;
}//end switch
?>


<?php require_once THEMEPATH.'includes/footer.php'; ?>