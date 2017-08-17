<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    # 변수 ->  지역(local), 전역(global), 정적(static)
    $a = 5;
    $A = 10;

    function test() {
        global $a;
        echo $a;

        var_dump($GLOBALS);
    }
    test();
    echo $a;
    ?>
</body>
</html>
