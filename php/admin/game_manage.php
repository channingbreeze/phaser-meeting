<?php 

session_start();
if(!isset($_SESSION['username'])) {
  header("Location: ../login.php");
}

require_once dirname ( __FILE__ ) . '/../services/GameService.class.php';

$gameService = new GameService();
$games = $gameService->getAllGames();

?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>Phaser大会</title>
</head>
<body>
  游戏管理
  <table>
    <tr><th>游戏名</th><th>作者</th><th>游戏地址</th><th>完整度</th><th>题目关联度</th><th>受众度</th><th>总分</th><th>操作</th></tr>
    <?php 
      foreach($games as $game) {
    ?>
    <tr>
      <td><?php echo $game["game_name"];?></td>
      <td><?php echo $game["author"];?></td>
      <td><a href="<?php echo $game["game_url"];?>" target="_blank"><?php echo $game["game_url"];?></a></td>
      <td><?php echo $game["score_full"];?></td>
      <td><?php echo $game["score_title"];?></td>
      <td><?php echo $game["score_audience"];?></td>
      <td><?php echo ($game["score_full"]+$game["score_title"]+$game["score_audience"]);?></td>
      <td><a href="edit_game.php?id=<?php echo $game['id'];?>" target="_blank">编辑</a></td>
    </tr>
    <?php 
      }
    ?>
  </table>
</body>