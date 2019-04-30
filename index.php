<!doctype html>
<?php
static $author="Yoodi";
static $version="1.0"
?>
<!--
	Author:<?php echo $author."\n"?>
	Version:<?php echo $version."\n"?>
-->
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
  <form action="reg.php" method="post">
    <table width="250" border="0" align="center" cellpadding="2" cellspacing="2">
      <tbody>
        <tr>
          <th width="250" height="30" align="center" valign="middle" style="color: #000000; font-size: 36px;">注册</th>
        </tr>
        <tr>
          <td height="40" align="center" valign="middle"><input name="username" type="text" class="text" id="userName" placeholder="用户名"></td>
        </tr>
        <tr>
          <td height="40" align="center" valign="middle"><input name="password" type="text" class="text" id="userPassword" placeholder="密码"></td>
        </tr>
        <tr>
          <td height="40" align="center" valign="middle"><input name="email" type="text" class="text" id="userPassword2" placeholder="邮箱"></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><input name="button" type="submit" class="button" id="button2" value="提交"></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
</body>
</html>
