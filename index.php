<?php
$date = new DateTime('now', new DateTimeZone('Asia/Seoul'));
$today = isset($_GET['date']) ? $_GET['date'] : $date->format('Ymd');

$target = './' . $today;
if (!file_exists($target)) {
    mkdir($target);

    $base_html = "<!DOCTYPE html>\n<html>\n<head>\n    <title>" . $today . "</title>\n    <meta charset=\"utf-8\">\n</head>\n<body>\n</body>\n</html>";

    $fp = fopen($target . "/index.php", "w");
    fwrite($fp, $base_html);
    fclose($fp);
}

require($target . '/index.php');
?>
