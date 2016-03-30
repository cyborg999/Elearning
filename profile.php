<?php include_once "model.php";  $games = new Model(); $info = $games->getInfoById($_SESSION['user']['id']); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Elearning</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css"/>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">E-learning</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li><a href="sadvanced.php">Advanced learning</a></li>
                  <li><a href="sbasic.php">Basic Learning</a></li>
                  <li><a href="sphotos.php">Pictures</a></li>
                  <li><a href="svideos.php">Videos</a></li>
                  <li class="active" ><a href="profile.php">Profile</a></li>
                  <li><a href="logout.php">Log Out</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      <div class="row" style="margin-top:60px;">
        <div class="columns all-games col-lg-12 col-md-12 col-sm-12">
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
    </div> <!-- /container -->

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
    <script src="js/isotope.js"></script>
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
