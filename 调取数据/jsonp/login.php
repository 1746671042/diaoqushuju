<?php

/**
 * 1.做登录验证
 */
//需要接收数据

$name = $_GET["name"];
$pwd = $_GET["pwd"];
//$content = $_GET["content"];

//1.接收参数
$callback = $_GET["callback"];

//验证数据的有效性
if($name == ""){
    $result = array("status"=>false, "msg"=>"用户名不能为空");
    echo $callback."(".json_encode($result).")";
    exit();
}
if($pwd == ""){
    $result = array("status"=>false, "msg"=>"密码不能为空");
    echo $callback."(".json_encode($result).")";
    exit();
}

//验证数据库的帐号和密码是否匹配


//返回一个成功的结果
$result = array("status"=>true, "msg"=>"登录成功");
echo $callback."(".json_encode($result).")";