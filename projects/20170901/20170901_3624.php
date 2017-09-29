<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $h1 = $_POST['c_n'];
    $h2 = $_POST['pw'];

    printf("%s님 ㅎㅇ<br>", $h1);
    printf("학번은 %s임<br>", $h2);

    echo "<hr>";

    date_default_timezone_set("Asia/Seoul");

    $h3 = time();
    $h4 = mktime(8, 10, 00, 11, 16, 2017);
    $h5 = $h4 - $h3;
    $h6 = intval($h5 / (60*60*24));

    echo "3624 이광연<hr>";
    printf("%d초 지남<hr>", $h3);
    printf("%d초 남음<hr>", $h5);
    printf("%d일 전<hr>", $h6);

    $h7 = 19.99 * 100;
    echo $h7;
    echo intval($h7);
    echo intval("$h7");
    echo (int) $h7;
    ?>
</body>
</html>
