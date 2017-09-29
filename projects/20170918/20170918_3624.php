<?php
$c_name = "leekwangyeon";
$c_class = "3624";
setcookie($c_name, $c_class, time() + 86400 * 30, "/");
?>
<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    echo isset($_COOKIE[$c_name]) ?
    "Cookie name: " . $c_name . "<br>" .
    "Cookie value: " . $_COOKIE[$c_name] :
    "Cookie name \"" . $c_name . "\" is not set";
    ?>
    <hr>
    <a href="./del_c.php">쿠키 삭제</a>
</body>
</html>
