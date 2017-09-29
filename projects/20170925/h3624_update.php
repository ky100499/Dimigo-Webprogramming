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
    SELECT *
    FROM students
    WHERE id=%s
", $_GET['id']);

$result = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>

<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    if (count($result)) {
        ?>
        <fieldset>
            <legend>3624</legend>
            <form method="post" action="./h3624_update2.php">
                <label>
                    학번:
                    <input type="text" name="h01" value="<?= $result['snum'] ?>">
                </label>
                <label>
                    이름:
                    <input type="text" name="h02" value="<?= $result['sname'] ?>">
                </label>
                <label>
                    비밀번호:
                    <input type="password" name="h03">
                </label>
                <select size="1" name="h04">
                    <option value="HD" <?= $result['dept'] == "HD" ? "selected" : "" ?>>해킹방어과</option>
                    <option value="WP" <?= $result['dept'] == "WP" ? "selected" : "" ?>>웹프로그래밍과</option>
                </select>
                <label>
                    Male:
                    <input type="radio" name="h05" value="M" <?= $result['gender'] == "M" ? "checked" : "" ?>>
                </label>
                <label>
                    Female:
                    <input type="radio" name="h05" value="F" <?= $result['gender'] == "F" ? "checked" : "" ?>>
                </label>
                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                <input type="submit" value="전송">
            </form>
        </fieldset>
        <?
    } else {
        echo "No result";
    }
    $conn->close();
    ?>
    <hr>
    <a href="./h3624_select.php">돌아가기</a>
</body>
</html>
