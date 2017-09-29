<?php
session_start();

if (isset($_SESSION['login_id'])) {
    printf("%s님 환영합니다<br>", $_SESSION['login_name']);
    echo "<a href='./logout.php'>로그아웃</a>";
} else {
    echo "Not login";
    echo "<a href='./login3624.html'>로그인</a>";
}
?>
