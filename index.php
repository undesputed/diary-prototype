<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to My Diary</title>
</head>
<body>
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
    </div>
  </div>
  <div>
    <form action="controller/Owner/ownerLog.php" method="post">
        <input type="email" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" value="Login" name="login">
    </form>
  </div>
</section>
</body>
</html>