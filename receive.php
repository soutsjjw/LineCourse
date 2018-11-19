<?php
	$json_str = file_get_contents('php://input'); //接收request的body(可以接收除了Content-type為multipart/form-data的資料)
	$json_obj = json_decode($json_str); //轉成json格式
	
	$myfile = fopen("log.txt", "w+") or die("Unable to open file!"); //設定一個log.txt，用來印訊息
	fwrite($myfile, "\xEF\xBB\xBF".$json_str); //在字串前加上\xEF\xBB\xBF轉成utf8格式
?>
