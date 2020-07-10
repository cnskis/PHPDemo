<?php
header('content-type:application/json;charset=UTF-8');
$id = $_SERVER["QUERY_STRING"];
$user=$_GET['user'];
$passwd=$_GET['key'];

$con = mysqli_connect("localhost","root","*******");  //连接数据库
mysqli_set_charset($con,'utf8');
$cc=mysqli_select_db($con,'test'); //选择数据库
$sql = "SELECT * FROM user WHERE (user='$user') AND (passwd='$passwd') collate utf8_bin;";
 //执行上面的sql语句并将结果集赋给result。
 $result = $con->query($sql);
 //判断结果集的记录数是否大于0
 if ($result->num_rows > 0) {
	 echo '{["成功":"user&key验证成功！"]}';
 }
 else{
	 echo '{["错误":"用户名或密码错误"]}';	 
 }
?>           
