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
  <a href="add_game.php">添加游戏</a>
  <a href="game_manage.php">游戏管理</a>
  <a href="test_script.php">测试脚本</a>
</body>