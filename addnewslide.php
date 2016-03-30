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
          </style>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add New Slideshow</h1>
          <form  id="frmUpdate" class="form-horizontal">
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="title">Title</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="title" name="title" value=""  placeholder="title...">
              </div>
            </div>
            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="description">Description</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" placeholder="description"></textarea>
              </div>
            </div>
          </form>

            <div class="form-group form-group-md">
              <label class="col-sm-2 control-label" for="description">Upload Pic</label>
              <div class="col-sm-10">
                <div class="row jumbotron">
                  <div id="filedrag">
                    <form class="form-horizontal" role="form" id="addAttachment_form" method="post" action="process.php">
                      <div class="columns col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                          <div class="columns col-lg-12 col-md-12 col-sm-12">
                            <div class="columns col-lg-12 col-md-12 col-sm-12">
                              <h1>Drag and Drop files here</h1>
                              <p class="lead">
                                Upload/Drag&Drop a html file first to add a new record.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="columns col-lg-12 col-md-12 col-sm-12">
                            <div class="active-drag">
                              <div id="progress"></div>
                              <div class="form-group hide-label">
                                  <input type="file" id="fileselect" name="fileselect[]" multiple="multiple">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="row">
                  <div class="columns col-lg-12 col-md-12 col-sm-12">
                    <div id="messages"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group form-group-md">
              <input type="submit" value="save" id="saveSlide" class="btn btn-md pull-right active  btn-success">
            </div>
        </div>
      </div>
    </div>

        <!-- MODALS -->
    <div id="info" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <br>
          </div>
          <div class="modal-body">
             <div class="alert alert-success" role="alert">You have succesfully saved the slideshow</div>
              <div class="alert alert-warning" role="alert">You have to upload a picture before saving..</div>
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
            var title = $("#title").val();
            var desc = $("#description").val();
            var id = $("#addAttachment_form").data("id");

            if(id == null){
              // alert()

              $(".alert-success").hide();
              $(".alert-warning").show();
              $("#info").modal("show");
              return false;
            }

            $.ajax({
              url   : 'process.php',
              data  : {title:title, description:desc, id:id, addSlider:true},
              type  : 'POST',
              dataType : 'JSON',
              success : function(res){
                 $(".alert-success").show();
              $(".alert-warning").hide();
              $("#info").modal("show");

              },
              error   : function(){

              }
            });

            e.preventDefault();
          });
        }

      }
        slideShow.__init();

    })(jQuery);
    </script>
  </body>
</html>
