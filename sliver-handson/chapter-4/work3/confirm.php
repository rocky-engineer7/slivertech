<?php
// セッション開始
session_start();

// 直接URL打ち込み遷移禁止
if (!isset($_POST) || $_SERVER["REQUEST_METHOD"] != "POST" ) {
  header('Location: ./contact.php');
  exit();
}

// ここに処理を記載
// -----------------未入力チェック--------------- //
if (!empty($_POST)) {
  // 名前チェック
  if (empty($_POST['fullname'])) {
    $error_message['fullname'] = "名前を入力して下さい";
  }

  // 電話番号チェック
  if (empty($_POST['tel'])) {
    $error_message['tel'] = "電話番号を入力して下さい";
  } elseif (!is_numeric($_POST['tel'])) {
    $error_message['tel'] = "数値を入力してください";
  }

  // メールアドレスチェック
  if (empty($_POST['email'])) {
    $error_message['email'] = "メールアドレスを入力して下さい";
  } elseif (!preg_match('/^[a-z0-9._+^~-]+@[a-z0-9.-]+$/i', $_POST['email'])) {
    $error_message['email'] = "不正な形式のメールアドレスです";
  }

  // お問い合わせ内容チェック
  if (empty($_POST['contact'])) {
    $error_message['contact'] = "お問い合わせ内容を入力して下さい";
  }

  // エラー内容チェック -- エラーの場合はcontact.phpへリダイレクト
  if (!empty($error_message)) {
    $_SESSION['input_data'] = $_POST;
    $_SESSION['error_message'] = $error_message;
    header('Location: ./contact.php');
    exit();
  }
}

?>

<!-- お問合せ内容確認画面 -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css" type="text/css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h1>お問合せ内容確認</h1>
  </div>
  <div class="box_con02 container">
    <form method="post" action="./complete.php">
      <table class="formTable">
        <tr>
          <th>お名前</th>
          <td>
            <?php echo htmlspecialchars($_POST["fullname"], ENT_QUOTES, "UTF-8"); ?>
          </td>
        </tr>
        <tr>
          <th>電話番号（半角）</th>
          <td>
          <?php echo htmlspecialchars($_POST["tel"], ENT_QUOTES, "UTF-8"); ?>
          </td>
        </tr>
        <tr>
          <th>Mail（半角）</th>
          <td>
          <?php echo htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8"); ?>
          </td>
        </tr>
        <tr>
          <th>お問い合わせ内容<br /></th>
          <td>
          <?php echo htmlspecialchars($_POST["contact"], ENT_QUOTES, "UTF-8"); ?>
          </td>
        </tr>
      </table>

      <div class="container">
        <div class="box_check">
          <p class="btn">
            <span> <input type="submit" value="送信" onclick=""></span>
          </p>
    </form>
    <form method="post" action="contact.php">
      <div class="box_check">
        <p class="btn">
          <span>
            <input type="submit" value="戻る" onclick="">
          </span>
        </p>
      </div>
    </form>
  </div>
  </div>
  </div>
</body>

</html>
