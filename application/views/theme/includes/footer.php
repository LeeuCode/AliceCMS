<?php

$currentPage = $this->router->fetch_method();

if ($currentPage == 'home') {
    require_once THEMEPATH.'includes/footer-home.php';
} else {
    require_once THEMEPATH.'includes/footer-single.php';
}

?>
<!-- xs-header-top -->
<div style="position: static;background-color: #333" class="xs-header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                <div class="header-top-info">
                    <ul>
                        <li>© 2018 VBusiness. All rights reserved</li>
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

<script src="<?php echo base_url(); ?>assets/theme/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/theme/js/owl.carousel.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/theme/js/modernizr.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/bootsnav.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/script.js"></script>
</body>
</html>