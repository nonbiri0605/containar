<?php
    session_start();

    $userId = isset($_POST['user_id']) ? $_POST['user_id'] : '';
    if (empty($userId)) {
      echo 'ユーザーIDを入力してください。<br />';
      echo '<a href="login.html">戻る</a>';
      exit;
    }

    $_SESSION['userId'] = $userId;

    header('Location: home.php');