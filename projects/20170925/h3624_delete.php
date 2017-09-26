<?php
define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

$dbinfo = json_decode(file_get_contents(ROOTDIR . "/dbinfo.json"));
$conn = mysqli_connect(
    $dbinfo->host,
    $dbinfo->user,
    $dbinfo->password,
    $dbinfo->dbname
) or die("Cannot connect database");

$query = sprintf("
    DELETE FROM students
    WHERE id=%s
", $_GET['id']);

if (mysqli_query($conn, $query)) {
    header("Location: ./h3624_select.php");
} else {
    echo "Error while deleting data: " . $conn->error;
}
$conn->close();
?>
