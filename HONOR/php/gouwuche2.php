<?php
	header("Content-type:text/html;charset=utf-8");
	$id=$_REQUEST["id"];

	$conn=mysql_connect("localhost","root","root");
	if($conn){
		
		mysql_select_db("honor");
		$a = mysql_query("select * from gouwuche where id = '$id'",$conn);
		$c = mysql_num_rows($a);
		if($c==0){
			echo "空的";
		}else{
				$b = array();
		while ($a1 = mysql_fetch_assoc($a)) {
		
		$b[] = $a1;
		}
				echo json_encode($b);
		}

	}else{
		echo "登录失败";
	}
	mysql_close($conn); 

?>