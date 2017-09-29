<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    $stream = fopen("data.txt", "r");
    $data = [];
    while ($temp = fgets($stream)) {
        if (preg_replace('/\s/', '', $temp) == "quit") break;
        $data[] = $temp;
    }
    fclose($stream);

    $units = [50000, 10000, 5000, 1000, 500, 100, 50, 10, 5, 1];
    $result = [];

    foreach ($data as $datum) {
        $temp = [];

        $datum = preg_replace("/(^\s+|\s+$)/", "", $datum);
        $datum = preg_split("/\s+/", $datum);

        $temp['name'] = $datum[0];
        $temp['money'] = $money = intval($datum[1]);

        $unit_result = [];
        foreach ($units as $unit) {
            if ($money >= $unit) {
                $unit_result[$unit] = intval($money / $unit);
                $money %= $unit;
            }
        }
        $temp['answer'] = $unit_result;
        $result[] = $temp;
    }
    ?>

    <table border="1">
        <caption>3624 출장비 지급표</caption>
        <tr>
            <th>성명</th>
            <th>지급액</th>
            <th>오만원</th>
            <th>만원</th>
            <th>오천원</th>
            <th>천원</th>
            <th>오백원</th>
            <th>백원</th>
            <th>오십원</th>
            <th>십원</th>
            <th>오원</th>
            <th>일원</th>
        </tr>
        <?php
        $sum = [];
        foreach ($result as $res) {
            ?>
            <tr>
                <td><?= $res['name'] ?></td>
                <td><?= $res['money'] ?></td>
                <?php
                foreach ($units as $unit) {
                    if (!isset($sum[$unit])) $sum[$unit] = 0;
                    $sum[$unit] += (isset($res['answer'][$unit])) ? $res['answer'][$unit] : 0;
                    ?>
                    <td><?= isset($res['answer'][$unit]) ? $res['answer'][$unit] : "0" ?></td>
                    <?php
                }
                ?>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td colspan="2">전체화폐매수</td>
            <?php
                foreach ($units as $unit) {
                    ?>
                    <td><?= $sum[$unit] ?></td>
                    <?php
                }
            ?>
        </tr>
    </table>
</body>
</html>
