<meta charset="utf-8">
<?php
	$host="127.0.0.1";
	$un="root";
	$pw="root";
	$dbname="authme";

	$conn=new MySQLi($host,$un,$pw,$dbname);

	if($conn->connect_error){
		die("数据库连接失败！".$conn->connect_error);
	}
?>