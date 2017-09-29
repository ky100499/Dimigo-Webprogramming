<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    function test_input($data) {
        return htmlspecialchars(trim($data));
    }
    ?>

    <form name="h1" method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div>
            <label>
                Name:
                <input type="text" name="name">
            </label>
        </div>
        <div>
            <label>
                E-mail:
                <input type="email" name="email">
            </label>
        </div>
        <div>
            Gender:
            <label><input type="radio" name="gender" value="male"> 남</label>
            <label><input type="radio" name="gender" value="female"> 여</label>
        </div>
        <div>
            <label>
                Comment:
                <textarea name="comment" cols="40" rows="5" style="resize: none"></textarea>
            </label>
        </div>
        <div>
            <input type="submit" value="전송">
        </div>
    </form>

    <?php
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            $name = test_input($_POST['name']);
            $email = test_input($_POST['email']);
            $gender = test_input($_POST['gender']);
            $comment = test_input($_POST['comment']);

            echo "** Info **<hr>";
            echo "$name <hr>";
            echo "$email <hr>";
            echo "$gender <hr>";
            echo "$comment <hr>";
            break;
        default:
            break;
    }
    ?>
</body>
</html>
