<?php
	//echo $_SERVER['HTTP_HOST'];

	$url = "./suji/index.html";
	
	//�����ruifengsuji���� ��������̬ҳ��  ������������ҳ�档
	if(!strstr($_SERVER['HTTP_HOST'],'ruifengsuji')){
		$url = "./other/index.html";
		
	}
	echo "<script language='javascript' type='text/javascript'>";  
	echo "window.location.href='$url'";  
	echo "</script>";  
?>