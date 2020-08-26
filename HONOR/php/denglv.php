<?php
	header("Content-type:text/html;charset=utf-8");
	$zhanghao=$_REQUEST["zhanghao"];
	$mima=$_REQUEST["mima"];
	
	$conn=mysql_connect("localhost","root","root");
	if($conn){
		
		mysql_select_db("honor");
		$a = mysql_query("select * from zhuce where zhanghao = '$zhanghao' and mima='$mima'",$conn);
		$b = mysql_num_rows($a);
		if($b==0){
			echo "滚 先去注册";
		}else{
			 echo "登录成功";

		}
	}else{
		echo "登录失败";
	}
	mysql_close($conn); 

?>