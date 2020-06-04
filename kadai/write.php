<?php
// 問い合わせフォームで連絡があったものを記録する確認用のファイル。
// なのでデザインは今のところ考えない。

$name = $_POST["user_name"];
$email = $_POST["email"];
$purpose = $_POST["purpose"];
$content = $_POST["content"];

$file = fopen("data/data.txt","a");
  // fwrite($file, "aaa"."\n");
  fwrite($file,$name." ".$email. " ".$purpose. " ".$content."\n");
  fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>