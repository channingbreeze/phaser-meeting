<?php 

session_start();
if(isset($_SESSION['username'])) {
  header("Location: ../admin/index.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Phaser大会</title>
        <meta charset="utf-8" />
    </head>
    <body>
      <form action="inter/login.php" method="post">
        用户名：<input name="username" type="text">
        密　码：<input name="password" type="password">
        <input type="submit" value="提交" />
      </form>
    </body>
</html>