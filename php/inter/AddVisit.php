<?php

require_once dirname ( __FILE__ ) . '/../services/GameService.class.php';
require_once dirname ( __FILE__ ) . '/../services/VisitService.class.php';
require_once dirname ( __FILE__ ) . '/../tools/NetUtil.class.php';

$gameService = new GameService();
$visitService = new VisitService();

header("Access-Control-Allow-Origin: *");

if(isset($_SERVER["HTTP_REFERER"]) && 
  isset($_SERVER["REMOTE_ADDR"]) ) {

  $ip = $_SERVER["REMOTE_ADDR"];
  $gameUrl = $_SERVER["HTTP_REFERER"];

  $res = "ip: " . $ip . ", url: " . $gameUrl . ". ";

  $game = $gameService->getGameByUrl($gameUrl);
  if(count($game) > 0) {
    $visit = $visitService->getVisitByIpAndUrl($gameUrl, $ip);
    if(count($visit) > 0) {
      $visitService->addVisitByIpAndUrl($gameUrl, $ip);
      echo "add one visit";
    } else {
      $visitService->insertVisit($gameUrl, $ip);
      $gameService->addTotalByUrl($gameUrl);
      echo "add one audience";
    }
  } else {
    echo $res . "no such url";
  }

} else {
  echo "no http_referer nor remote_addr";
}

?>
