<?php
function delTree($dir) {
    $files = array_diff(scandir($dir), array('.','..'));
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
}

$date = new DateTime('now', new DateTimeZone('Asia/Seoul'));
$today = isset($_GET['date']) ? $_GET['date'] : $date->format('Ymd');
$target = './' . $today;

$req_uri = preg_replace('/(^\/*|\?.*$)/', '', $_SERVER['REQUEST_URI']);
$segments = explode('/', $req_uri);

if ($segments[0] === "reset") {
    var_dump(delTree($target));
}

if (!file_exists($target)) {
    mkdir($target);
    chown($target, $_ENV['USER']);

    $base_html = "<!--
    Auto-Generated file
    " . $_ENV['USER'] . " " . $today . "
    Notice: Use location as relative location
-->
<!DOCTYPE html>
<html>
<head>
    <title>" . $today . "</title>
    <meta charset=\"utf-8\">
</head>
<body>
    <h1>It Works!</h1>
</body>
</html>";

    $idx_file = $target . "/index.php";
    $fp = fopen($idx_file, "w");
    fwrite($fp, $base_html);
    fclose($fp);
    chown($idx_file, $_ENV['USER']);
}

require($target . '/index.php');
?>
