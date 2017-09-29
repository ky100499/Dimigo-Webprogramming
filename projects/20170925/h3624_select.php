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
    foreach ($result as $row) {
        printf("%d. %s %s %s %s %s <a href='./h3624_delete.php?id=%s'>삭제</a> <a href='./h3624_update.php?id=%s'>수정</a> <br>", $row['id'], $row['snum'], $row['sname'], $row['dept'], $row['gender'], $row['reg_date'], $row['id'], $row['id']);
    }
} else {
    echo "No result";
}
$conn->close();
?>
<hr>
<a href="./h3624_insert.html">입력</a>
