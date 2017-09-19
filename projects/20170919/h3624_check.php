<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
    <hr>
    <a href="./h3624_del.php">세션 삭제</a>
    <a href="./20170919_3624.php">Main</a>
</body>
</html>
