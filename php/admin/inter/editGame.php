<?php 

session_start();
if(!isset($_SESSION['username'])) {
  header("Location: ../login.php");
}

require_once dirname ( __FILE__ ) . '/../../services/GameService.class.php';

$gameService = new GameService();

if( isset($_POST['id']) &&
    isset($_POST['gameName']) &&
    isset($_POST['author']) &&
    isset($_POST['gameUrl']) &&
    isset($_POST['scoreFull']) &&
    isset($_POST['scoreTitle']) &&
    isset($_POST['scoreAudience']) ) {

  $id = $_POST['id'];
  $gameName = $_POST['gameName'];
  $author = $_POST['author'];
  $gameUrl = $_POST['gameUrl'];
  $scoreFull = $_POST['scoreFull'];
  $scoreTitle = $_POST['scoreTitle'];
  $scoreAudience = $_POST['scoreAudience'];

  $gameService->updateGameById($id, $gameName, $author, $gameUrl, $scoreFull, $scoreTitle, $scoreAudience);

}

header("Location: ../game_manage.php");

?>
