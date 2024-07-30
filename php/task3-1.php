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
$data = array("商品" => "鉛筆", "価格" =>100);
$data2 = array("商品" => "消しゴム", "価格" =>200);
?>

<table>
  <tr>
    <th>商品</th><th>価格</th><th>税込価格</th><th>1Dzの価格</th>
  </tr>
  <tr>
    <td>
      <?= $data {"商品"}?>
    </td>
    <td>
     <?= $data {"価格"}?>円
    </td>
    <td>
     <?= $data {"価格"}*1.1?>円
    </td>
    <td>
     <?= $data {"価格"}*12*1.1?>円
    </td>
  </tr>
  <tr>
    <td>
      <?= $data2 {"商品"}?>
    </td>
    <td>
     <?= $data2 {"価格"}?>円
    </td>
    <td>
     <?= $data2 {"価格"}*1.1?>円
    </td>
    <td>
     <?= $data2 {"価格"}*12*1.1?>円
    </td>
  </tr>
</table>

</body>
</html>