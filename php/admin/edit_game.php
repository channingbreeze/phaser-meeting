<?php 

session_start();
if(!isset($_SESSION['username'])) {
  header("Location: ../login.php");
}


require_once dirname ( __FILE__ ) . '/../services/GameService.class.php';

$gameService = new GameService();

if( isset($_GET['id']) ) {
  $id = $_GET['id'];
  $game = $gameService->getGameById($id)[0];
} else {
  header("Location: ./index.php");
}

?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>Phaser大会</title>
</head>
<body>
  修改游戏
  <form action="./inter/editGame.php" method="post">
    <input type="hidden" name="id" value="<?php echo $game['id'];?>" />
    游戏名：<input type="text" name="gameName" value="<?php echo $game['game_name'];?>" /><br/>
    作者：<input type="text" name="author" value="<?php echo $game['author'];?>" /><br/>
    游戏地址：<input type="text" name="gameUrl" value="<?php echo $game['game_url'];?>" /><br/>
    完整度：<input type="text" name="scoreFull" value="<?php echo $game['score_full'];?>" /><br/>
    题目关联度：<input type="text" name="scoreTitle" value="<?php echo $game['score_title'];?>" /><br/>
    受众度：<input type="text" name="scoreAudience" value="<?php echo $game['score_audience'];?>" /><br/>
    <input type="submit" value="提交" />
  </form>
</body>