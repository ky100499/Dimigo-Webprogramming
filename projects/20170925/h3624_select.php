<?php
define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

$dbinfo = json_decode(file_get_contents(ROOTDIR . "/dbinfo.json"));
$conn = mysqli_connect(
    $dbinfo->host,
    $dbinfo->user,
    $dbinfo->password,
    $dbinfo->dbname
) or die("Cannot connect database");

$query = "
    SELECT *
    FROM students
";
$result = [];
$resultSet = mysqli_query($conn, $query);
while ($temp = mysqli_fetch_assoc($resultSet)) {
    $result[] = $temp;
}
if (count($result)) {
    echo "<pre>";
    var_dump($result);
    echo "</pre>";
} else {
    echo "No result";
}
$conn->close();
?>
<hr>
<a href="./h3624_insert.html">입력</a>
