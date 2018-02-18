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
  <script type="text/javascript" src="http://phasermeeting.webxinxin.com/download/phasermeeting.js"></script>
</head>
<body>
  测试脚本
  <div></div>
</body>