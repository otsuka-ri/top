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
$days = array("日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日");
$a = 0;

echo "<ul>";
while ($a < count($days)) {
    echo "<li>" . $days[$a] . "</li>";
    $a++;
}
echo "</ul>";
?>

</body>
</html>