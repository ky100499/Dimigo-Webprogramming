<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    // 20170811_3624.php
    // /Applications/MAMP/school_lecture/projects/20170811/

    // 한줄 주석
    /* 여러줄 주석 */

    $txt = "Hello PHP!";    // 변수, 약한 타입

    echo $txt;
    print $txt;

    echo "<hr>";

    echo "ABCD" . $txt . "EFGH";
    echo "ABCD $txt EFGH";

    echo "echo / print<hr>";

    echo 1, 2, 3;
    // print 1, 2, 3; -> Error

    // echo (1, 2, 3); -> Error
    // print (1, 2, 3); -> Error

    echo (1);
    print (1);

    echo "<hr>";

    var_dump(6 + print 6);
    // 6 + echo 6; -> Error
    ?>
    <h2>3624 이광연</h2>
</body>
</html>
