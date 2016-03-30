<?php include_once "model.php";  $games  = new Model();  $all    = $games->getAllGames(); ?>
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

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .jumbotron { border:5px dashed white;}
      #filedrag.hover { border: 3px dashed red!important; }
      #progress { position: absolute; float: left; top: 10px; width: 97%; left: 10px; z-index: 10; }
      #messages { width: 100%; overflow: hidden; }
      #progress p { display: block; width: 100%; padding: 2px 5px; margin: 2px 0; border-radius: 5px; background: #eee url("img/progress.png");
      background-repeat: repeat-y; }
      #progress p.failed { background: #c00 none 0 0 no-repeat; }
    </style>
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
              <a class="navbar-brand" href="index.php">Elearning</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <?php if(isset($_SESSION['user'])):?>
                  <li ><a href="all.php">All</a></li>
                  <?php if($_SESSION['user']['type'] == "admin"):?>
                   <li class="active"><a href="addnew.php">Add New</a></li>
                  <li><a href="student.php">Students</a></li>
                  <?php endif ?>
                <?php endif ?>
                <?php if(isset($_SESSION['user'])):?>
                  <li><a href="logout.php">Log Out</a></li>
                <?php else: ?>
                  <li><a href="registration.php">Sign Up</a></li>
                  <li><a href="login.php">Log In</a></li>
                <?php endif ?>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      <div class="row" style="margin-top:60px;">
        <div class="columns col-lg-12 col-md-12 col-sm-12">
          <?php if(isset($message)): ?>
            <?php if(count($message) >0 ): ?>
              <?php foreach($message as $idx => $file): ?>
                <p class="error"><?= $file;?></p>
              <?php endforeach ?>
            <?php endif ?>
          <?php endif ?>
        </div>
      </div>
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
      <div class="clearfix row">
        <form action="process.php">
          <div class="columns col-lg-12 col-md-12 col-sm-12">
            <label>Title</label>
            <input name="title" type="text" id="gameTitle" class="form-control" placeholder="Title">
            <label>Description</label>
            <textarea name="description" id="gameDesc" class="form-control" placeholder="description"></textarea>
            <input style="margin-top:20px" disabled id="btnAdd" type="submit" class="btn btn-success btn-lg">
          </div>
        </form>
      </div>
      <footer class="footer">
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->

    <!-- MODALS -->
    <div id="game" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Record is succesfully Added</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="video_dragv2.js"></script>
  </body>
</html>
