<div class="row">
    <div class="col-md-12">
        <button type="button" data-counter-item-id="0" class="btn btn-primary btn-flat margin-bottom-30 add-counter-item ">
            <i class="fa fa-plus"></i> Add New Item
        </button>
    </div>
    <div class="counter-parent">

        <?php
        if (isset($counter_icon) && is_array($counter_icon)) :
            foreach ($counter_icon as $countId => $countIcon) :
                ?>

                <div class="col-md-3 form-horizontal">
                    <div class="counter-container">
                        <div class="form-group">
                            <label for="Photo-Title" class="col-sm-12 text-center">Icon</label>
                            <div class="counter-btn">
                                <a class="btn btn-app" data-toggle="modal" data-target="#choose-icon-counter-<?php echo $countId; ?>"> <i class="<?php echo ($countIcon) ? $countIcon : 'fa fa-fonticons'; ?>"></i> Choose Icon </a>
                                <input name="counter_icon[]" class="icon-input" type="hidden" value="<?php echo $countIcon; ?>">
                                <div class="modal fade" id="choose-icon-counter-<?php echo $countId; ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title"> <i class="fa fa-fonticons"></i> Choose Icon </h4>
                                            </div>
                                            <div class="modal-body modal-fonts" style="max-height: 500px;overflow-x: scroll;">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="number" class="col-sm-12 text-center ">Number</label>
                            <div class="col-sm-12">
                                <input name="counter_number[]" value="<?php echo $counter_number[$countId]; ?>" type="text" class="form-control" id="number">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="counter_title" class="col-sm-12 text-center ">Title</label>
                            <div class="col-sm-12">
                                <input name="counter_title[]" value="<?php echo $counter_title[$countId]; ?>" type="text" class="form-control" id="counter_title">
                            </div>
                        </div>
                        <p class="remove-counter"> <i class="fa fa-trash"></i> </p>
                    </div>
                </div>

                <?php
            endforeach;
        endif;
        ?>

    </div>
</div>
