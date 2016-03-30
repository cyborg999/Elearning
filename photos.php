<?php include_once "model.php";  $games  = new Model(); ?>
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
  .pending {
            font-weight: bold;
            color: black;
            font-size: 11px;
          }
.jumbotron { border:5px dashed white;}
#filedrag.hover { border: 3px dashed red!important; }
#progress { position: absolute; float: left; top: 10px; width: 97%; left: 10px; z-index: 10; }
#messages { width: 100%; overflow: hidden; }
#progress p { display: block; width: 100%; padding: 2px 5px; margin: 2px 0; border-radius: 5px; background: #eee url("img/progress.png");
background-repeat: repeat-y; }
#progress p.failed { background: #c00 none 0 0 no-repeat; }
.game {
  position: relative;
}
.game .glyphicon-remove {
  position: absolute;
  right: 25px;
  color: white;
  cursor: pointer;
  top: 5px;
  z-index: 2;
}
.img-container {
  height: 300px;
  overflow: hidden;
  position: relative;
}
.img-container img {
  /*height: 100%;*/
  max-height: 80%;
  width: 100%;
}
.img-container .admin-control {
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: 2;
  width: 100%;
  height: 20%;
  background: rgba(16, 16,16,.5);
}
.img-container .admin-control .glyphicon {
  font-size: 30px;
  color: white;
  float: right;
  margin: 10px;
  cursor: pointer;
}
.img-container .admin-control .glyphicon.slide {
  margin-top: 200px;
  position: absolute;
  left: 40%;
  font-size: 50px;
}

.thumbnail {
  position: relative;
}
.thumbnail .btn {
  position: absolute;bottom: 10px;
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
          <div class="row">
            <div class="columns col-lg-6">
              <h1>All Photos</h1>
            </div>
            <div class="columns col-lg-6">
              <a href="photo.php" class="btn btn-success btn-md pull-right">Add New</a>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="columns all-games col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <?php foreach($games->getAllPhoto() as $idx => $game): ?>
                  <div class="col-lg-4 col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <div class="img-container">
                        <?php if($_SESSION['user']['type'] == "admin"):?>
                          <div class="admin-control">
                          <span class="glyphicon glyphicon-remove-sign" data-id="<?= $game['id'];?>" modal-title="delete" aria-hidden="true"></span>
                        </div>
                        <?php endif ?>
                        <img  src="uploads/photos/<?= $game['filename'];?>" alt="Generic placeholder image" width="100%">
                        <div class="caption">
                          <a href="#" class="btn btn-primary imgPreview" data-toggle="modal" data-target="#myModal" role="button">Preview</a> 
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-body">
          <img style="max-width:100%" src="img/cover1.png" id="imgPreview">
        </div>
      </div>
    </div>
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <script src="js/isotope.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
    (function($){
      var iframe = {
        __init : function(){
          this.__listen();
        },
        __listen : function(){
          // this.addIsotope();
          $(".imgPreview").on("click", function(){
            $("#imgPreview").attr("src", $(this).parents(".thumbnail").find("img").attr("src"));
          });

          var slide = $(".slide");
          var close = $(".glyphicon-remove-sign");

          slide.on("click", function(){
            var me      = $(this);
            var added   = me.hasClass("glyphicon-plus-sign");
            var id      = me.data("id");
            var isSlide = 0;

            if(added == true){
              me.removeClass("glyphicon-plus-sign").addClass("glyphicon-minus-sign");
            } else {
              me.removeClass("glyphicon-minus-sign").addClass("glyphicon-plus-sign");
              isSlide = 1;
            }

            $.ajax({
              url   : 'process.php',
              data  : {updateSlide : true, id:id, isSlide: isSlide },
              type  : 'POST',
              dataType  : 'JSON',
              success   : function(res){
                console.log(res);
              },
              error     : function(){
                console.log("err");
              }
            });
          });

          close.on("click", function(){
            var me = $(this).parents(".thumbnail");
            var id = $(this).data("id");

            $.ajax({  
              url   : 'process.php',
              data  : {id:id, deletePhoto:true},
              type  : 'POST',
              dataType : 'JSON',
              success  : function(res){
                me.fadeOut("slow", function(){
                  $(this).remove();
                });
              },
              error   : function(){
                console.log("err");
              }
            });
          });
        },
        addIsotope : function(){
          var container = $(".all-games");  

          // console.log(container.prop("outerHTML"));
          container.isotope({
            itemSelector : ".game"
          });
        } 
      }

      iframe.__init();
    })(jQuery);
    </script>
  </body>
</html>
