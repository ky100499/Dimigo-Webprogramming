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
    CREATE TABLE students (
        id int(6) unsigned AUTO_INCREMENT PRIMARY KEY,
        snum varchar(5) NOT NULL,
        sname varchar(30) NOT NULL,
        pw varchar(64) NOT NULL,
        dept varchar(20) NOT NULL,
        gender varchar(4) NOT NULL,
        reg_date TIMESTAMP
    )
";
if (mysqli_query($conn, $query)) {
    echo "Table student created";
} else {
    echo "Error while creating table: " . $conn->error;
}
$conn->close();
?>
