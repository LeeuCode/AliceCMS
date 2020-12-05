<!-- footer -->
<footer class="footer section-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-heading" ><?php echo @$title['footerSection1']; ?></h3>
                <p class="footer-about"><?php echo @$subtitle['footerSection1']; ?></p>

                <ul class="contact-footer-list">
                    <li>
                        <i class="fa fa-map-marker contact-list-icon"></i>
                        <span class=""><?php echo $setting->address; ?></span>
                    </li>
                    <li>
                        <i class="fa fa-mobile contact-list-icon"></i>
                        <span class=""><?php echo @$phone['primary']; ?></span>
                    </li>
                    <li>
                        <i class="fa fa-envelope-o contact-list-icon"></i>
                        <span class="d-inline-block width-85 vertical-align-top padding-10px-left">
                            <?php echo @$email['primary']; ?>
                        </span>
                    </li>
                </ul>

            </div>

            <?php
            $sql = "SELECT pages.title , menus.* FROM menus 
                    LEFT JOIN pages ON menus.page_id = pages.id 
                    WHERE menus.menu_one = '1'";
            $menuOne = $this->db->query($sql);

            if ($menuOne->num_rows() > 0) :
            
            ?>

                <div class="col-md-2">

                    <h3 class="footer-heading" ><?php echo $title['footerSection2']; ?></h3>

                    <ul class="contact-footer-list footer-link-list">

                        <?php
                        foreach ($menuOne->result() as $itemOne) :
                            // Create menu link if menu type is Standard get menu url , or get link by page id.
                            $menuLink = ( $itemOne->menu_type == 'Standard' ) ? $itemOne->menu_url : base_url().'page/'.url_title($itemOne->title);
                            // Create menu title.
                            $menuTitle = ( $itemOne->menu_type == 'Standard' ) ? $itemOne->menu_name : $itemOne->title;
                            ?>

                            <li>
                                <a href="<?php echo $menuLink; ?>">
                                    <i class="fa  fa-angle-right "></i> 
                                    <span class=""><?php echo $menuTitle; ?></span>
                                </a>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

    <?php
    $sql  = "SELECT pages.title , menus.* FROM menus 
            LEFT JOIN pages ON menus.page_id = pages.id 
            WHERE menus.menu_two = '1' ";

    $stmtMenuTwo = $this->db->query($sql);

    $menuTwo = $stmtMenuTwo->result();


    if ($stmtMenuTwo->num_rows() > 0) :
        ?>

        <div class="col-md-3">
            <h3 class="footer-heading" ><?php echo @$title['footerSection3']; ?></h3>
            <!-- <div class="col-md-6"> -->
            <ul class="contact-footer-list footer-link-list">
                <?php
                foreach ($menuTwo as $itemTwo) :
                    // Create menu link if menu type is Standard get menu url , or get link by page id.
                    $menuLinkTwo = ( $itemTwo->menu_type == 'Standard' ) ? $itemTwo->menu_url : base_url().'page/'.url_title($itemTwo->title);
                    // Create menu title.
                    $menuTitleTwo = ( $itemTwo->menu_type == 'Standard' ) ? $itemTwo->menu_name : $itemTwo->title;
                    ?>

                    <li>
                        <a href="<?php echo $menuLinkTwo; ?>">
                            <i class="fa  fa-angle-right "></i> 
                            <span class=""><?php echo $menuTitleTwo; ?></span>
                        </a>
                            </li>

                <?php endforeach; ?>
                    </ul>
                    <!-- </div> -->
                </div>

    <?php endif; ?>

            <div class="col-md-3">
                <h3 class="footer-heading" ><?php echo @$title['footerSection4']; ?></h3>
                <p><?php echo @$subtitle['footerSection4']; ?></p>
                <div class="form-group footer-subscribe">
                    <form action="<?php echo base_url().'subscriber/create/'; ?>" method="post" class="subscriber-add-form">
                        <?php get_csrf_input(); ?>
                        <input name="email" placeholder="Subscribe with us" id="email" class="form-control" type="email">
                        <button type="submit" class="butn send-join"><span>Join</span></button>
                    </form>
                </div
            </div>
        </div>
    </div>
</footer>
<!-- footer -->