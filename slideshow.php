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

    <title>Elearning</title>
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
.jumbotron { border:5px dashed white;}
#filedrag.hover { border: 3px dashed red!important; }
#progress { position: absolute; float: left; top: 10px; width: 97%; left: 10px; z-index: 10; }
#messages { width: 100%; overflow: hidden; }
#progress p { display: block; width: 100%; padding: 2px 5px; margin: 2px 0; border-radius: 5px; background: #eee url("img/progress.png");
background-repeat: repeat-y; }
#progress p.failed { background: #c00 none 0 0 no-repeat; }


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
          .slide {
            border-bottom: 1px solid #eee;
            padding: 10px;
            padding-bottom: 20px;
            margin-bottom: 10px;
            width: 100%;
            position: relative;
            float: left;
          }
          .slide .labels {
            width: 80%;
          }
          .admin-control {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 3;
            font-size: 20px;
            cursor: pointer;
          }
          </style>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row">
            <div class="columns col-lg-12">
              <h1 class="page-header">Slideshow</h1>
              <a href="addnewslide.php" class="  page-header btn btn-md btn-success">Add New</a>
              <?php foreach($games->getAllSlider() as $idx => $slide): ?>
              <div class="slide">
                <div class="pull-left labels">
                  <div>
                    <h1><?= $slide['title'];?></h1>
                    <p>
                      <?= $slide['description'];?>
                    </p>
                  </div>
                </div>
                <img style="height:100px;" class="firsst-slide pusll-left" src="uploads/photos/<?= $slide['filename'];?>" alt="First slide">
                <div class="admin-control pull-rightx">
                  <span class="glyphicon glyphicon-remove-sign" data-id="<?= $slide['id'];?>" modal-title="delete" aria-hidden="true"></span>
                </div>
              </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- MODALS -->
    <div id="info" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 id="oh-snap!-you-got-an-error!">Oh snap! You got an error!<a class="anchorjs-link" href="#oh-snap!-you-got-an-error!"><span class="anchorjs-icon"></span></a></h4>
              <p>
                Please upload an image first for the slideshow before saving.
              </p>
              <p>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Okay</button>
              </p>
            </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/slide.js"></script>

    <script type="text/javascript">
    (function($){
      var slideShow = {
        __init : function(){
          this.__listen();
        },
        __listen : function(){
          $("#saveSlide").on("click", function(e){
            var title = $("#title");
            var desc = $("#description");
            var id = $("#addAttachment_form").data("id");

            // if(id == null){
            //   // alert()
            //   $(".modal-title").html("Upload an image first!");
            //   $("#info").modal("show");
            //   return false;
            // }
            alert("d2");
            $.ajax({
              url   : 'process.php',
              data  : {title:title, desc:desc, id:id, addSlide:true},
              type  : 'POST',
              dataType  :'JSON', 
              success   : function(res){
                console.log(res);
                alert("d2");
              },
              error   : function(){
                console.log("err");
              }
            });

            e.preventDefault();
          });

          $(".glyphicon-remove-sign").on("click", function(){
            var ele = $(this);
            var id = ele.data("id");

             $.ajax({
              url   : 'process.php',
              data  : {id:id, deleteSlide:true},
              type  : 'POST',
              dataType  :'JSON', 
              success   : function(res){
                console.log(res);
                ele.parents(".slide").fadeOut("slow", function(){
                  $(this).remove();
                });
              },
              error   : function(){
                console.log("err");
              }
            });
          });
        }

      }
        slideShow.__init();

    })(jQuery);
    </script>
  </body>
</html>
