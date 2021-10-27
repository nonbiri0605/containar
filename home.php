<?php
    session_start();
?>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>session test home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="mt-5">
        <?php echo $_SESSION["userId"] ?>さん、こんにちは。
      </div>
      <a href="mypage.php">マイページへ</a>
      <a href="logout.php">ログアウトする</a>
    </div>
  </body>
</html>

