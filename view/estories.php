<?php
include '../model/storyModel.php';
if ($_SESSION) {
    $story = new Story();
    $stor = $story->getStoryById($_GET['id']);
// print_r($dia);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/plugins/images/favicon.png">
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
    <title>Diary</title>
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
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="components/plugins/img/profilelogo.png" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['owner'] ?><span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="profile.php"><i class="ti-user"></i> My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../controller/Owner/Log.php"><i class="fa fa-power-off"></i> Logout</a></li>
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
                        <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Menu<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="diary.php">Add Diary</a></li>
                                <li><a href="vdiary.php">View Diary</a></li>
                            </ul>
                        </li>
                        <li> <a href="calendar.html" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                        <li><a href="../controller/Owner/Log.php" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    </ul>
                </div>
            </div>
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
                            
                            <ol class="breadcrumb">
                                <li class="active">The Diary</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <form method="post" action="../controller/Story/storyController.php?id=<?php echo $s['story_id']; ?>">
                                    <div class="form-body">
                                            <input type="text" hidden name="diary_id" value="<?php echo $stor['diary_id']; ?>">
                                                <div class="col-md-12">                                            
                                                    <input type="text" class="btn btn-block btn-rounded" value="<?php echo $stor['story_title']; ?>" name="title" id="pardate">
                                                </div> <br/><br/><br><br>
                                                <div class="floating-labels ">
                                                <div class="col-md-12 form-group">
                                                    <input class="form-control" type="date" name = "date" value="<?php echo $stor['story_date']; ?>"><span class="highlight"></span> <span class="bar"></span>
                                                </div>                                          
                                                <div class="col-md-12 form-group">
                                                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"><?php echo $stor['story_content']; ?></textarea>
                                                </div>
                                                </div>                           
                                            <input type="submit" class="btn btn-block btn-outline btn-rounded btn-info" name="update" value="Update">
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->

    </div>    
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
    <script type="application/javascript">
   
    </script>
    <!--Style Switcher -->
    <script src="components/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
<?php

} else {
    header("location:pleaselogin.php");
}
?>