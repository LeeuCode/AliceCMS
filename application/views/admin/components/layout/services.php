<div class="row">
    <div class="form-horizontal">
        
        <!--Hedding-->
        <div class="col-md-12">
            <h4 class="seo-heading">Home Page</h4>
        </div>
        
        <div class="form-group">
            <label for="section-title-service" class="col-sm-2 control-label text-right">Section Title</label>
            <div class="col-sm-4">
                <input name="title[service]" type="text" class="form-control" id="section-title-service" value="<?php echo @$title['service']; ?>" >
            </div>
        </div>
        <div class="form-group">
            <label for="SubTitle-service" class="col-sm-2 control-label text-right">SubTitle</label>
            <div class="col-sm-6">
                <textarea name="subtitle[service]" width="100%" class="form-control" rows="3" id="SubTitle-service" ><?php echo @$subtitle['service']; ?></textarea>
            </div>
        </div>
        
        <div class="col-md-12">
            <h4 class="seo-heading">Services & Single Page</h4>
        </div>
        
        <div class="form-group">
            <label for="section-title-service" class="col-sm-2 control-label text-right">Section Title</label>
            <div class="col-sm-4">
                <input name="title[single_service]" type="text" class="form-control" id="section-title-service" value="<?php echo @$title['single_service']; ?>" >
            </div>
        </div>
        <div class="form-group">
            <label for="SubTitle-service" class="col-sm-2 control-label text-right">SubTitle</label>
            <div class="col-sm-6">
                <textarea name="subtitle[single_service]" width="100%" class="form-control" rows="3" id="SubTitle-service" ><?php echo @$subtitle['single_service']; ?></textarea>
            </div>
        </div>
        
        <div class="form-group">
            <label for="section-title-service" class="col-sm-2 control-label text-right">Button Title</label>
            <div class="col-sm-4">
                <input name="title[single_service_btnTitle]" type="text" class="form-control" id="section-title-service" value="<?php echo @$title['single_service_btnTitle']; ?>" >
            </div>
        </div>
        
    </div>
</div>
