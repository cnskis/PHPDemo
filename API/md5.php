<?php
header("content-type:text/html;charset=utf-8");
$id = $_SERVER["QUERY_STRING"];
$result = array(
      md5(urldecode($id))
        );
echo json_encode($result);

?>
