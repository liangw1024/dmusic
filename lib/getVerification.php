<?php
/**
 * Created by PhpStorm.
 * User: liang wei
 * Date: 2019.03.09
 * Time: 14:28
 */
session_start();
//新建一个真色彩图像
$image = imagecreatetruecolor(100, 30);
$bgcolor = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $bgcolor);
//生成的内容
$data = '大伟工作室abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
$content = "";
//生成随机数字

for ($i = 0; $i < 4; $i++) {
    $fontsize = 30;
    $fontColor = imagecolorallocate($image, rand(0, 50), rand(0, 50), rand(0, 50));
    $singleText = substr($data, rand(0, strlen($data) - 1), 1);
    //坐标
    $x+=20;
    $y = rand(8,15);
    //绘制文字到image中
    imagestring($image, $fontsize, $x, $y, $singleText  , $fontColor);
    $content .= $singleText;
    $content.=strtolower($content);
}

//将verification code储存到session中
$_SESSION['verificationCode'] = $content;
//添加干扰元素点
for ($i = 0; $i < 200; $i++) {
    //干扰元素的颜色 50-200比较浅不会干扰阅读
    $pointColor = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
    //绘制一个像素到 image中
    imagesetpixel($image, rand(0, 99), rand(0, 29), $pointColor);

}
//添加干扰元素横线
for ($i = 0; $i < 1; $i++) {
    $lineColor = imagecolorallocate($image, rand(80, 220), rand(80, 220), rand(80, 220));
    imageline($image, rand(1, 99), rand(1, 29), rand(1, 99), rand(1, 29), $linecolor);
}
header("content-type:image/png");
imagepng($image);
imagedestroy($image);
?>
