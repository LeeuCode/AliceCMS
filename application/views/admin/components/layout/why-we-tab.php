<div class="row">
    <div class="col-md-12 margin-bottom-30">
        <center>
            <div class="form-group">
                <label for="Section-Title" class=" control-label text-right">Section Title</label>
                <div class="why-we margin">
                    <input name="title[whyWe]" type="text" class="form-control" id="Section-Title" value="<?php echo @$title['whyWe']; ?>" >
                </div>
            </div>
            <div class="form-group">
                <label for="Section-SubTitle" class=" control-label text-right">Section SubTitle</label>
                <div class="why-we margin">
                    <textarea name="subtitle[whyWe]" class="form-control" id="Section-SubTitle" ><?php echo @$subtitle['whyWe']; ?></textarea>
                </div>
            </div>
        </center>
    </div>
    <div class="col-md-6 col-sm-6">
        <button type="button" data-item-id="<?php echo isset($whyWe_icon) ? count($whyWe_icon) : 0; ?>" class="btn btn-primary btn-flat margin-bottom-30 add-whywe-item">
            <i class="fa fa-plus"></i> Add New Item
        </button>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <?php
            if (isset($whyWe_icon) && is_array($whyWe_icon)) :
                foreach ($whyWe_icon as $id => $icon) :
                    ?>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading<?php echo $id; ?>">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-whywe<?php echo $id; ?>" aria-expanded="false" aria-controls="collapse-whywe0">
                                    <i class="<?php echo isset($icon) ? $icon : 'fa fa-fonticons'; ?>"></i>
                                    <span><?php echo $whyWe_title[$id]; ?></span>
                                </a>
                                <strong class="fa fa-trash pull-right whywe-remove "></strong>
                            </h4> 
                        </div>
                        <div id="collapse-whywe<?php echo $id; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $id; ?>">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="Photo-Title" class=" control-label text-right">Icon</label>
                                    <div class="">
                                        <a class="btn btn-app" data-toggle="modal" data-target="#choose-icon<?php echo $id; ?>"> <i class="<?php echo isset($icon) ? $icon : 'fa fa-fonticons'; ?>"></i> Choose Icon </a>
                                        <input name="whyWe_icon[]" class="icon-input" type="hidden" value="<?php echo $icon; ?>" >
                                        <div class="modal fade" id="choose-icon<?php echo $id; ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                        <h4 class="modal-title"> <i class="fa fa-fonticons"></i> Choose Icon </h4>
                                                    </div>
                                                    <div class="modal-body modal-fonts" style="max-height: 500px;overflow-x: scroll;">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Title" class=" control-label text-right">Title</label>
                                    <input name="whyWe_title[]" type="text" class="form-control why-we-title" value="<?php echo $whyWe_title[$id]; ?>" id="Title">
                                </div>
                                <div class="form-group">
                                    <label for="Description" class=" control-label text-right">Description</label>
                                    <textarea name="whyWe_content[]" class="form-control" id="Description"><?php echo $whyWe_content[$id]; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
    <div class="col-md-5 col-sm-6">
        <div class="form-group">
            <img style="width:100%" id="Upload-Photo" src="<?php echo isset($image['whyWe']) ? base_url().$image['whyWe'] : base_url().'assets/admin/img/default-banner.jpg'; ?>" class="img-thumbnail" alt="">
            <input name="image[whyWe]" id="uploadImage" type="hidden" value="<?php echo isset($image['whyWe']) ? base_url().$image['whyWe'] : base_url().'assets/admin/img/default-banner.jpg'; ?>" >
            <button type="button" class="btn btn-block btn-flat btn-primary" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-image"></i> 
                Upload Picture
            </button>

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content"  >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">
                                <i class="fa fa-image"></i> 
                                Upload Picture
                            </h4>
                        </div>
                        <div class="modal-body" style="padding:0;margin:0;">
                            <iframe width="100%" height="500" frameborder="0" src="<?php echo base_url(); ?>assets/filemanager/dialog.php?type=1&field_id=uploadImage'&fldr="> </iframe>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
    </div>
</div>
