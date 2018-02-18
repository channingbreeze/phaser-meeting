<?php 

session_start();
if(!isset($_SESSION['username'])) {
  header("Location: ../login.php");
}

?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>Phaser大会</title>
</head>
<body>
  添加游戏
  <form action="./inter/addGame.php" method="post">
    游戏名：<input type="text" name="gameName" /><br/>
    作者：<input type="text" name="author" /><br/>
    游戏地址：<input type="text" name="gameUrl" /><br/>
    <input type="submit" value="提交" />
  </form>
</body>