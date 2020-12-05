<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="<?php echo active_parent('home'); ?>" >
                <a href="<?php echo base_url().'admin/'; ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview <?php echo active_parent('pages'); ?>">
                <a href="#"><i class="fa fa-file-text-o"></i> <span>Pages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('pages/index/'); ?>" ><a href="<?php echo base_url().'admin/pages/index/'; ?>">All Pages</a></li>
                    <li class="<?php echo active('pages/create/'); ?>" ><a href="<?php echo base_url().'admin/pages/create/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('menus'); ?>">
                <a href="#"><i class="fa fa-list-alt"></i> <span>Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('menus/index/'); ?>" ><a  href="<?php echo base_url().'admin/menus'; ?>">All Menus</a></li>
                    <li class="<?php echo active('menus/create/'); ?>" ><a href="<?php echo base_url().'admin/menus/create/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('sliders'); ?>">
                <a href="#"><i class="fa fa-image"></i> <span>Slideshow</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('sliders/index/'); ?>" ><a href="<?php echo base_url().'admin/sliders/index/'; ?>">All Slideshow</a></li>
                    <li class="<?php echo active('sliders/create/'); ?>" ><a href="<?php echo base_url().'admin/sliders/create/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('services'); ?> ">
                <a href="#"><i class="fa fa-puzzle-piece"></i> <span>Services</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('services/index/'); ?>" ><a href="<?php echo base_url().'admin/services/index/'; ?>">All Services</a></li>
                    <li class="<?php echo active('services/create/'); ?>" ><a href="<?php echo base_url().'admin/services/create/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview  <?php echo active_parent('portfolios'); ?> <?php echo active('portfolios_categories/index/'); ?> ">
                <a href="#"><i class="fa fa-folder-open"></i> <span>Portfolio</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('portfolios/index/'); ?>" ><a href="<?php echo base_url().'admin/portfolios/index/'; ?>">All Portfolio</a></li>
                    <li class="<?php echo active('portfolios/create/'); ?>" ><a href="<?php echo base_url().'admin/portfolios/create/'; ?>">Add New</a></li>
                    <li class="<?php echo active('portfolios_categories/index/'); ?>" ><a href="<?php echo base_url().'admin/portfolios_categories/index/'; ?>">Portfolio Categories</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('plans'); ?>">
                <a href="#"><i class="fa fa-money"></i> <span>Price Plans</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('plans/index/'); ?>" ><a href="<?php echo base_url().'admin/plans/index/'; ?>">All Price Plans</a></li>
                    <li class="<?php echo active('plans/create/'); ?>" ><a href="<?php echo base_url().'admin/plans/create/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('members'); ?>">
                <a href="#"><i class="fa fa-group"></i> <span>Team</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('members/index/'); ?>" ><a href="<?php echo base_url().'admin/members/index/'; ?>">All Team</a></li>
                    <li class="<?php echo active('members/create/'); ?>" ><a href="<?php echo base_url().'admin/members/create/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('auth'); ?>">
                <a href="#"><i class="fa fa-user"></i> <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('auth/index/'); ?>" ><a href="<?php echo base_url().'auth/index/'; ?>">All Users</a></li>
                    <li class="<?php echo active('auth/create_user/'); ?>" ><a href="<?php echo base_url().'auth/create_user/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('testimonials'); ?> ">
                <a href="#"><i class="fa fa-comments-o"></i> <span>Testimonials</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('testimonials/index/'); ?>" ><a href="<?php echo base_url().'admin/testimonials/index/'; ?>"> All Testimonials</a></li>
                    <li class="<?php echo active('testimonials/create/'); ?>" ><a href="<?php echo base_url().'admin/testimonials/create/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('partners'); ?>">
                <a href="#"><i class="fa fa-handshake-o"></i> <span>Partners</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('partners/index/'); ?>" ><a href="<?php echo base_url().'admin/partners/index/'; ?>">All Partners</a></li>
                    <li class="<?php echo active('partners/create/'); ?>" ><a href="<?php echo base_url().'admin/partners/create/'; ?>">Add New</a></li>
                </ul>
            </li>

            <li class="treeview <?php echo active_parent('faqs'); ?> <?php echo active_parent('faq_categories'); ?>">
                <a href="#"><i class="fa fa-question-circle"></i> <span>FAQ</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo active('faqs/index/'); ?>" ><a href="<?php echo base_url().'admin/faqs/'; ?>">FAQ</a></li>
                    <li class="<?php echo active('faqs/create/'); ?>" ><a href="<?php echo base_url().'admin/faqs/create/'; ?>">Add New</a></li>
                    <li class="<?php echo active_parent('faq_categories'); ?>" ><a href="<?php echo base_url().'admin/faq_categories/'; ?>">FAQ Categories</a></li>
                </ul>
            </li>

            <li class="<?php echo active_parent('subscribers'); ?>" >
                <a href="<?php echo base_url().'admin/subscribers/'; ?>">
                    <i class="fa fa-paper-plane"></i> <span>Subscribers</span>
                </a>
            </li>

            <li class="<?php echo active('general/layout/'); ?>">
                <a href="<?php echo base_url().'admin/general/layout/'; ?>">
                    <i class="fa fa-paint-brush"></i> <span>Sections Layout</span>
                </a>
            </li>

            <li class="<?php echo active('general/settings/'); ?>">
                <a href="<?php echo base_url().'admin/general/settings/'; ?>">
                    <i class="fa fa-cogs"></i> <span>General Settings</span>
                </a>
            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
