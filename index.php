<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Register Diary</title>
    <!-- Bootstrap Core CSS -->
    <link href="view/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/components/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="view/components/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="view/components/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="view/components/css/colors/default.css" id="theme" rel="stylesheet">
    <title>Welcome to My Diary</title>
</head>
<body>
<div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
      <form class="form-horizontal form-material" method="post" id="loginform" action="controller/Owner/ownerContoller.php">
        <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small> 
        <div class="form-group m-t-20">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Last Name" name="lastname">
          </div>
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="First Name" name="firstname">
          </div>
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="MI" name="mi">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" placeholder="Email" name="email">
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="password" name="password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" required="" placeholder="Confirm Password" name="confirm">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary p-t-0">
              <input id="checkbox-signup" type="checkbox" name="checkbox">
              <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
            </div>
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="signin">Sign Up</button>
          </div>
        </div>
        </form>
        <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                  <p>Already have an account? <a href="view/login.php" class="text-primary m-l-5"><b>Sign In</b></a></p>
                </div>
        </div>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="view/components/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="view/components/bootstrap/dist/js/tether.min.js"></script>
    <script src="view/components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="view/components/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="view/components/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="view/components/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="view/components/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="view/components/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="view/components/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>