<?php include_once "model.php";  $games = new Model(); $info = $games->getInfoById($_SESSION['user']['id']); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"/>
    <style type="text/css">
/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}

    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">E-learning</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="adminPage.php">Dashboard</a></li>
            <li class="active"><a href="adminprofile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="slideshow.php">Slideshow</a></li>
            <li><a href="videos.php">Videos</a></li>
            <li><a href="photos.php">Photos</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Learning <span class="sr-only">(current)</span></a></li>
            <li><a href="basic.php">Basic</a></li>
            <li><a href="advanced.php">Advanced</a></li>
          </ul>
                 <ul class="nav nav-sidebar">
            <?php $total = $games->getPendingApprovalCount(); ?>
            <li class="active"><a href="allstudent.php">Students <span class="sr-only">(current)</span></a></li>
            <li><a href="student.php">Pending Approval(<span class="pending"><?= $total['total']; ?></span>)</a></li>
            <li><a href="allstudent.php">Result of Test</a></li>
          </ul>
        <style type="text/css">
          .pending {
            font-weight: bold;
            color: black;
            font-size: 11px;
          }
          </style>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1>Update Profile</h1>
          <form  id="frmUpdate" class="form-horizontal">
            <input type="hidden" name="updateStudentInfo" value="true"/>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="firstname">Firstname</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="firstname" value="<?= ($info != false) ? $info['firstname']:'';?>" name="firstname" placeholder="firstname...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="lastname">Lastname</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="lastname" value="<?= ($info != false) ? $info['lastname']:'';?>"  name="lastname" placeholder="lastname...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="middlename">Middlename</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="middlename" value="<?= ($info != false) ? $info['middlename']:'';?>" name="middlename" placeholder="middlename...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="age">Age</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="age" name="age" value="<?= ($info != false) ? $info['age']:'';?>"  placeholder="age...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="gender">Gender</label>
              <div class="col-sm-10">
               Male <input type="radio" name="gender" id="gender" checked value="male">
               Female <input type="radio" name="gender" value="<?= ($info != false) ? $info['sex']:'';?>"  id="gender" value="female">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="dob">Date of Birth</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="<?= ($info != false) ? $info['dob']:'';?>"  id="dob" name="dob" placeholder="Date of Birth...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="religion">Religion</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="<?= ($info != false) ? $info['religion']:'';?>"  id="religion" name="religion" placeholder="religion...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="address">Address</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="<?= ($info != false) ? $info['address']:'';?>"  id="address" name="address" placeholder="address...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="nationality">Nationality</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="<?= ($info != false) ? $info['nationality']:'';?>"  id="nationality" name="nationality" placeholder="nationality...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="weight">Weight</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="<?= ($info != false) ? $info['weight']:'';?>"  id="weight" name="weight" placeholder="weight...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="height">Height</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="<?= ($info != false) ? $info['height']:'';?>"  id="height" name="height" placeholder="height...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <input type="submit" value="update" class="btn btn-lg pull-right active btn-active btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- MODALS -->
    <div id="info" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Record is succesfully Updated</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      (function($){
        var Student = {
          __listen : function(){
            $("#dob").datepicker();

            $("#frmUpdate").on("submit", function(e){
              e.preventDefault();

              $.ajax({
                url : 'process.php',
                data  : $(this).serialize(),
                type  : 'POST',
                dataType :'JSON',
                success: function(res){
                  $("#info").modal("show");
                },
                error   : function(){
                  console.log("Oops, something went wrong");
                }
              });

            });
          },
          __init : function(){
            this.__listen();
          }
        }

        Student.__init();
      })(jQuery);
      </script>
  </body>
</html>
