<?php
  session_start();

  // エラーメッセージの確認
  if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
  }

  // 入力データの確認
  if (isset($_SESSION['input_data'])) {
    $data = $_SESSION['input_data'];
  }

  // セッション破棄
  session_destroy();

?>

<!-- お問合せ入力画面 -->
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css" type="text/css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問合せ入力画面</title>
</head>

<body>
  <div class="container">
    <h1>お問合せ入力画面</h1>
  </div>
  <div class="box_con02 container">
    <form method="post" action="./confirm.php">
      <table class="formTable">
        <th>お名前<span>必須</span></th>
        <td><input size="20" type="text" class="wide" name="fullname" value="<?php echo isset($data['fullname']) ? htmlspecialchars($data['fullname'], ENT_QUOTES) : ''; ?>"/>
        <span style="color: red;"> <?php echo isset($error_message['fullname']) ? $error_message['fullname'] : ''; ?></span>
        </td>
        </tr>
        <tr>
          <th>電話番号（半角）<span>必須</span></th>
          <td><input size="30" type="text" class="wide" name="tel" value="<?php echo isset($data['tel']) ? htmlspecialchars($data['tel'], ENT_QUOTES) : ''; ?>"/>
          <span style="color: red;"> <?php echo isset($error_message['tel']) ? $error_message['tel'] : ''; ?></span>
          </td>
        </tr>
        <tr>
          <th>Mail（半角）<span>必須</span></th>
          <td><input size="30" type="text" class="wide" name="email" value="<?php echo isset($data['email']) ? htmlspecialchars($data['email'], ENT_QUOTES) : ''; ?>"/>
          <span style="color: red;"> <?php echo isset($error_message['email']) ? $error_message['email'] : ''; ?></span>
          </td>
        </tr>
        <tr>
          <th>お問い合わせ内容<span>必須</span><br/></th>
          <td><textarea cols="50" rows="5" name="contact"><?php echo isset($data['contact']) ? htmlspecialchars($data['contact'], ENT_QUOTES) : ''; ?></textarea>
          <span style="color: red;"> <?php echo isset($error_message['contact']) ? $error_message['contact'] : ''; ?></span>
          </td>
        </tr>
      </table>
      <div class="box_check">
        <p class="btn">
          <span><input type="submit" value="入力内容確認"/></span>
        </p>
      </div>
    </form>
  </div>
</body>

</html>
