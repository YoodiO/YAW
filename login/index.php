<!doctype html>
<!--
	Author:<?php echo $author."\n"?>
	Version:<?php echo $version."\n"?>
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>登录</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php if(isset($_COOKIE["username"])==False){?>
	<div>
		<div align="center">
			<form action="login.php" method="post">
				<h1 style="font-size: 36px;">登录</h1>
				<p><input name="username" type="text" class="text" id="userName" placeholder="用户名">
				</p>
				<p><input name="password" type="text" class="text" id="userPassword" placeholder="密码">
				</p>
				<p><input name="button" type="submit" class="button" id="button2" value="提交">
				</p>
				<p><a href="../register/">前往注册</a>
				</p>
			</form>
		</div>
	</div>
	<?php }else{?>
	<div>
		<div align="center">
			<h1 style="font-size: 36px;">已登录,尊敬的<?php echo $_COOKIE["username"];?></h1>
			<p><a href="loginout.php"><input name="button" type="button" class="button" id="button2" value="登出"></a>
			</p>
		</div>
	</div>
	<?php }?>
</body>
</html>