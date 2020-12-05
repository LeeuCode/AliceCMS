<div class="row">
    <div class="form-horizontal">
        <div class="form-group">
            <label for="Upload-Photo1" class="col-sm-2 control-label text-right">Background Image</label>
            <div class="col-sm-3">
                <img id="Upload-Photo1" src="<?php echo isset($image['video']) ? base_url().$image['video'] : base_url().'assets/admin/img/default-banner.jpg'; ?>" class="img-thumbnail" alt="">
                <input name="image[video]" id="uploadImage1" type="hidden" value="<?php echo @$image['video']; ?>" >
                <button type="button" class="btn btn-block btn-flat btn-primary" data-toggle="modal" data-target="#modal-default1">
                    <i class="fa fa-image"></i> 
                    Upload Picture
                </button>

                <div class="modal fade" id="modal-default1">
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
                                <iframe width="100%" height="500" frameborder="0" src="<?php echo base_url(); ?>assets/filemanager/dialog.php?type=1&field_id=uploadImage1'&fldr="> </iframe>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
        </div>

        <div class="form-group">
            <label for="Section-Title1" class="col-sm-2 control-label text-right">Section Title</label>
            <div class="col-sm-4">
                <input name="title[video]" type="text" class="form-control" id="Section-Title1" value="<?php echo @$title['video']; ?>" >
            </div>
        </div>

        <div class="form-group">
            <label for="short-description" class="col-sm-2 control-label text-right">Short Description</label>
            <div class="col-sm-5">
                <textarea name="subtitle[video]" width="100%" class="form-control" rows="3" id="short-description" ><?php echo @$subtitle['video']; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="Section-link" class="col-sm-2 control-label text-right">Video Link</label>
            <div class="col-sm-6">
                <input name="link[video]" type="text" class="form-control" id="Section-link" value="<?php echo @$link['video']; ?>" >
            </div>
        </div>
    </div>
</div>
