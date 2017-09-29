<?php
define("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

$dbinfo = json_decode(file_get_contents(ROOTDIR . "/dbinfo.json"));
$conn = mysqli_connect(
    $dbinfo->host,
    $dbinfo->user,
    $dbinfo->password,
    $dbinfo->dbname
) or die("Cannot connect database");

$id = $_POST['id'];
$s_num = $_POST['h01'];
$s_name = $_POST['h02'];
$pwd = $_POST['h03'];
$dept = $_POST['h04'];
$gender = $_POST['h05'];

$query = "
    UPDATE students
    SET snum='$s_num', sname='$s_name', pw=PASSWORD('$pwd'), dept='$dept', gender='$gender'
    WHERE id=$id;
";
if (mysqli_query($conn, $query)) {
    header("Location: ./h3624_select.php");
} else {
    echo "Error while inserting data: " . $conn->error;
}
$conn->close();
?>
