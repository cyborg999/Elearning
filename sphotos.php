<?php include_once "model.php";  $games = new Model(); $all = $games->getAllGames(); ?>
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
              <a class="navbar-brand" href="index.php">E-learning</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li><a href="sadvanced.php">Advanced learning</a></li>
                  <li><a href="sbasic.php">Basic Learning</a></li>
                  <li class="active"><a href="sphotos.php">Pictures</a></li>
                  <li ><a href="svideos.php">Videos</a></li>
                  <li><a href="logout.php">Log Out</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
      <div class="row" style="margin-top:60px;">
        <style type="text/css">
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
          height: 100%;
          width: 100%;
        }
        .img-container .admin-control {
          position: absolute;
          top: 0px;
          left: 0px;
          z-index: 2;
          width: 100%;
          height: 100%;
          background: rgba(16, 16,16,.8);
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
        <div class="columns all-games col-lg-12 col-md-12 col-sm-12">
          <?php foreach($games->getAllPhoto() as $idx => $game): ?>
              <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="thumbnail">
                  <div class="img-container">
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
    </div> <!-- /container -->

       <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-body">
          <img style="max-width:100%" src="img/cover1.png" id="imgPreview">
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.js"></script>
    <script type="text/javascript">
    (function($){
      var iframe = {
        __init : function(){
          this.__listen();
        },
        __listen : function(){
          // this.addIsotope();

          var slide = $(".slide");
          var close = $(".glyphicon-remove-sign");

          $(".imgPreview").on("click", function(){
            $("#imgPreview").attr("src", $(this).parents(".thumbnail").find("img").attr("src"));
          });


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
            var me = $(this).parents(".game");
            var id = $(this).data("id");

            $.ajax({
              url   : 'process.php',
              data  : {id:id, deleteGame:true},
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
