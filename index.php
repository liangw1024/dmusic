<?php
/**
 * Created by PhpStorm.
 * User: liang wei
 * Date: 2019.02.23
 * Time: 18:30
 * 服务端不处理空的请求参数
 */

header("Content-type: text/html; charset=utf-8");
require_once('config/App.php');
require_once ('config/conn.php');

$sign = App::c_get('sign');
$action = App::c_get('action');
$conn = null;
try{
    $conn = new PDO($dsn,$username,$pwd);
//这样才能让捕获连接错误
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    $eMsg = iconv('gbk', 'utf-8', $e->getMessage());
    echo "Connect Error: " . $eMsg;
}



//验证签名
if (!App::check_sign($sign)){
    //echo "签名错误，即将断开连接";
    //exit();
    
}

//判断action进行处理
switch($action){
    //启动图片 app表 start_bg 字段
    case App::$ACTION_GET_START_IMG:
        $commandGetStartbg =  "select start_bg from app where id = (select max(id) from app)";
        $statementGetStartbg = $conn->prepare($commandGetStartbg);
        $statementGetStartbg->execute();
        echo $statementGetStartbg->fetch()['start_bg'];
    break;
    //版本信息 app表 version_info 字段
    case App::$ACTION_GET_RELEASE_VERSION:
        $commandGetVersionInfo = "select version_info from app where id = (select max(id) from app)";
        $statementGetVersionInfo = $conn->prepare($commandGetVersionInfo);
        $statementGetVersionInfo->execute();
        echo $statementGetVersionInfo->fetch()['version_info'];

    break;
}






