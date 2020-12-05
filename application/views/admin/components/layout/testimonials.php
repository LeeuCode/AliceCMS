<div class="row">
    <div class="form-horizontal">
        <!-- Color Picker -->
        <div class="form-group">
            <label for="Section-background-Testimonials" class="col-sm-2 control-label text-right" >Background color</label>

            <div class="col-md-3">
                <div class="input-group my-colorpicker2">
                    <input name="color[testimonial]" id="Section-background-Testimonials" type="text" class="form-control" value="<?php echo @$color['testimonial']; ?>">

                    <div class="input-group-addon">
                        <i></i>
                    </div>
                </div>
                <!-- /.input group -->
            </div>
        </div>
        <!-- /.form group -->
        <div class="form-group">
            <label for="section-title-Testimonials" class="col-sm-2 control-label text-right">Section Title</label>
            <div class="col-sm-4">
                <input name="title[testimonial]" value="<?php echo @$title['testimonial']; ?>" type="text" class="form-control" id="section-title-Testimonials" >
            </div>
        </div>
        <!-- /.form group -->
        <div class="form-group">
            <label for="SubTitle-Testimonials" class="col-sm-2 control-label text-right">SubTitle</label>
            <div class="col-sm-6">
                <textarea name="subtitle[testimonial]" width="100%" class="form-control" rows="3" id="SubTitle-Testimonials" ><?php echo @$subtitle['testimonial']; ?></textarea>
            </div>
        </div>
        <!-- /.form group -->
    </div>
</div>
