<?php
	header("Content-type:text/html;charset=utf-8");
	$id=$_REQUEST["id"];
	$name=$_REQUEST["name"];
	
	$conn=mysql_connect("localhost","root","root");
	if($conn){
		
		mysql_select_db("honor");
		$a = mysql_query("select * from gouwuche where id = '$id' and name='$name'",$conn);
		$b = mysql_num_rows($a);
		if($b==1){
			
			mysql_query("delete from gouwuche where name = '$name' and id = '$id' ",$conn);
			echo "删除成功";
		}else{
			 echo "删除失败";

		}
	}else{
		echo "登录失败";
	}
	mysql_close($conn); 

?>