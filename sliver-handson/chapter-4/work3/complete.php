<?php
session_start();

// 直接URL打ち込み遷移禁止
if (!isset($_POST) || $_SERVER["REQUEST_METHOD"] != "POST" ) {
  header('Location: ./contact.php');
  exit();
}

// 変数に値があるかどうかの確認を追加
$to = isset($_SESSION["email"]) ? $_SESSION["email"] : 'default@example.com';
$subject = "お問い合わせを受け付けました。";
$message = "お名前: " . (isset($_SESSION["fullname"]) ? $_SESSION["fullname"] : '名無し') . " お問い合わせ内容:\r\n" . (isset($_SESSION["contact"]) ? $_SESSION["contact"] : '内容なし');
$headers = "From: from@example.com";

mail($to, $subject, $message, $headers);

session_destroy();
?>
<!-- お問合せ完了画面 -->
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="style.css" type="text/css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>送信完了</title>
</head>

<body>
  <div class="container">
    <h1>お問い合わせありがとうございます</h1>
    <div class="container">
      <a href="contact.php">お問合せ画面に戻る</a>
    </div>
  </div>
</body>

</html>
