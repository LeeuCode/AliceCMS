<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-group" id="accordion-footer">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion-footer" href="#collapseOne">
                                    Section One
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="box-body form-horizontal">
                                <div class="form-group">
                                    <label for="Section-Title-about" class="col-sm-2 control-label text-right">Section Title</label>
                                    <div class="col-sm-4">
                                        <input name="title[footerSection1]" value="<?php echo @$title['footerSection1']; ?>" type="text" class="form-control" id="Section-Title-about" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Section-Content-about" class="col-sm-2 control-label text-right">Section Content</label>
                                    <div class="col-sm-6">
                                        <textarea name="subtitle[footerSection1]" width="100%" class="form-control" rows="3" id="Section-Content-about" ><?php echo @$subtitle['footerSection1']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion-footer" href="#collapseTwo">
                                    Menu Footer
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="box-body form-horizontal">

                                <div class="col-md-12">
                                    <h4 class="seo-heading">Menu One</h4>
                                </div>

                                <div class="form-group">
                                    <label for="Section-Title-section2" class="col-sm-2 control-label text-right">Section Title</label>
                                    <div class="col-sm-4">
                                        <input name="title[footerSection2]" value="<?php echo @$title['footerSection2']; ?>" type="text" class="form-control" id="Section-Title-section2" >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h4 class="seo-heading">Menu Two</h4>
                                </div>

                                <div class="form-group">
                                    <label for="Section-Title-section3" class="col-sm-2 control-label text-right">Section Title</label>
                                    <div class="col-sm-4">
                                        <input name="title[footerSection3]" value="<?php echo @$title['footerSection3']; ?>" type="text" class="form-control" id="Section-Title-section3" >
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel box box-primary">

                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion-footer" href="#collapseFour">
                                    Section Four
                                </a>
                            </h4>
                        </div>

                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="box-body form-horizontal" >
                                <div class="form-group">
                                    <label for="Section-Title-about" class="col-sm-2 control-label text-right">Section Title</label>
                                    <div class="col-sm-4">
                                        <input name="title[footerSection4]" value="<?php echo @$title['footerSection4']; ?>" type="text" class="form-control" id="Section-Title-about" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Section-Content-about" class="col-sm-2 control-label text-right">Section Content</label>
                                    <div class="col-sm-6">
                                        <textarea name="subtitle[footerSection4]" width="100%" class="form-control" rows="3" id="Section-Content-about" ><?php echo @$subtitle['footerSection4']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!-- END accordion-footer-->