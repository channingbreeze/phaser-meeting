<?php

require_once dirname ( __FILE__ ) . '/../services/GameService.class.php';

$gameService = new GameService();
$games = $gameService->getAllGames();

echo json_encode($games);

?>
