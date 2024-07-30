<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎1-2-1</title>
</head>
<body>

<?php
$message='鉛筆が100円で税込110円です。';
$message2='消しゴムが200円で税込220円です。';
define('TITLE','現在、消費税は10％です。');
?>

<p><?= TITLE; ?></p>
<p><?= $message; ?></p>
<p><?= $message2; ?></p>


</body>
</html>