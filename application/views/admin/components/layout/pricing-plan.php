<div class="row">
    <div class="form-horizontal">
        <div class="form-group">
            <label for="Upload-Photo2" class="col-sm-2 control-label text-right">Background Image</label>
            <div class="col-sm-4">
                <img id="Upload-Photo2" src="<?php echo isset($image['plan']) ? base_url().$image['plan'] : base_url().'assets/admin/img/default-image.png'; ?>" class="img-thumbnail" alt="">
                <input name="image[plan]" id="uploadImage2" type="hidden" value="" >
                <button type="button" class="btn btn-block btn-flat btn-primary" data-toggle="modal" data-target="#modal-default2">
                    <i class="fa fa-image"></i> 
                    Upload Picture
                </button>

                <div class="modal fade" id="modal-default2">
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
                                <iframe width="100%" height="500" frameborder="0" src="<?php echo base_url(); ?>assets/filemanager/dialog.php?type=1&field_id=uploadImage2'&fldr="> </iframe>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>

        <!-- Color Picker -->
        <div class="form-group">
            <label for="Section-background" class="col-sm-2 control-label text-right" >Background color</label>

            <div class="col-md-3">
                <div class="input-group my-colorpicker2">
                    <input name="color[plan]" id="Section-background" type="text" class="form-control" value="<?php echo @$color['plan']; ?>">

                    <div class="input-group-addon">
                        <i></i>
                    </div>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <!-- /.form group -->

        <div class="form-group">
            <label for="Section-Title2" class="col-sm-2 control-label text-right">Section Title</label>
            <div class="col-sm-4">
                <input name="title[plan]" type="text" class="form-control" id="Section-Title2" value="<?php echo @$title['plan']; ?>" >
            </div>
        </div>

        <div class="form-group">
            <label for="short-description-plan" class="col-sm-2 control-label text-right">Short Description</label>
            <div class="col-sm-5">
                <textarea name="subtitle[plan]" width="100%" class="form-control" rows="3" id="short-description-plan" ><?php echo @$subtitle['plan']; ?></textarea>
            </div>
        </div>
        
        <div class="form-group">
            <label for="ButtonTitle" class="col-sm-2 control-label text-right">Button Title</label>
            <div class="col-sm-5">
                <input name="title[btn_pricePlan]" value="<?php echo @$title['btn_pricePlan']; ?>" type="text" class="form-control" id="ButtonTitle" >
            </div>
        </div>
        <div class="form-group">
            <label for="ButtonLink" class="col-sm-2 control-label text-right">Button Link</label>
            <div class="col-sm-5">
                <input name="link[btn_pricePlan]" value="<?php echo @$link['btn_pricePlan']; ?>" type="text" class="form-control" id="ButtonLink" >
            </div>
        </div>
        
    </div>
</div>
