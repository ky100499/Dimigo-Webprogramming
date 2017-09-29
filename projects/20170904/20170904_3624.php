<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    echo "\$_SERVER<hr>";
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo $_SERVER['HTTP_HOST'] . "<br>";
    echo $_SERVER['HTTP_USER_AGENT'] . "<br>";

    echo "<hr>";

    for ($i = 3; $i <= 6; $i++) {
        for ($j = 1; $j <= 37; $j++) {
            $txt = "3" . $i . sprintf("%02d", $j);
            if ($txt == "3624") {
                echo "<span style='color: #0000ff; font-weight: bold'>$txt </span>";
            } else {
                echo $txt." ";
            }
        }
        echo "<hr>";
    }

    $str = "If you divide 4 by 2 you'll get 2";
    $format = sscanf($str, "%s %s %s %d %s %d %s %s %d");
    echo "<pre>";
    print_r($format);
    echo "</pre>";

    $str = "age:30 weight:70kg";
    $format = sscanf($str, "age:%d weight:%dkg", $age, $weight);
    echo "<pre>";
    var_dump($age, $weight);
    echo "</pre>";

    $str = "one,two,three,four";
    echo "<pre>";
    print_r(explode(",", $str));
    echo "</pre>";
    $str = explode(",", $str, 2);

    echo "<hr>";
    echo implode("#", $str);
    ?>
</body>
</html>
