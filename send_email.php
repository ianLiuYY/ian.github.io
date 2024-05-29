<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 设置邮件信息
    $to = "ian492971750@outlook.com"; // 将此替换为你的电子邮件地址
    $subject = "来自个人网页的联系表单";
    $body = "姓名: $name\n邮箱: $email\n留言:\n$message";
    $headers = "From: $email";

    // 发送邮件
    if (mail($to, $subject, $body, $headers)) {
        echo "邮件发送成功！";
    } else {
        echo "邮件发送失败，请稍后再试。";
    }
}
?>
