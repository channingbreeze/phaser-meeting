<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';
require_once dirname ( __FILE__ ) . '/../tools/StringUtil.class.php';

class VisitService {
  
  public function insertVisit($gameUrl, $ip) {
  
    $sql = "insert into visit (gmt_create, gmt_modify, game_url, ip, count) values (now(), now(), '" . $gameUrl . "', '" . $ip . "', 1)";
    $sqlHelper = new SQLHelper();
    $res = $sqlHelper->execute_dqm($sql);
    return $res;

  }

  public function getVisitByIpAndUrl($gameUrl, $ip) {

    $sql = "select * from visit where game_url='" . $gameUrl . "' and ip='" . $ip . "'";
    $sqlHelper = new SQLHelper();
    $res = $sqlHelper->execute_dql_array($sql);
    return $res;

  }

  public function addVisitByIpAndUrl($gameUrl, $ip) {

    $sql = "update visit set count=count+1 where game_url='" . $gameUrl . "' and ip='" . $ip . "'";
    $sqlHelper = new SQLHelper();
    $res = $sqlHelper->execute_dqm($sql);
    return $res;

  }
  
}

?>