<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    #3624 이광연

    $ws = ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"];
    $wa = [1, 0, 1, 0, 1, 0, 1];
    $ld = [3, 0, 6, 0, 2, 0, 4];
    $wd = [0, 0, 0, 0, 0, 0, 0];

    for ($i = 0; $i < count($wa); $i++)
        if ($wa[$i])
            $wd[($i + $ld[$i]) % 7] += 1;

    for ($i = 0; $i < count($wd); $i++)
        if ($wd[$i])
            printf("%s (%d)<hr>", $ws[$i], $wd[$i]);
    ?>
</body>
</html>
