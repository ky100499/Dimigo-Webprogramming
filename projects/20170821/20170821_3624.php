<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    # 3624 이광연
    # Code 완전수

    $result = [];
    for ($i = 1; $i <= 10000; $i++) {
        $divider = [];
        for ($j = 1; $j < $i; $j++) if ($i % $j == 0) $divider[] = $j;
        if (array_sum($divider) == $i) $result[] = $i;
    }
    foreach ($result as $num) echo "$num<hr>";
    echo count($result) . "개";
    ?>
</body>
</html>
