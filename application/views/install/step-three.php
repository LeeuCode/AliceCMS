<?php require_once 'header.php';


?>

<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-default wizard-panel">
                <div class="panel-heading">
                    <i class="fa fa-magic"></i>
                    Install Website
                </div>
                <div class="panel-body">
                    <nav>
                        <ol class="cd-multi-steps text-bottom count">
                            <li class="visited" ><a href="#0"></a></li>
                            <li class="visited" ><a href="#0"></a></li>
                            <li class="current" ><em></em></li>
                            <li><em></em></li>
                        </ol>
                    </nav>
                    <div class="wizard-container" >
                        <h2 class="wizard-heading" >
                            <i class="fa fa-cogs"></i>
                            Site Configration
                            <span class="steps" > Step 3 - 4 </span>
                        </h2>
                        <form class="form-horizontal" action="<?php echo base_url('install/save_stepThree/'); ?>" method="post">
                            <?php get_csrf_input(); ?>
                            <div class="wizard-form">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Site Title:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="site_name" placeholder="Enter Your Site Name Here.">
                                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >Meta Keywords:</label>
                                        <input  type="text" width="100%" class="form-control" name="meta_keywords" placeholder="Enter Site Keywords Here.">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label >Meta Description :</label>
                                        <textarea name="meta_description" width="100%" class="form-control" rows="3" id="meta-description" placeholder="Enter Site Keywords Here." ></textarea>
                                        
                                    </div>
                                </div>
                            </div>
                            <button name="submit" type="submit" class="btn btn-info wizard-btn" >
                                <span class="">Next Step</span>
                                <i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once 'footer.php';
