<?php


/**
 * 获取list页面的数据
 */
//接口返回数据，必须保证上下数据类型一致
$con = mysqli_connect("localhost", "root", "root", "huaban");

$arr = array();
if(!$con){
    echo json_encode($arr);
    exit();
}

mysqli_set_charset($con, "utf8");

$sql = "select * from image limit 10";
$result = mysqli_query($con, $sql);
if(!$result){
    echo json_encode($arr);
    exit();
}


while($row = mysqli_fetch_assoc($result)){
    $row["date"] = date("Y.m.d",$row["date"]);
    $arr[] = $row;
}


echo json_encode($arr);