<!doctype html>
<!--
	Author:<?php echo $author."\n"?>
	Version:<?php echo $version."\n"?>
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>注册</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div>
		<div align="center">
			<form action="register.php" method="post">
				<h1 style="font-size: 36px">注册</h1>
				<p><input name="username" type="text" class="text" id="userName" placeholder="用户名" required>
				</p>
				<p><input name="password" type="password" class="text" id="userPassword" placeholder="密码" required>
				</p>
				<p><input name="email" type="email" class="text" id="email" placeholder="邮箱" required>
				</p>
				<p><input name="button" type="submit" class="button" id="email" value="提交">
				</p>
				<p><a href="../login/">前往登录</a>
				</p>
			</form>
		</div>
	</div>
</body>
</html>