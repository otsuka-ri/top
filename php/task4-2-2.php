<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="stylesheet_php2-2.css">
</head>

<body>

<?php
$month = mt_rand(1,12);
if($month >= 3 && $month <= 5){
  $season = "春";
}elseif($month >= 6 && $month <= 8){
  $season = "夏";
}
elseif($month >= 9 && $month <= 11){
  $season =  "秋";
}
else{
  $season = "冬";
}
?>

<p><h1><?= $month?>月は<?= $season?>です。</h1></p>

</body>
</html>