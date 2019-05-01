<?php
$username = $_POST[ "username" ];
$password = $_POST[ "password" ];
include( '../conn.php' );

if ( $username == ""
    or $password == "" ) {
    echo <<<EOF
	<script language="javascript">
		alert( "用户名、密码或邮箱不能为空！" )
		window.location.href = "index.php"
	</script>
EOF;
} else {
    $row = $conn->query( "SELECT * FROM authme WHERE username='$username'" )->fetch_assoc();
    if ( $row == NULL ) {
        echo <<<EOF
		<script language="javascript">
			alert( "用户名不存在！" )
			window.location.href = "index.php"
		</script>
EOF;
    } else {
        $salt = explode( "$", $row[ "password" ] )[ 2 ];
        $password = '$SHA$' . $salt . '$' . hash( "SHA256", hash( "SHA256", $password ) . "$salt" );;
        if ( $password == $row[ "password" ] ) {
            echo <<<EOF
			<script language="javascript">
				alert( "登录成功！" )
				window.location.href = "index.php"
			</script>
EOF;
            setcookie( "username", $username, time() + 3600 );
        } else {
            echo <<<EOF
			<script language="javascript">
				alert( "密码错误！" )
				window.location.href = "index.php"
			</script>
EOF;
        }
    }
}
$conn->close();
?>