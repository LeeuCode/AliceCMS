jQuery(document).ready(function ($) {

    "use strict";

    var unsaved = false;
    var counter = 0;
    var uploadImage = '';

    $('form').on('change keyup keydown', 'input, textarea, select', function (e) {
        unsaved = true;
    });

    $('button[type=submit], input[type=submit]').click(function () {
        unsaved = false;
    });

    function unloadPage() {
        if (unsaved) {
            return "You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?";
        }
    }

    window.onbeforeunload = unloadPage;

    var fonts = (function () {
        var json = null;
        $.ajax({
            'async': false,
            'global': true,
            'url': base_url+'assets/admin/js/font-awesome-4.7.0.json',
            'dataType': "json",
            'success': function (data) {
                json = data;
            }
        });
        return json.fonts;
    })();

    $.each(fonts, function (key, font) {
        $('.modal-fonts').append('<button type="button" class="btn btn-app choosing-icon-why-we" data-icon="fa ' + font + '" > <i class="fa ' + font + '"></i></button>');
    });

    $(document).on('click', '.choosing-icon-why-we', function () {
        var faIcon = $(this).data('icon');
        var modal = $(this).parent().parent().parent().parent();
        var collapse = modal.parent().parent().parent().parent();
        var collapse_icon = collapse.parent().children('.panel-heading').find('i');
        var icon = modal.prevAll('.btn-app').children('i');

        modal.prevAll('.icon-input').val(faIcon);

        icon.attr('class', faIcon);

        collapse_icon.attr('class', faIcon);

        $('.modal').modal('hide');
    });

    $(document).on('change keyup keydown', '.why-we-title', function () {
        var input_value = $(this).val();
        var collapse = $(this).parent().parent().parent().parent();
        var heading = collapse.children('.panel-heading').find('span');

        heading.text(input_value);
    });

    $(document).on('click', '.add-screenshot', function () {
        var screenshot_id = $(this).data('id');
        $('.screenshot-container').append('<div class="col-md-8"><div class="input-group margin"> <input name="screenshots[]" class="form-control" id="uploadscreenshot' + screenshot_id + '" type="text" ><span class="input-group-btn"> <button type="button" class="btn btn-flat btn-primary" data-toggle="modal" data-target="#screenshot-modal' + screenshot_id + '"> <i class="fa fa-upload"></i> </button> </span> <span class="input-group-btn" > <button type="button" class="btn btn-flat btn-danger remove-screenshot "> <i class="fa fa-trash"></i> </button> </span></div><div class="modal fade" id="screenshot-modal' + screenshot_id + '"><div class="modal-dialog modal-lg"><div class="modal-content" ><div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button><h4 class="modal-title"> <i class="fa fa-image"></i> Upload Picture</h4></div><div class="modal-body" style="padding:0;margin:0;"> <iframe width="100%" height="500" frameborder="0" src="'+base_url+'assets/filemanager/dialog.php?type=1&field_id=uploadscreenshot' + screenshot_id + '\'&fldr="> </iframe></div></div></div></div></div>');
        $(this).data('id', (screenshot_id + 1));

    });

    $(document).on('click', '.remove-screenshot', function () {

        var r = confirm("Are you sure Delete Item ?!");

        if (r === true) {
            $(this).parent().parent().parent().remove();
        }
    });

    $(document).on('click', '.add-plan-item', function () {
        $('.plan-items-container').append('<div class="col-md-7"><div class="input-group margin"> <input name="plan_items[]" class="form-control" type="text" > <span class="input-group-btn" > <button type="button" class="btn btn-flat btn-danger remove-screenshot"> <i class="fa fa-trash"></i> </button> </span></div></div>');
    });

    $('.add-Member-item').on('click', function () {

        var input_count = $('.socail-madia-select').length;

        if (input_count < 8) {
            $('.Member-items-container').append('<div class="col-md-7"> <div class="input-group margin "> <span class="input-group-btn" > <select name="socail_icon[]" id="SocailMadia" class="form-control socail-madia-select" > <option value="icon"> &#xf280; icon</option> <option value="facebook"> &#xf09a; Facebook</option> <option value="twitter"> Twitter</option> <option value="youtube"> Youtube</option> <option value="youtube-play"> Youtube Play</option> <option value="instagram"> Instagram</option> <option value="google-plus"> Google Plus</option> <option value="linkedin"> Linkedin</option> <option value="tumblr"> Tumblr</option> <option value="behance"> Behance</option> <option value="digg"> Digg</option> <option value="dribbble"> Dribbble</option> <option value="github"> Github</option> <option value="github-alt"> Github Alt</option> <option value="pinterest-p"> Pinterest</option> <option value="soundcloud"> Soundcloud</option> <option value="stack-overflow"> Stack Overflow</option> <option value="vimeo"> Vimeo</option> <option value="vk"> VK</option> <option value="weibo"> Weibo</option> </select> </span> <input name="socail_link[]" class="form-control" id="uploadscreenshot" type="text" > <span class="input-group-btn" > <button type="button" class="btn btn-flat btn-danger remove-screenshot"> <i class="fa fa-trash"></i> </button> </span> </div></div>');
        } else {
            alert('It is not allowed to create more than 8 fields !');
        }
    });

    $(document).on('click', '.add-whywe-item', function () {
        var item_id = $(this).data('item-id');

        $('.panel-group').append('<div class="panel panel-default"> <div class="panel-heading" role="tab" id="headingTwo"> <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-whywe' + item_id + '" aria-expanded="false" aria-controls="collapse-whywe' + item_id + '"> <i class="fa fa-link "></i> <span>The Title Item Here</span> </a><strong class="fa fa-trash pull-right whywe-remove " ></strong></h4> </div><div id="collapse-whywe' + item_id + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo"> <div class="panel-body"> <div class="form-group"> <label for="Photo-Title" class=" control-label text-right">Icon</label> <div class=""> <a class="btn btn-app" data-toggle="modal" data-target="#choose-icon' + item_id + '" > <i class="fa fa-fonticons" ></i> Choose Icon </a> <input name="whyWe_icon[]" class="icon-input" type="hidden"> <div class="modal fade" id="choose-icon' + item_id + '"> <div class="modal-dialog modal-lg"> <div class="modal-content" > <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button> <h4 class="modal-title"> <i class="fa fa-fonticons"></i> Choose Icon </h4> </div><div class="modal-body modal-fonts" style="max-height: 500px;  overflow-x: auto;"> </div></div></div></div></div></div><div class="form-group"> <label for="Title" class=" control-label text-right">Title</label> <input name="whyWe_title[]" type="text" class="form-control why-we-title " id="Title" > </div><div class="form-group"> <label for="Description" class=" control-label text-right">Description</label> <textarea name="whyWe_content[]" class="form-control" id="Description" ></textarea> </div></div></div></div>');

        $.each(fonts, function (key, font) {
            $('.modal-fonts').append('<button type="button" class="btn btn-app choosing-icon-why-we" data-icon="fa ' + font + '" > <i class="fa ' + font + '"></i></button>');
        });

        $(this).data('item-id', (item_id + 1));
    });

    $(document).on('click', '.whywe-remove', function () {
        var r = confirm("Are you sure Delete Item ?!");

        if (r === true) {
            $(this).parent().parent().parent().remove();
        }
    });

    $(document).on('click', '.add-counter-item', function () {
        var item_id = $(this).data('counter-item-id');

        $('.counter-parent').append('<div class="col-md-3 form-horizontal"> <div class="counter-container"> <div class="form-group"> <label for="Photo-Title" class="col-sm-12 text-center">Icon</label> <div class="counter-btn"> <a class="btn btn-app" data-toggle="modal" data-target="#choose-icon-counter-' + item_id + '" > <i class="fa fa-fonticons" ></i> Choose Icon </a> <input name="counter_icon[]" class="icon-input" type="hidden"> <div class="modal fade" id="choose-icon-counter-' + item_id + '"> <div class="modal-dialog modal-lg"> <div class="modal-content" > <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button> <h4 class="modal-title"> <i class="fa fa-fonticons"></i> Choose Icon </h4> </div><div class="modal-body modal-fonts" style="max-height: 500px;  overflow-x: auto;"> </div></div></div></div></div></div><div class="form-group "> <label for="number" class="col-sm-12 text-center ">Number</label> <div class="col-sm-12"> <input name="counter_number[]" type="text" class="form-control" id="number" > </div></div><div class="form-group "> <label for="number" class="col-sm-12 text-center ">Title</label> <div class="col-sm-12"> <input name="counter_title[]" type="text" class="form-control" id="number" > </div></div><p class="remove-counter" > <i class="fa fa-trash"></i> </p></div></div>');

        $.each(fonts, function (key, font) {
            $('.modal-fonts').append('<button type="button" class="btn btn-app choosing-icon-why-we" data-icon="fa ' + font + '" > <i class="fa ' + font + '"></i></button>');
        });

        $(this).data('counter-item-id', (item_id + 1));
    });

    $(document).on('click', '.remove-counter', function () {
        $(this).parent().parent().remove();
    });

    $('.choose-menu-type').on('change', function () {
        var value = $(this).val();

        if (value === 'Standard') {
            $('.other-menu').show();
            $('.choose-page').hide();
        } else if (value === 'page') {
            $('.other-menu').hide();
            $('.choose-page').show();
        }
    });

    //color picker with addon
    $('.my-colorpicker2').colorpicker();

    // Datatable
    $('#example1').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: [0, 1] //Your Colume value those you want
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: [0, 1] //Your Colume value those you want
                }
            },
            {
                extend: 'pdf',
                exportOptions: {
                    columns: [0, 1] //Your Colume value those you want
                }
            }
        ]
    });

    $('.choose-layout').change(function () {
        var input_value = $(this).val();

        if (input_value === "About-us") {
            $('.page-thumbnail').show();
            $('.page-editor').show();

        } else if (input_value === "Standard") {
            $('.page-editor').show();
            $('.page-thumbnail').hide();

        } else {
            $('.page-thumbnail').hide();
            $('.page-editor').hide();
        }
    });


    /* Password strength indicator */
    function passwordStrength(password) {

        var desc = [{'width': '0px'}, {'width': '20%'}, {'width': '40%'}, {'width': '60%'}, {'width': '80%'}, {'width': '100%'}];

        var descClass = ['', 'progress-bar-danger', 'progress-bar-danger', 'progress-bar-warning', 'progress-bar-success', 'progress-bar-success'];

        var score = 0;

        //if password bigger than 6 give 1 point
        if (password.length > 6)
            score++;

        //if password has both lower and uppercase characters give 1 point
        if ((password.match(/[a-z]/)) && (password.match(/[A-Z]/)))
            score++;

        //if password has at least one number give 1 point
        if (password.match(/d+/))
            score++;

        //if password has at least one special caracther give 1 point
        if (password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))
            score++;

        //if password bigger than 12 give another 1 point
        if (password.length > 10)
            score++;

        // display indicator
        $("#jak_pstrength").removeClass(descClass[score - 1]).addClass(descClass[score]).css(desc[score]);
    }

    $("#password").keyup(function () {
        passwordStrength($(this).val());
    });

    // Config summernote Editor.
    $('.editor').summernote({height: 320});



});

function responsive_filemanager_callback(field_id){

  var uploadImage = $('#'+field_id).val(),
      uploadPhoto = $('#'+field_id).prev('img');

  if (uploadImage !== "") {
      if (uploadImage.includes(base_url)) {
          uploadPhoto.attr('src', uploadImage);
      } else {
          uploadPhoto.attr('src', base_url + uploadImage);
      }
  }
}
