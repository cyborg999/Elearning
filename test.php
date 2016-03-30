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
         <pre>
          <?php
            var_dump($slideshow);
          ?>
         </pre>
          <?php $c=0;foreach($games->getSlideShow() as $u => $x):?>
          <div class="item <?php echo ($c==0) ? 'active': ''?>">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <div class="slide-cover">
                    <div class="row">
                      <div class="columns col-lg-6 col-md-6 col-sm-6">
                          <h1 style="text-align:center;"><?= $x['name'];?>.</h1>
                          <p ><?= $x['description'];?></p>
                          <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Login to Play!</a></p>
                      </div>
                       <?php
                          $cover = explode(".",$x['folder_id']);
                          $cover = $cover[0]."/".$x['cover'];
                        ?>
                      <div class="columns col-lg-6 col-md-6 col-sm-6">
                        <img style="float:left;width:300px;border-radius:10px;" alt="d2"src="uploads/<?= $cover;?>">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <?php $c++; ?>
        <?php endforeach ?>
</body>
</html>