<?php
$str = "KOREA DIGITAL MEDIA HIGH SCHOOL";

echo strlen($str);
echo "<hr>";

echo strrev($str);
echo "<hr>";

echo str_word_count($str);
echo "<hr>";

echo substr($str, 3, 5);
echo "<hr>";

$str1 = "php";
$str2 = "php";
$str3 = "PHP";

echo strcmp($str2, $str3);
if (strcmp($str2, $str3)) {
    echo "3624";
}

echo "<p style='border-top: 2px solid red'>3624 이광연</p>";
?>
