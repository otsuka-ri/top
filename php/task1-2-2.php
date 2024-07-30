<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎1-2-2</title>
</head>
<body>

<?php
$pen = "鉛筆" ;
$pen1 = 100 ;
$pen_t = 110;
$keshi = "消しゴム" ;
$keshi2 = 200 ;
$keshi_t = 220 ;

define('TAX',10);
?>

<p>現在、消費税は<?= TAX;?>％です。</p>
<?= "<p>現在、消費税は" .TAX. "％です。</p>";?>
<p><?= $pen;?>が<?= $pen1;?>円で税込<?= $pen_t;?>円です。</p>
<?= "<p>$keshi が$keshi2 円で税込$keshi_t 円です。</p>" ?>

</body>
</html>