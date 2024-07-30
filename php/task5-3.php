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
$data = array("商品" => "鉛筆", "価格" =>"100円" , "税込価格" =>"110円");
$data2 = array("商品" => "消しゴム", "価格" =>"200円" , "税込価格" =>"220円");
$data3 = ["商品" => "定規", "価格" =>"300円" , "税込価格" =>"330円"];

$items = array($data, $data2, $data3);

echo "<table>";
echo "<tr><th>商品</th><th>価格</th><th>税込価格</th></tr>";

foreach ($items as $item) {
  echo "<tr>";
  foreach ($item as $key => $value) {
      echo "<td>" . $value . "</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>

</body>
</html>