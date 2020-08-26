<?php
	header("Content-type:text/html;charset=utf-8");
	$nicheng=$_REQUEST["nicheng"];
	$zhanghao=$_REQUEST["zhanghao"];
	$mima=$_REQUEST["mima"];
	
	$conn=mysql_connect("localhost","root","root");
	if($conn){
		
		mysql_select_db("honor");
		$a = mysql_query("select * from zhuce where zhanghao = '$zhanghao'",$conn);
		$b = mysql_num_rows($a);
		if($b==1){
			echo "用户名存在";
		}else{
			 
			 $result=mysql_query("insert into zhuce (zhanghao,mima,nicheng) values ('$zhanghao','$mima','$nicheng')",$conn);
			 echo "注册成功";
		}
	}else{
		echo "登录失败";
	}
	mysql_close($conn); 

?>