<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="../kadai/css/style.css">
</head>
<body>
<div class="main">
<div class="header">
 <p class="top-content">Contact Form</p>
 <p class="top-content1">Please write this form and confirm</p>
</div>

 <div class="form">
　　<form action=post_confirm.php method="post">
    <div class="form1"><p>Name</p><input type="text" name="user_name" class="form0" placeholder = "Please input your name"></div>

	<div class="form2"><p>Age</p><input type="text" name="age" class="form0" placeholder="Please input your age"></div>
	
    <div class="form3"><p>Email</p><input type="text" name="email" class="form-email" placeholder ="Please input your email address"></div>
	
    <div class="form4"><p>Purpose</p><select name ="purpose">
    <option selected="selected">Please select one from below relatives</option>
    <option>About this Service</option>   
    <option>About daily lives</option>   
    <option>About study abroad</option>   
    <option>About working in Japan</option>   
    <option>About Others</option>
    </select>
    </div>
    <div class="form5"><p>Content</p><textarea name="content" cols="80" rows="25" placeholder ="Please input your contact content"></textarea></div>
    <a href="post_confirm.php" class="btn-sub">Submit</a>
 </div> 
 </div>
</body>
</html>