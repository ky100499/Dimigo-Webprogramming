<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    # 3624 이광연
    # File

    echo readfile("test.txt");

    echo "<hr>";

    $h3624 = fopen("test.txt", "r") or die("404");
    # fopen( {{ filename }}, {{ mode }} );
    echo fread($h3624, filesize("test.txt"));
    # fread( {{ file_pointer }}, {{ size }} );
    fclose($h3624);

    echo "<hr>";

    $h3624_1 = fopen("test.txt", "r") or die("404");
    echo fgets($h3624_1);
    # fgets( {{ file_pointer }} );
    fclose($h3624_1);

    echo "<hr>";

    $h3624_2 = fopen("test.txt", "r") or die("404");
    while (!feof($h3624_2))
        echo fgets($h3624_2);
    fclose($h3624_2);

    echo "<hr>";

    $h3624_3 = fopen("test.txt", "r") or die("404");
    while (!feof($h3624_3))
        echo fgetc($h3624_3);
    fclose($h3624_3);

    echo "<hr>";

    $h3624_4 = fopen("h3624.txt", "a") or die("404");
    for ($i = 0; $i < 2; $i++)
        fwrite($h3624_4, "3624 LKY\n");
    fclose($h3624_4);
    ?>
</body>
</html>
