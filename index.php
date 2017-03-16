<?php
function delTree($dir) {
    $files = array_diff(scandir($dir), array('.','..'));
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
    }
    return rmdir($dir);
}

function chown_R($dir, $user) {
    $files = array_diff(scandir($dir), array('.','..'));
    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? chown_R("$dir/$file", $user) : chown("$dir/$file", $user);
    }
    return chown($dir, $user);
}

$date = new DateTime('now', new DateTimeZone('Asia/Seoul'));
$today = isset($_GET['date']) ? $_GET['date'] : $date->format('Ymd');
$target = './projects/' . $today;

$req_uri = preg_replace('/(^\/*|[?#].*$)/', '', $_SERVER['REQUEST_URI']);
$segments = explode('/', $req_uri);

if ($segments[0] === "reset") {
    delTree($target);
    header("Location: /");
}

if (!file_exists($target)) {
    mkdir($target, 0777, true);

    $base_html = "<!--
    Auto-Generated file
    " . $_ENV['USER'] . " " . $today . "
-->
<!DOCTYPE html>
<html>
<head>
    <title>" . $today . "</title>
    <meta charset=\"utf-8\">
</head>
<body>
    <h1>Project " . $today . "</h1>
</body>
</html>";

    $idx_file = $target . "/index.php";
    $fp = fopen($idx_file, "w");
    fwrite($fp, $base_html);
    fclose($fp);
    chown_R("./projects/", $_ENV['USER']);
}

header("Location: /projects/" . $today);
?>
