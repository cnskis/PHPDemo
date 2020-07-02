<?php
header('content-type:application/json;charset=UTF-8');
$id = $_SERVER["QUERY_STRING"];
$name=$_GET['name'];
$year=$_GET['year'];
$user=$_GET['user'];
$passwd=$_GET['key'];
//以下是参数过滤
$name=addslashes($name);
$id=addslashes($id);
$year=addslashes($year);
$passwd=addslashes($passwd);
$con = mysqli_connect("localhost","root","******");  //连接数据库
mysqli_set_charset($con,'utf8');
$cc=mysqli_select_db($con,'****'); //选择数据库
$sql = "SELECT * FROM user WHERE (user='$user') AND (passwd='$passwd') collate utf8_bin;";
//执行上面的sql语句并将结果集赋给result。
$result = $con->query($sql);
//判断结果集的记录数是否大于0
if ($result->num_rows > 0) {
    if ($year=='2019'){
        $sql="select * from students where name='$name';";
        $obj=mysqli_query($con,$sql);
        if ($obj->num_rows > 0) {
            $objs=array(status=>'100');
            while ($row = mysqli_fetch_assoc($obj)) {
                $objs[] = $row;
            }
            echo json_encode($objs,JSON_UNESCAPED_UNICODE);
            mysqli_free_result($obj);
            mysqli_close($con);
        } else{
        $arr=['status'=>'404', 'msg'=>'数据库查无此人！目前仅支持19及18届查询', 'copyright'=>'禾戉网络科技 鄂ICP备19028179号-2' ];
        echo json_encode($arr,JSON_UNESCAPED_UNICODE);
        }
    }
    elseif($year=='2018'){
    $sql="select * from studen2018 where name='$name';";
    $obj=mysqli_query($con,$sql);
        if ($obj->num_rows > 0) {
        $objs=array(status=>'100');
        while ($row = mysqli_fetch_assoc($obj)) {
            $objs[] = $row;
        }
        echo json_encode($objs,JSON_UNESCAPED_UNICODE);
        mysqli_free_result($obj);
        mysqli_close($con);
        }else{
        $arr=['status'=>'404', 'msg'=>'数据库查无此人！目前仅支持19及18届查询', 'copyright'=>'禾戉网络科技 鄂ICP备19028179号-2' ];
        echo json_encode($arr,JSON_UNESCAPED_UNICODE);
    }}elseif($year!='2019'or'2018'){
 $arr=['status'=>'404', 'msg'=>'数据库查无此人！目前仅支持19及18届查询', 'copyright'=>'禾戉网络科技 鄂ICP备19028179号-2' ];
        echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}
    }
else{
    $arr=['status'=>'500', 'msg'=>'错误,用户名或key错误!', 'copyright'=>'禾戉网络科技 鄂ICP备19028179号-2' ];
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}
?>

