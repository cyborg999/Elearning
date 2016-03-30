<?php  include_once "model.php"; $games  = new Model(); $featured = $games->getFeaturedGames(); $slideshow = $games->getSlideShow();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elearning</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Elearning</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <?php if(isset($_SESSION['user'])):?>
                  <li><a href="all.php">All</a></li>
                  <?php if($_SESSION['user']['type'] == "admin"):?>
                   <li><a href="addnew.php">Add New</a></li>
                  <?php endif ?>
                <?php endif ?>
                <?php if(isset($_SESSION['user'])):?>
                  <li><a href="logout.php">Log Out</a></li>
                <?php else: ?>
                  <li><a href="registration.php">Sign Up</a></li>
                  <li><a href="login.php">Log In</a></li>
                <?php endif ?>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
   
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <?php $counter = 0 ;foreach($games->getAllSlider() as $idx => $slide): ?>
          <li data-target="#myCarousel" data-slide-to="<?= $counter;?>" class="<?php echo ($counter==0) ? 'active' : '' ?>"></li>
        <?php $counter++; ?>
        <?php endforeach ?>
      </ol>
      <style type="text/css">
      .carousel-caption {
        z-index: 10;
        height: 73%;
        top: 78px;
        left: 12%;
        width: 100%;
        overflow: hidden;
      }
      .carousel-caption p {
        overflow: hidden;
        max-height: 200px;
      }
      </style>
      <div class="carousel-inner" role="listbox">
          <?php $c=0;foreach($games->getAllSlider() as $u => $x):?>
          <div class="item <?php echo ($c==0) ? 'active': ''?>">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <div class="slide-cover">
                    <div class="row">
                      <div class="columns col-lg-6 col-md-6 col-sm-6">
                          <h1 style="text-align:center;"><?= $x['title'];?>.</h1>
                          <p ><?= $x['description'];?></p>
                          <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Login to Play!</a></p>
                      </div>
                      <div class="columns col-lg-6 col-md-6 col-sm-6">
                        <img style="float:left;width:300px;border-radius:10px;" alt="d2"src="uploads/photos/<?= $x['filename'];?>">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <?php $c++; ?>
        <?php endforeach ?>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <!-- /.carousel


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <?php foreach($featured as $idx => $game): ?>
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?= $game['name'];?></h2>
          <p class="lead"><?= $game['description'];?></p>
        </div>
        <div class="col-md-5">
          <?php
              $cover = explode(".",$game['folder_id']);
              $cover = $cover[0]."/".$game['cover'];
            ?>
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="uploads/<?= $cover;?>"  alt="Generic placeholder image">
        </div>
      <!-- /END THE FEATURETTES -->
    <?php endforeach ?>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>
