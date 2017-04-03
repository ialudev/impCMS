<?php

	function cms($info) {

		global $db;

		$sql = $db ->prepare("SELECT * FROM cms_settings");
		$sql->execute();
		$abfr = $sql->fetch(PDO::FETCH_OBJ);

		return $abfr->$info;
	}

?>