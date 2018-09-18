<?php
    include '../model/storyModel.php';
    if($_SESSION){
        $story = new Story();
        $stor = $story->getStory($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/plugins/images/favicon.png">
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
    <link href="componentscss/colors/blue.css" id="theme" rel="stylesheet">
    <link href="components/css/colors/default.css" id="theme" rel="stylesheet">
    <link href="components/css/colors/megna.css" id="theme" rel="stylesheet">
    <title>Diary</title>
</head>
<body>
    

    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
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
                            <div><img src="components/plugins/img/profilelogo.png" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['owner']?><span class="caret"></span></a>
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
                <input class="btn btn-default" type="submit" name="search"> <i class="fa fa-search"></i> </button>
                </span> </div>
                            <!-- /input-group -->
                        </li>
                        <li class="nav-small-cap">--- Main Menu</li>
                        <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Menu<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="diary.php">Add Diary</a></li>
                            </ul>
                        </li>                        
                        <li> <a href="calendar.html" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                        <li> </li>
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
                        <button  class="btn hover btn-outline-info" alt="default" data-toggle="modal" data-target="#myModal<?php echo $_GET['id'];?>"><li class="active"><i class="fa fa-plus-square"></i>  Add Story    </li></button>
                     </ol>
                  </div>
                  <div id="myModal<?php echo $_GET['id']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myModalLabel">Your Diary</h4> </div>
                                                        <div class="modal-body">
                                                        <form action="../controller/story/storyController.php" class="form-horizontal form-bordered" method="post">
                                <div class="form-body">
                                    <input type="number" name="diary_id" hidden value="<?php echo $_GET['id'];?>">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Date:</label>
                                        <input class="form-control" required type="date" name = "date"><span class="highlight"></span> <span class="bar"></span>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input class="form-control" required type="text" placeholder="Title" name="title">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Content:</label>
                                        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-block btn-outline btn-rounded btn-info" name="AddStory" value="Add Story">
                                </div>
                            </form>
                                                        </div>                                                        
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                  <!-- /.breadcrumb -->
               </div>
                    <div class="row">
                        <?php foreach($stor as $s) {?>
                    <?php if($s['diary_id'] == $_GET['id']) {?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="panel panel-default">                     
                                <div class="panel-heading col-md-12 form-group">
                                    <label calss="control-label">Title:</label>  
                                    <input class="form-control" type="text" value="<?php echo $s['story_title'];?>" name="storytitle" id="title" readOnly>
                                    <input type="text" hidden name="diary_id" value="<?php echo $_GET['id'];?>">
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="col-md-12 form-group">
                                            <label class="control-label">Date:</label>
                                            <input readOnly value="<?php echo $s['story_date'];?>" class="form-control" id="date" required type="date" name = "date"><span class="highlight"></span> <span class="bar"></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Content:</label>
                                            <textarea readOnly class="form-control" name="content" id="contents" cols="30" rows="10"><?php echo $s['story_content'];?></textarea>
                                        </div>
                                        <a href="estories.php?id=<?php echo $s['story_id'];?>" type="submit" name="update" value="update" class="btn btn-info m-t-12" id="saved">Update</a>
                                        <a href="../controller/Story/deleteStory.php?id=<?php echo $s['story_id'];?>" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>
                                        <a href="" class="btn btn-default" id="like"> <i class="fa fa-heart"></i></a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                        else {?>
                               
                        <?php }?>                    
                <?php }?>
                </div>
                </div>
            </div>
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
    <script src="assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script type="text/javascript">
        $("#edit").click(function(){
            $("#date").prop("readOnly",false);
            $("#contents").prop("readOnly",false);
            $("#title").prop("readOnly", false);
            $("#delete").prop("hidden", true);
            $("#cancel").prop("hidden", false);
            $("#like").prop("hidden", true);
            $("#saved").prop("hidden", false);
            $("#edit").prop("hidden", true);
        });
        $("#cancel").click(function(){
            $("#edit").html("edit");
            $("#date").prop("readOnly",true);
            $("#contents").prop("readOnly",true);
            $("#title").prop("readOnly", true);
            $("#delete").prop("hidden", false);
            $("#cancel").prop("hidden", true);
            $("#like").prop("hidden", false);
        });
    </script>
</body>
</html>

<?php
    } else {
        header("location:pleaselogin.php");
    }
?>