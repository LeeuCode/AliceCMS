<?php require_once 'header.php'; ?>
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
                            <li class="visited" ><a href="#1"></a></li>
                            <li class="visited" ><a href="#2"></a></li>
                            <li class="current" ><em></em></li>
                        </ol>
                    </nav>
                    <div class="wizard-container" >
                        <h2 class="wizard-heading" >
                            <i class="fa fa-handshake-o"></i>
                            Congratulations
                            <span class="steps" > Step 4 - 4 </span>
                        </h2>
                        <div class="wizard-form">
                            <div class="col-md-8">
                                <p class="lead">Congratulations you have completed the steps, click the button below to direct you to the login page</p>
                            </div>
                        </div>

                        <a href="<?php echo base_url().'auth/login/'; ?>" class="btn btn-info wizard-btn" >
                            <span class="">Sign In</span>
                            <i class="fa fa-sign-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once 'footer.php';
