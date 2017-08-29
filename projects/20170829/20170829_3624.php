<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    # function
    # 사용자정의함수 / 내장함수

    function test1() {
        echo "test1";
    }
    function test2() {
        $txt = "test2";
        return $txt;
    }
    test1();
    $a = test2();
    echo $a;

    function test3($c, $d) {
        $e = $c + $d;
        return $e;
    }
    echo test3(3, 5);
    ?>
</body>
</html>
