<?php
# SESSION / $_SESSION[]
session_start();    # 최초 출력 이전에 실행
?>
<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $_SESSION['s_num'] = "3624";
    $_SESSION['s_name'] = "이광연";
    echo "Session variables are set";

    echo "<hr>";

    echo "<a href='./h3624_check.php'>세션 확인</a>";
    ?>
</body>
</html>
