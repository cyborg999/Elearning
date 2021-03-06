<?php include_once "model.php";  $games  = new Model(); $users    = $games->getAllPendingUsers(); ?>
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
          <a class="navbar-brand" href="">Elearning</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="adminPage.php">Dashboard</a></li>
            <li><a href="adminprofile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <style type="text/css">
          .pending {
            font-weight: bold;
            color: black;
            font-size: 11px;
          }
          </style>
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
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">All Student</h1>
          <script type="text/html" id="tr">
              <tr>
                <td>
                  [NAME]
                  <br>
                  <div style="width:100px;">
                    <img src="[COVER]" width="100%"/>
                  </div>
                </td>
                <td>[TYPE]</td>
                <td>[SCORE]</td>
                <td>[INCORRECT]</td>
                <td>[DATE]</td>
              </tr>
          </script>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr class="start">
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Address</th>
                  <th>Username</th>
                  <th><a href="student.php?export" class="btn btn-success btn-sm">Export as CSV</a></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($games->getAllUsers() as $idx => $user): ?>
                <tr>
                    <td><?= $user['firstname']; ?> </td>
                    <td><?= $user['lastname']; ?></td>
                    <td><?= $user['address']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td><a href="" class="viewActivity" data-id="<?= $user['userid'];?>">view activity</a></td>
                </tr>
                <?php endforeach ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- MODALS -->
    <div id="activityModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Activity History</h4>
          </div>
          <div class="modal-contesnt" style="box-shadow:0px;">
            <div class="table-responsive">
              <table id="activityTable" class="table">
                <tr class="start">
                  <th>Lesson Name</th>
                  <th>Category</th>
                  <th>Correct Answer</th>
                  <th>Incorrect Answer</th>
                  <th>Date Taken</th>
                </tr>
              </table>
            </div>
             
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    (function($){
        var Student = {
        __init : function(){
          this.__listen();
        },
        __listen : function(){
          var me = this;
          var approvePending = $(".approve-pending");

          approvePending.on("click", function(e){
            var id = $(this).data("id");

            me.approvePendingId(id, $(this).parents("tr"));
            e.preventDefault();
          });

          $(".viewActivity").on("click", function(e){
            e.preventDefault();
            var id = $(this).data("id");
            
              $.ajax({
                url     : "process.php",
                data    : {id:id, viewActivity:true},
                type    : 'POST',
                dataType  : 'JSON',
                success   : function(res){
                  var target = $("#activityTable");

                  target.find("tr").not(".start").remove();

                  for(var i in res.result){
                    // var tr = $("#tr").html().replace("[COVER]", res.result[i].cover).
                    var tr = $("#tr").html().replace("[COVER]", 'img/slide1.jpg').
                      replace("[NAME]", res.result[i].name).
                      replace("[TYPE]", res.result[i].type).
                      replace("[SCORE]", res.result[i].score).
                      replace("[INCORRECT]", res.result[i].wrong).
                      replace("[DATE]", res.result[i].date);

                    target.find(".start").last().after(tr);

                  }
                 
                  $("#activityModal").modal("show");

                },
                error     : function(){
                  console.log("err");
                }
              });
            });

        },
        approvePendingId : function(id, target){
          $.ajax({
            url     : "process.php",
            data    : {id:id, approve:true},
            type    : 'POST',
            dataType  : 'JSON',
            success   : function(res){
              $(".pending").html(res.count);

              target.remove();
            },
            error     : function(){
              console.log("err");
            }
          });
        }
      }

      Student.__init();
    })(jQuery);
    </script>
  </body>
</html>
