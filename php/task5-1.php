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
echo "<p><h1>九九の計算</h1></p>";

for($a = 1; $a <= 9; $a++){
  for($b = 1; $b <= 9; $b++){
    echo $a . " × ". $b . " = " .$a * $b . "　";
  }
  echo "<br>";
}
?>

</body>
</html>