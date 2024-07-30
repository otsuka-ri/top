<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
$days = array("日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日");
echo ""
?>
<ul>
  <li><?= $days{0};?></li>
  <li><?= $days{1};?></li>
  <li><?= $days{2};?></li>
  <li><?= $days{3};?></li>
  <li><?= $days{4};?></li>
  <li><?= $days{5};?></li>
  <li><?= $days{6};?></li>
</ul>

</body>
</html>