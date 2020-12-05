<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AliceCMS | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>css/admin.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/'; ?>plugins/iCheck/square/blue.css">
    <!-- Login Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/login.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <style>
            body{
                background-image: url('<?php echo base_url(); ?>assets/admin/img/login.jpg') !important;
                background-size: cover !important;
            }
            #infoMessage p{
              padding: 10px;
              background-color: #f1f1f1;
              margin-bottom: 10px;
              border: 1px solid #ddd;
              position: relative;
            }
            #infoMessage p::before {
                content: "\e086";
                font-family: 'Glyphicons Halflings';
                margin-right: 10px;
                font-size: 16px;
            }
        </style>
</head>
<body class="hold-transition login-page" >
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php base_url().'auth/login/'; ?>"><b><?php echo lang('login_heading');?></b></a>
        </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
    <p class="login-box-msg"><?php echo lang('login_subheading');?></p>
    <div id="infoMessage">       
        <?php echo $message;?>
    </div>

    <?php echo form_open("auth/login");?>

    <div class="form-group has-feedback">
        <input type="text" name="identity" value="" id="identity" class="form-control" placeholder="Email / Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>

    <div class="form-group has-feedback">
      <input type="password" name="password" value="" id="password" class="form-control" placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>

    <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" value="1" id="remember" > Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
    </div>

    <?php echo form_close();?>

    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>


</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'assets/admin/'; ?>js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/admin/'; ?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
