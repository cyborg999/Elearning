<?php include_once "model.php"; $model = new Model();
  $game = $model->getGameById();

  $title = "";
  $src   = "";

  foreach($game as $idx => $g){
    $title  = $g['name'];
    $filename    =  $g['folder_id'];
    $src    = explode(".", $g['folder_id']);
  }

?>
<html>
<head>
  <title></title>
</head>
<body>
  <iframe data-gameid="<?= $_GET['id'];?>" data-id="<?php echo $_SESSION['user']['id'];?>" style="width:100%;height:97%;" frameborder="0" src="uploads/<?= $src[0];?>/<?= $filename;?>"></iframe>
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript">
  function updateLearning(score,wrong){
    var id = $("iframe").data("id");
    var gameId = $("iframe").data("gameid");

    $.ajax({
      url   : 'process.php',
      data   : {userid:id, score:score, wrong:wrong, gameid:gameId,updateExam: true},
      type  : 'POST',
      dataType : 'JSON',
      success   : function(res){
        console.log(res);
      },
      error   : function(){
        console.log("err");
      }
    });
  }
  (function($){

    $("iframe").on("load", function(){
      var ifrm    = $("iframe").contents().find("body");
      var restart = ifrm.find("#restart");
      var score   = ifrm.find("h1 .score").html();
      var wrong   = ifrm.find("h1 .wrong").html();

      restart.on("click", function(e){
        console.log(score,wrong);
        e.preventDefault();
      });
    });
  })(jQuery);
  </script>
</body>
</html>