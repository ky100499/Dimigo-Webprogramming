<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">

    <style>
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    function test_input($data) {
        return htmlspecialchars(trim($data));
    }

    $nameErr = $emailErr = $genderErr = $commentErr = "";
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'POST':
            if (empty($_POST['name'])) {
                $nameErr = "Name is required";
            }
            if (empty($_POST['email'])) {
                $emailErr = "E-mail is required";
            } else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
                $emailErr = "Invalid email";
            }
            if (empty($_POST['gender'])) {
                $genderErr = "Gender is required";
            }
            if (empty($_POST['comment'])) {
                $commentErr = "Comment is required";
            }

            $name = test_input($_POST['name']);
            $email = test_input($_POST['email']);
            $gender = test_input($_POST['gender']);
            $comment = test_input($_POST['comment']);

            break;
        default:
            break;
    }
    ?>

    <form name="h1" method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div>
            <label>
                Name:
                <input type="text" name="name" value="<?= $name ?>">
                <span class="error"><?= $nameErr ?></span>
            </label>
        </div>
        <div>
            <label>
                E-mail:
                <input type="text" name="email" value="<?= $email ?>">
                <span class="error"><?= $emailErr ?></span>
            </label>
        </div>
        <div>
            Gender:
            <label><input type="radio" name="gender" value="male" <?= $gender == "male" ? "checked" : "" ?>> 남</label>
            <label><input type="radio" name="gender" value="female" <?= $gender == "female" ? "checked" : "" ?>> 여</label>
            <span class="error"><?= $genderErr ?></span>
        </div>
        <div>
            <label>
                Comment:
                <textarea name="comment" cols="40" rows="5" style="resize: none"><?= $comment ?></textarea>
                <span class="error"><?= $commentErr ?></span>
            </label>
        </div>
        <div>
            <input type="submit" value="전송">
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"
        && empty($nameErr)
        && empty($emailErr)
        && empty($genderErr)
        && empty($commentErr)) {

        echo "** Info **<hr>";
        echo "$name <hr>";
        echo "$email <hr>";
        echo "$gender <hr>";
        echo "$comment <hr>";
    }
    ?>
</body>
</html>
