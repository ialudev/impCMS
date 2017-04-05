<?php

	function shortern($text, $chars_limit)
{
    // Check if length is larger than the character limit
    if (strlen($text) > $chars_limit)
    {
        // If so, cut the string at the character limit
        $new_text = substr($text, 0, $chars_limit);
        // Trim off white space
        $new_text = trim($new_text);
        // Add at end of text ...
        return $new_text . "...";
    }
    // If not just return the text as is
    else
    {
    return $text;
    }
}

	function cms_seo($info) {

		global $db;

		$sql = $db ->prepare("SELECT * FROM cms_seo");
		$sql->execute();
		$abfr = $sql->fetch(PDO::FETCH_OBJ);

		return $abfr->$info;
	}

	function cms($info) {

		global $db;

		$sql = $db ->prepare("SELECT * FROM cms_settings");
		$sql->execute();
		$abfr = $sql->fetch(PDO::FETCH_OBJ);

		return $abfr->$info;
	}

	function admincheck($username) {
		global $db;

		$sql = $db ->prepare("SELECT * FROM members WHERE username = :username");
		$sql -> bindParam(":username", $username);
		$sql -> execute();

		$info_ad = $sql->fetch(PDO::FETCH_OBJ);

		return $info_ad->rank;
	}

	function userdata($username, $data) {
		global $db;

		$sql = $db -> prepare("SELECT * FROM members WHERE username = :username");
		$sql -> bindParam(":username", $username);
		$sql -> execute();

		$userinfo = $sql->fetch(PDO::FETCH_OBJ);

		return $userinfo->$data;
	}

	function userrank($username) {
		global $db;

		$sql = $db -> prepare("SELECT * FROM members WHERE username = :username");
		$sql -> bindParam(":username", $username);
		$sql -> execute();

		$userinfo = $sql->fetch(PDO::FETCH_OBJ);

		if($userinfo->rank == 7) { echo 'Administrator'; }
	}

?>