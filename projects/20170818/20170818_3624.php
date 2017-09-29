<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    date.date_default_timezone_set("Asia/Seoul");
    $h3624 = date("H");
    echo $h3624."<hr>";

    if (6 <= $h3624 && $h3624 < 12) {
        echo "Morning<hr>";
    } else if ($h3624 < 18) {
        echo "Afternoon<hr>";
    } else {
        echo "Evening<hr>";
    }

    echo date("Y-m-d l");
    echo date("h:i:sa");

    for ($x = 0; $x < 5; $x++) {
        echo "$x<br>";
    }

    $y = 0;
    while ($y < 5) {
        echo $y++;
    }
    echo "<hr>";

    $z = 0;
    do {
        echo "D ".$z++;
    } while ($z < 5);

    echo "<hr>";
    function isPrime($n) {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) return false;
        }
        return true;
    }
    $sum = 0;
    for ($i = 2; $i <=100; $i++) {
        if (isPrime($i)) $sum += $i;
    }
    echo "소수의 합: $sum";
    ?>
</body>
</html>
