<meta charset="utf-8">
<?php

function generateRandomString( $length = 10 ) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ( $i = 0; $i < $length; $i++ ) {
        $randomString .= $characters[ rand( 0, strlen( $characters ) - 1 ) ];
    }
    return $randomString;
}
?>

<?php
include( '../conn.php' );
$username = $_POST[ "username" ];
$username = str_replace(" ","",$username);
$email = $_POST[ "email" ];
$salt = generateRandomString( 16 );
$regdate = time();
$regip = $_SERVER[ 'REMOTE_ADDR' ];
$password = '$SHA$' . $salt . '$' . hash( "SHA256", hash( "SHA256", $_POST[ "password" ] ) . "$salt" );
$result = $conn->query( "SELECT * FROM authme WHERE username='$username'" );
if ( $result->num_rows > 0 ) {
    echo <<<EOF
<script language="javascript">
    alert( "该用户已存在！" )
    window.location.href = "index.php"
</script>
EOF;
} else {
    if ( $conn->query( "INSERT INTO authme(username,password,regdate,email) VALUES('$username','$password','$regdate','$email')" ) === True ) {
        echo <<<EOF
<script language="javascript">
    alert( "注册成功！" )
    window.location.href = "index.php"
</script>
EOF;
    }
}
$conn->close();
?>