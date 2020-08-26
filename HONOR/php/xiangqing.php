<?php
	header("Content-type:text/html;charset=utf-8");
	$xuliehao=$_REQUEST["xuliehao"];
	$conn=mysql_connect("localhost","root","root");
	if($conn){
		
		mysql_select_db("honor");
		$a = mysql_query("select * from canshu where xuliehao = '$xuliehao'",$conn);
		$b = array();
		while ($a1 = mysql_fetch_assoc($a)) {
		
		$b[] = $a1;
		
		}
		echo json_encode($b);
	}else{
		echo "登录失败";
	}
	mysql_close($conn); 

?>