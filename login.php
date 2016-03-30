<?php include_once "model.php"; $games  = new Model(); ?>
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
                  <li><a href="all.php">All</a></li>
                  <?php if($_SESSION['user']['type'] == "admin"):?>
                  <li><a href="addnew.php">Add New</a></li>
                  <?php endif ?>
                <?php endif ?>
                <li ><a href="registration.php">Sign Up</a></li>
                <li  class="active"><a href="login.php">Log In</a></li>
                <?php if(isset($_SESSION['user'])):?>
                <li><a href="logout.php">Log Out</a></li>
                <?php endif ?>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      <div class="row" style="margin-top:60px;"> 

          <?php if(count($games->errors) > 0): ?>
            <?php foreach($games->errors as $idx => $err): ?>
              <!-- <p class="bg-warning" style="padding:5px;border-radius:5px;"><?= $err; ?></p> -->
              <div class="alert alert-warning alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
               <?= $err; ?>
              </div>
            <?php endforeach ?>
          <?php endif ?>

        <div class="jumbotron">
          <div class="container">
            <h1>Sign In</h1>
            <form method="post">
              <input type="hidden" class="form-control" name="loginUser" value="true"/>
              <div class="row">
                <div class="columns col-lg-2">
                  <label>Username</label>
                </div>
                <div class="columns col-lg-7">
                    <input type="text" class="form-control" name="username" placeholder="Username..."/>
                </div>
              </div>
              <div class="row">
                <div class="columns col-lg-2">
                  <label>Password</label>
                </div>
                <div class="columns col-lg-7">
                    <input type="password" class="form-control" name="password" placeholder="Password..."/>
                </div>
              </div>
              <div style="margin-top:5px;"class="row">
                <div class="columns col-lg-12">
                  <input type="submit" class="btn btn-lg btn-success" value="Login"/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /container -->
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
  </body>
</html>
