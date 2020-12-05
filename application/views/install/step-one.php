<?php require_once 'header.php'; ?>
<body>
    <div class="container" style="width: 60%;">
        <div class="row">
            <div class="panel panel-default wizard-panel">
                <div class="panel-heading">
                    <i class="fa fa-magic"></i>
                    Install Website
                </div>
                <div class="panel-body">
                    <nav>
                        <ol class="cd-multi-steps text-bottom count">
                            <li class="current"><em></em></li>
                            <li><em></em></li>
                            <li><em></em></li>
                            <li><em></em></li>
                        </ol>
                    </nav>
                    <div class="wizard-container" >
                        <h2 class="wizard-heading" > 
                            <i class="fa fa fa-info-circle"></i> 
                            System Requirement
                            <span class="steps" > Step 1 - 4 </span>
                        </h2>
                        <ul class="list-group wizard-listGroup">

                            <?php
                            foreach ($init['required'] as $key => $value) :
                                if ($key == 'phpVersion') :
                                    $label = (version_compare(phpversion(), $value, '>=')) ? 'label-info' : 'label-danger';
                                    $icon = (version_compare(phpversion(), $value, '>=')) ? 'fa-check' : 'fa-times';
                                    echo '  <li class="list-group-item">
                                                    PHP version must be greater than ' . $value . '.
                                                    <span class="label ' . $label . ' pull-right">
                                                        <i class="fa ' . $icon . '"></i>
                                                    </span>
                                                </li>';
                                elseif ($key == 'exec') :
                                    if (isset($value) && is_array($value)) :
                                        foreach ($value as $exec) :
                                            $label = (extension_loaded($exec)) ? 'label-info' : 'label-danger';
                                            $icon = (extension_loaded($exec)) ? 'fa-check' : 'fa-times';
                                            echo '  <li class="list-group-item">
                                                            Required extension <strong>' . $exec . '</strong> library.
                                                            <span class="label ' . $label . ' pull-right">
                                                                <i class="fa ' . $icon . '"></i>
                                                            </span>
                                                        </li>';
                                        endforeach;
                                    endif;
                                elseif ($key == 'writable') :
                                    if (isset($value) && is_array($value)) :
                                        foreach ($value as $file) :
                                            $label = (is_writable($file)) ? 'label-info' : 'label-danger';
                                            $icon = (is_writable($file)) ? 'fa-check' : 'fa-times';
                                            echo '  <li class="list-group-item">
                                                            <strong>' . $file . '</strong> Must be writable.
                                                            <span class="label ' . $label . ' pull-right">
                                                                <i class="fa ' . $icon . '"></i>
                                                            </span>
                                                        </li>';
                                        endforeach;
                                    endif;
                                elseif ($key == 'functionExiest') :
                                    if (isset($value) && is_array($value)) :
                                        foreach ($value as $file) :
                                            $label = (function_exists($file)) ? 'label-info' : 'label-danger';
                                            $icon = (function_exists($file)) ? 'fa-check' : 'fa-times';
                                            echo '  <li class="list-group-item">
                                                            Required Function <strong>' . $file . '</strong> is exist.
                                                            <span class="label ' . $label . ' pull-right">
                                                                <i class="fa ' . $icon . '"></i>
                                                            </span>
                                                        </li>';
                                        endforeach;
                                    endif;
                                endif;
                            endforeach;
                            ?>
                        </ul>
                        <a href="<?php echo base_url().'install/step_two/' ?>" class="btn btn-info wizard-btn" >
                            <span class="">Next Step</span>
                            <i class="fa fa-arrow-circle-o-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'footer.php';
