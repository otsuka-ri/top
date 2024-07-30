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
$a = mt_rand(0,100);

if($a <= 5){
  $judge = "大凶";
}elseif($a <= 20){
  $judge = "凶";
}
elseif($a <= 50){
  $judge =  "吉";
}
elseif($a <= 80){
  $judge = "中吉";
}
else{
  $judge = "大吉";
}
?>

<p>今日の運勢は<?= $judge; ?>です。</p>

</body>
</html>