<?php

require_once dirname ( __FILE__ ) . '/../tools/SQLHelper.class.php';
require_once dirname ( __FILE__ ) . '/../tools/StringUtil.class.php';

class GameService {
	
	public function insertGame($gameName, $author, $gameUrl) {
	
		$sql = "insert into game (gmt_create, gmt_modify, game_name, author, game_url) values (now(), now(), '" . $gameName . "', '" . $author . "', '" . $gameUrl . "')";
		$sqlHelper = new SQLHelper();
		$res = $sqlHelper->execute_dqm($sql);
		return $res;

	}
	
	public function getAllGames() {
		
		$sqlHelper = new SQLHelper();
		$sql = "select * from game where is_deleted=0";
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
	
	}

	public function getGameById($id) {
		
		$sqlHelper = new SQLHelper();
		$sql = "select * from game where id=" . $id . " and is_deleted=0";
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
	
	}

	public function getGameByUrl($gameUrl) {
		
		$sqlHelper = new SQLHelper();
		$sql = "select * from game where game_url='" . $gameUrl . "' and is_deleted=0";
		$res = $sqlHelper->execute_dql_array($sql);
		return $res;
	
	}

	public function updateGameById($id, $gameName, $author, $gameUrl, $scoreFull, $scoreTitle, $scoreAudience) {

		$sqlHelper = new SQLHelper();
		$sql = "update game set gmt_modify=now(), game_name='" . $gameName . "', author='" . $author . "', game_url='" . $gameUrl . "', score_full=" . $scoreFull . ", score_title=" . $scoreTitle . ", score_audience=" . $scoreAudience . " where id=" . $id . " and is_deleted=0";
		$res = $sqlHelper->execute_dqm($sql);
		return $res;

	}

	public function addTotalByUrl($gameUrl) {

		$sqlHelper = new SQLHelper();
		$sql = "update game set score_audience=score_audience+1 where game_url='" . $gameUrl . "' and is_deleted=0";
		$res = $sqlHelper->execute_dqm($sql);
		return $res;

	}
	
}

?>