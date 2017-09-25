<?php
define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

$dbinfo = json_decode(file_get_contents(ROOTDIR . "/dbinfo.json"));
$conn = mysqli_connect(
    $dbinfo->host,
    $dbinfo->user,
    $dbinfo->password,
    $dbinfo->dbname
) or die("Cannot connect database");

$s_num = $_POST['h01'];
$s_name = $_POST['h02'];
$pwd = $_POST['h03'];
$dept = $_POST['h04'];
$gender = $_POST['h05'];

$query = "
    INSERT INTO students
    (snum, sname, pw, dept, gender)
    VALUES (
        '$s_num', '$s_name', '$pwd', '$dept', '$gender'
    );
";
if (mysqli_query($conn, $query)) {
    header("Location: ./h3624_select.php");
} else {
    echo "Error while inserting data: " . $conn->error;
}
$conn->close();
?>
