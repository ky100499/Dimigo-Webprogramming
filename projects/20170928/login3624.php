<?php
session_start();

define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

$dbinfo = json_decode(file_get_contents(ROOTDIR . "/dbinfo.json"));
$conn = mysqli_connect(
    $dbinfo->host,
    $dbinfo->user,
    $dbinfo->password,
    $dbinfo->dbname
) or die("Cannot connect database");

$query = sprintf(
    "SELECT *
    FROM students
    WHERE snum='%s' AND sname='%s' AND pw=PASSWORD('%s');",
    $_POST['h01'], $_POST['h02'], $_POST['h03']
);
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "Error: " . $conn->error;
} else if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_row($result);
    $_SESSION['login_id'] = $row[1];
    $_SESSION['login_name'] = $row[2];
} else {
    echo "Invalid information";
}
$conn->close();

header("Location: ./login3624_check.php");
?>
