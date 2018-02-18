<?php 

session_start();
if(!isset($_SESSION['username'])) {
  header("Location: ../login.php");
}

require_once dirname ( __FILE__ ) . '/../services/GameService.class.php';

$gameService = new GameService();

if( isset($_POST['gameName']) &&
    isset($_POST['author']) &&
    isset($_POST['gameUrl']) ) {

  $gameName = $_POST['gameName'];
  $author = $_POST['author'];
  $gameUrl = $_POST['gameUrl'];

  $gameService->insertGame($gameName, $author, $gameUrl);

}

header("Location: ../game_manage.php");

?>
