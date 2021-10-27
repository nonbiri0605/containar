<?php
    session_start();

    if (isset($_POST['postFlag'])) {
        if (isset($_SESSION["count"])) {
            $_SESSION["count"] = $_SESSION["count"] + 1;
        } else {
            $_SESSION["count"] = 0;
        }
    }
?>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>session test mypage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="mt-5">
        <?php echo $_SESSION["userId"] ?>のマイページです。
      </div>
      <form action="mypage.php" method="post" class="mt-2">
        <input type="hidden" name="postFlag" value="1" />
        <div>カウント回数：<?php echo isset($_SESSION["count"]) ? $_SESSION["count"] : '' ?></div>
        <button class="btn btn-success">テストカウント</button>
      </form>
      <a href="./home.php">ホームへ戻る</a>
    </div>
  </body>
</html>