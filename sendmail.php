<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "nhibx997@gmail.com"; // Địa chỉ nhận
    $subject = "Liên hệ từ: $name";
    $body    = "Tên: $name\nEmail: $email\n\nNội dung:\n$message";
    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Gửi email thành công!";
    } else {
        echo "Gửi email thất bại!";
    }
} else {
    echo "Yêu cầu không hợp lệ.";
}
?>
