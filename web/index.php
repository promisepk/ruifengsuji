<?php
	//echo $_SERVER['HTTP_HOST'];

	$url = "./suji/index.html";
	
	//如果是ruifengsuji域名 则跳到静态页面  否则跳到我们页面。
	if(!strstr($_SERVER['HTTP_HOST'],'ruifengsuji')){
		$url = "./other/index.html";
		
	}
	echo "<script language='javascript' type='text/javascript'>";  
	echo "window.location.href='$url'";  
	echo "</script>";  
?>