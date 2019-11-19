<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>iSaraの模写</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</head>

<body>

<div class="confirm">
  <h2>資料請求</h2>
  <p>必要事項をご記入の上、送信ボタンをクリックしてください。</p>

  <form action="mailto.php" method="post">

    <table border="1" class="contact-table">
      <tr>
        <th colspan="3">資料請求</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><?php echo $_POST['lastname']; ?></td>
        <td><?php echo $_POST['firstname']; ?></td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td colspan="2"><?php echo $_POST['mail']; ?></td>
      </tr>
      <tr>
        <td>備考</td>
        <td colspan="2"><?php echo $_POST['inquiry']; ?></td>
      </tr>
    </table>

    <input type="submit" value="送信" />
  </form>
</div>

</body>

</html>
