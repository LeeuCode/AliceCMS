<?php get_admin_header(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <span>Create FAQ</span> 
        </h1>

        <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'admin/'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url().'admin/faqs/'; ?>"> FAQ</a></li>
            <li class="active"> Create</li>
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

            <form class="form-horizontal" action="<?php echo base_url().'admin/faqs/update/'.$faq->id; ?>/" method="post" >
                <?php get_csrf_input(); ?>
                <div class="box box-primary">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="FAQ-Title" class="col-sm-2 control-label text-right">FAQ Title</label>
                            <div class="col-sm-4">
                                <input name="title" type="text" class="form-control" id="FAQ-Title" value="<?php echo $faq->title; ?>" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="FAQ-Category" class="col-sm-2 control-label text-right">FAQ Category</label>
                            <div class="col-sm-5">
                                <select name="category_id" id="FAQ-Category" class="form-control">
                                    <option value="0" <?php echo ($faq->category_id == '') ? 'selected' : ''; ?> >Select Category ....</option>
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?php echo $category->id; ?>" <?php echo ($faq->category_id == $category->id) ? 'selected' : ''; ?> ><?php echo $category->category_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="FAQ-Content" class="col-sm-2 control-label text-right">FAQ Content</label>
                            <div class="col-sm-9">
                                <textarea name="content" class="form-control editor" rows="3" id="FAQ-Content" ><?php echo $faq->content; ?></textarea>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button name="submit" type="submit" class="btn btn-info btn-flat " >
                            <i class="fa fa-save"></i> 
                            Save
                        </button>
                        <a href="<?php echo base_url().'admin/faqs/'; ?>" class="btn btn-github btn-flat ">
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