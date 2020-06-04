<?php

$name = $_POST["user_name"];
$age = $_POST["age"];
$email = $_POST["email"];
$purpose = $POST_["purpose"];
$content = $_POST["content"];

$page_flag = 0;
if( !empty($_POST['sub'])){
    $page_flag = 1;
} elseif( !empty($_POST['back1'])){
    $page_flag = 2;

$header = null;
//変数を0にする
$auto_reply_subject = null;
$auto_reply_text = null;
$admin_reply_subject = null;
$admin_reply_text = null;
date_default_timezone_set('Asia/Tokyo');

$header = "MIME-Version: 1.0\n";
$haeder .="From: ALPS<xxxx@alps.com>\n";
$header .="Reply-To: ALPS <xxxx@alps.com>";


//件名設定
$auto_reply_subject = 'Thank you for your contact/ From ALPS';

//本文を設定
$auto_reply_text = "Thank you for your contact. We received your contact following content.\n\n";
$auto_reply_text .= "Contact date and time:" . date("Y-m-d H:i") . "\n";
$auto_reply_text .= "Name:" . $_POST['user_name'] . "\n";
$auto_reply_text .= "Address:" . $_POST['email'] . "\n\n";
$auto_reply_text .= "Purpose:" . $_POST['purpose'] . "\n\n";
$auto_reply_text .= "Content:" . $_POST['content'] . "\n\n";

mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text);

$admin_reply_subject = "お問い合わせを受け付けました";

$admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
$admin_reply_text .= "氏名:" . $_POST['user_name'] . "\n";
$admin_reply_text .= "アドレス:" . $_POST['email'] . "\n";
$admin_reply_text .= "目的:" . $_POST['purpose'] . "\n";
$admin_reply_text .= "内容:" . $_POST['content'] . "\n";

mb_send_mail( 'xxxyyy@apls.com', $admin_reply_subject, $admin_reply_text, $header);
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST(受信)</title>
    <link rel="stylesheet" href="../kadai/css/style.css">
</head>
<body>
  <div class="main">
　<div class="header">
　<p class="top-content">Contact Form</p>
　<p class="top-content1">Please check following content</p>
　</div>
<p>Name：<?= htmlspecialchars($name, ENT_QUOTES);?></p>
<p>Age：<?= htmlspecialchars($age, ENT_QUOTES);?></p>
<p>Address：<?= htmlspecialchars($email, ENT_QUOTES);?></p>
<p>Purpose：<?= htmlspecialchars($purpose, ENT_QUOTES);?></p>
<p>Content：<?= htmlspecialchars($content, ENT_QUOTES);?></p>
<div class="button">
<input name ="sub" type="submit" onclick="location.href='done.php'" value="Submit" id="submit1">
<input name ="back1" type="submit" onclick="location.href='index.php'" value="Back to form page" id="back">
</div>
</div>
</body>
</html>