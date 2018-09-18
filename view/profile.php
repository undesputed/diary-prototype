<?php
    require '../model/ownerModel.php';

    if($_SESSION)
    {
        
        $id = $_SESSION['owner_id'];     
        $owner = new Owner();
        $user=$owner->getOwnerById($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>My Diary</title>
    <!-- Bootstrap Core CSS -->
    <link href="components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="components/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="components/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="components/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- animation CSS -->
    <link href="components/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="components/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="components/css/colors/default.css" id="theme" rel="stylesheet">
    <link href="components/css/colors/megna.css" id="theme" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated flipInY">
                            <li>
                                <div class="drop-title">Notification</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5></h5> <span class="mail-desc"></span> <span class="time"></span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5></h5> <span class="mail-desc"></span> <span class="time"></span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5></h5> <span class="mail-desc"></span> <span class="time"></span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5></h5> <span class="mail-desc"></span> <span class="time"></span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="components/plugins/img/profilelogo.png" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['owner']?><span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="profile.php"><i class="ti-user"></i> My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../controller/Owner/log.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="nav-small-cap">--- Main Menu</li>
                    <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Click Me<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="diary.php">Add Diary</a></li>
                            <li><a href="view.php">View Diary</a></li>
                        </ul>
                    </li>
                    <li> <a href="calendar.html" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                    <li><a href="../controller/Owner/log.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
               <div class="row bg-title">
                  <!-- .page title -->
                  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                     <h4 class="page-title">Home Page</h4>
                  </div>
                  <!-- /.page title -->
                  <!-- .breadcrumb -->
                  <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                     <a href="#" target="_self" class="btn btn-warning pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add Diary</a>
          <ol class="breadcrumb">
                        <li class="active">The Diary</li>
                     </ol>
                  </div>
                  <!-- /.breadcrumb -->
               </div>
               <!-- .row -->
               <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box p-l-20 p-r-20">
                            <h3 class="box-title m-b-0">Update Profile</h3>
                            <p class="text-muted m-b-30 font-13">Change something to imporve everything</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="../controller/Owner/ownerContoller.php" method="post" class="floating-labels" id="form1">
                                    <div class="form-group m-b-40">
                                            <input hidden name="ownerid" value="<?php echo $user['owner_id']; ?>" type="text" class="form-control" id="input1"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1"></label>
                                    </div>
                                    <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" name="lastname"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1"><?php echo $user['owner_lastname']; ?></label>
                                    </div>
                                    <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" name="firstname"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1"><?php echo $user['owner_firstname']; ?></label>
                                    </div>
                                    <div class="form-group m-b-40">
                                            <input type="text" class="form-control" id="input1" name="mi"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1"><?php echo $user['owner_mi']; ?></label>
                                    </div>
                                    <div class="form-group m-b-40">
                                            <input type="email" class="form-control" id="input1" name="email"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1"><?php echo $user['owner_username']; ?></label>
                                    </div>
                                    <div class="form-group m-b-40">
                                            <input name="oldpass" type="password" class="form-control " id="st"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">Old Password</label>
                                            <label id = "smess" hidden> Not match </label>
                                    </div>
                                    <div class="form-group m-b-40">
                                            <input name="password" type="password" class="form-control" name="password" id="pass1"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">New Password</label>
                                    </div>
                                    <div class="form-group m-b-40">
                                            <input type="password" class="form-control" id="pass"><span class="highlight"></span> <span class="bar"></span>
                                            <label for="input1">Comfirm Password</label>
                                    </div>
                                    <div class="col-lg-2 col-sm-4 col-xs-12">
                                        <input class="btn btn-block btn-rounded btn-primary" type="submit" name="update" value="Update">
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; My Diary: Sir Joaquin Patino </footer>
         </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="components/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="components/bootstrap/dist/js/tether.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="components/plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="components/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="components/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="components/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="components/js/custom.min.js"></script>
    <!--Style Switcher -->
    <script src="components/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="components/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="components/js/mask.js"></script>
    <!--BlockUI Script -->
    <script src="components/plugins/bower_components/blockUI/jquery.blockUI.js"></script>
    <script type="text/javascript">
    // Date Picker
    jQuery('.mydatepicker').datepicker();
    </script>
    <script type="text/javascript">
        $("#form1").submit(function(e){
            var val = $("#st").val();
            var pass1 = $("#pass1").val();
            var pass = $("#pass").val();
            var oldpass = "<?php echo $oldpass;?>";
                if(val != oldpass)
                {
                e.preventDefault(e);
                alert("Old password does not match");
                }           
                else if(pass1 != pass)
                {
                    e.preventDefault(e);
                    alert("Passwords not match");
                }
                
                });
    </script>
    <script src="components/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
<?php
    }else{
        header("location:../index.html");

    }
?>
