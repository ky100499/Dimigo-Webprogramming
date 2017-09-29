<?php
$c_name = "leekwangyeon";
setcookie($c_name, "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    Deleted cookie
    <hr>
    <a href="./check_c.php">쿠키 확인</a>
</body>
</html>
