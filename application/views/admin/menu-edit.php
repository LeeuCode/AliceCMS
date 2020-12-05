<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Edit Menu</span>
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/menus/'; ?>"> Menus</a></li>
            <li class="active"> Edit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div >

            <?php if (isset($_SESSION['message'])) : ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong><i class="icon fa fa-check"></i> Success!</strong>
                    <?php
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    ?>
                </div>
            <?php endif; ?>
            <form class="form-horizontal" action="<?php echo base_url().'admin/menus/update/'.$menu->id.'/'; ?>" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="form-group">
                            <label for="menu-type" class="col-sm-2 control-label text-right" >Menu Type</label>
                            <div class="col-sm-3">
                                <select name="menu_type" id="menu-type" class="form-control choose-menu-type ">
                                    <option value="Standard" <?php echo ($menu->menu_type == 'Standard') ? 'selected' : ''; ?> >Standard Menu</option>
                                    <option value="page" <?php echo ($menu->menu_type == 'page') ? 'selected' : ''; ?> >Menu From Page</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group choose-page" <?php echo ($menu->menu_type == 'page' ) ? 'style="display:block;"' : ''; ?> >
                            <label for="page_id" class="col-sm-2 control-label text-right" >Page</label>
                            <div class="col-sm-3">
                                <select name="page_id" id="page_id" class="form-control ">
                                    <option value="0" >Choose Page ...</option>
                                    <?php foreach ($pages as $page) : ?>
                                        <option value="<?php echo $page->id; ?>" <?php echo ($page->id == $menu->page_id) ? 'selected' : ''; ?> >
                                            <?php echo $page->title; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group other-menu " <?php echo ($menu->menu_type == 'page' ) ? 'style="display:none;"' : ''; ?> >
                            <label for="menu_name" class="col-sm-2 control-label text-right">Menu Name</label>
                            <div class="col-sm-3">
                                <input name="menu_name" type="text" class="form-control" id="menu_name" value="<?php echo $menu->menu_name; ?>" >
                            </div>
                        </div>

                        <div class="form-group other-menu" <?php echo ($menu->menu_type == 'page' ) ? 'style="display:none;"' : ''; ?> >
                            <label for="menu_url" class="col-sm-2 control-label text-right">Menu URL</label>
                            <div class="col-sm-3">
                                <input name="menu_url" type="text" class="form-control" id="menu_url" value="<?php echo $menu->menu_url; ?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="menu_parent" class="col-sm-2 control-label text-right" >Menu Parent</label>
                            <div class="col-sm-3">
                                <select name="menu_parent" id="menu_parent" class="form-control">
                                    <option value="0" >No Parent</option>

                                    <?php
                                    foreach ($menus as $pMenu) :
                                        if ($pMenu->id != $menu->id && $pMenu->menu_parent != $menu->id) :
                                            ?>
                                            <option value="<?php echo $pMenu->id; ?>" <?php echo ($pMenu->id == $menu->menu_parent ) ? 'selected' : ''; ?> >
                                                <?php echo ($pMenu->menu_type == 'page' ) ? $pMenu->title : $pMenu->menu_name; ?>
                                            </option>
                                            <?php
                                        endif;
                                    endforeach;
                                    ?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="menu_order" class="col-sm-2 control-label text-right">Menu Order</label>
                            <div class="col-sm-1">
                                <input name="menu_order" type="number" class="form-control" id="menu_order" value="<?php echo $menu->menu_order; ?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="menu_order" class="col-sm-2 control-label text-right">Menu Settings</label>
                            <div class="col-sm-3">
                                <div class="checkbox">
                                    <label>
                                        <input name="menu_header" type="checkbox" <?php echo ($menu->menu_header) ? 'checked=""' : ''; ?> value="1" >
                                        Header Menu
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="menu_one" type="checkbox" <?php echo ($menu->menu_one) ? 'checked=""' : ''; ?> value="1" >
                                        Footer Menu One
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="menu_two" type="checkbox" <?php echo ($menu->menu_two) ? 'checked=""' : ''; ?> value="1">
                                        Footer Menu Two
                                    </label>
                                </div>                              
                            </div> 
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button name="submit" type="submit" class="btn btn-info btn-flat " >
                            <i class="fa fa-save"></i>
                            Save
                        </button>
                        <a href="<?php echo base_url().'admin/menus/'; ?>" class="btn btn-github btn-flat ">
                            <i class="fa fa-reply "></i>
                            Back
                        </a>
                    </div>
                </div>
                <!-- /.box -->
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php get_admin_footer(); ?>