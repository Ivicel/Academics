<?php
	require_once 'connect.php';
// 	require_once 'connectdeploy.php';
	$query = 'select * from project';
	$result = mysql_query($query) or die(header("HTTP/1.1 500 ".mysql_error()));
	
	$rows = array();
	while($r = mysql_fetch_assoc($result)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
?>