<?php

require_once 'header.php';

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
                            <li class="current" ><em></em></li>
                            <li><em></em></li>
                            <li><em></em></li>
                        </ol>
                    </nav>
                    <div class="wizard-container" >
                        <h2 class="wizard-heading" >
                            <i class="fa fa-database"></i>
                            Database Installation
                            <span class="steps" > Step 2 - 4 </span>
                        </h2>
                        <form class="form-horizontal" action="<?php echo base_url().'install/save_stepTwo/'; ?>" method="post">
                        <?php get_csrf_input(); ?>
                            <div class="wizard-form">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Database Name:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="dbName" placeholder="Enter Your Database Name">
                                            <span class="input-group-addon"><i class="fa fa-database"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="userName">Database User Name:</label>
                                        <div class="input-group">
                                            <input id="userName" type="text" class="form-control" name="userName" placeholder="Enter Your Database User Name">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Database Password :</label>
                                        <div class="input-group">
                                            <input id="password" type="text" class="form-control" name="password" placeholder="Enter Your Database Password">
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="serverName">Database Host :</label>
                                        <div class="input-group">
                                            <input id="serverName" value="localhost" type="text" class="form-control" name="serverName" placeholder="Enter Your Database Host">
                                            <span class="input-group-addon"><i class="fa fa-server"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="timezoine">Time Zoine :</label>
                                        <div class="input-group">
                                            <select name="timezoine" class="form-control">
                                                <?php foreach ($timezones as $key => $time) : ?>
                                                    <option value="<?php echo $time; ?>"><?php echo $key; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button name="submit" type="submit" data-toggle="modal" data-target="#modal-wait" class="btn btn-info wizard-btn" >
                                <span class="">Next Step</span>
                                <i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            
                            <div class="modal fade" id="modal-wait">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Waiting</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center" >
                                                <small style="color:#786262;font-size: 13px;" >The database creation process takes a minute - two minutes</small>
                                            </p>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped active" role="progressbar"
                                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once 'footer.php';
