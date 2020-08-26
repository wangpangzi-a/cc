<?php
	header("Content-type:text/html;charset=utf-8");
	$id=$_REQUEST["id"];
	$name=$_REQUEST["name"];
	$jiage=$_REQUEST["jiage"];
	$img=$_REQUEST["img"];
	$shuliang=$_REQUEST["shuliang"];
	$conn=mysql_connect("localhost","root","root");
	if($conn){
		
		mysql_select_db("honor");
		$a = mysql_query("select * from gouwuche where id = '$id' and name = '$name'",$conn);
		$b = mysql_num_rows($a);
		if($b==1){
			
		echo "chongfu";	
		}else{
			mysql_query("insert into gouwuche (id,jiage,name,img,shuliang) values ('$id','$jiage','$name','$img','$shuliang')",$conn);
			echo "成功";
		}
	}else{
		echo "登录失败";
	}
	mysql_close($conn); 

?>