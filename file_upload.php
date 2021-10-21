<?php
// uploadするディレクトリ
$uploadDir = './';

$fileName = $_FILES['file']['name'];
$fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
$filePath = $_FILES['file']['tmp_name'];

try {
  if (isset($fileName)) {
    $uploadFile = $uploadDir . basename($fileName);

    if ($fileExtension == 'heic') {
      $imagick = new \Imagick();
      $imagick->readImage($filePath);
      $imagick->setImageFormat('jpg');
      $imagick->writeImage($filePath);

      $imagick->clear();
      $imagick->destroy();

      $uploadFile = $uploadDir . $fileName = preg_replace('/\.[^.]*$/', '', $fileName) . '.jpg';
    }

    if (move_uploaded_file($filePath, $uploadFile)) {
      echo "successfully uploaded.<br>";
    } else {
      echo "upload faild<br>";
    }
  }
} catch (\Throwable $e) {
  var_dump($e);
}