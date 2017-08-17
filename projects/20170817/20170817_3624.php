<!DOCTYPE html>
<html>
<head>
    <title>3624 이광연</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    class Std {
        function Std() {
            $this->name = "이광연";
        }
    }

    # Type
    $a = 5;         // int
    $b = 2.5;       // float
    $c = true;      // bool
    $d = null;      // null
    $e = array();   // array
    $f = new Std(); // object

    for ($i = 0; $i < 10; $i++) $e[] = $i+1;

    var_dump($a, $b, $c, $d, $e, $f);

    echo "<hr>";
    echo $f->name;
    ?>

    echo "PHP"; <hr>

    <?php
    # Operator
    echo $a ** $a;      // Exponential
    echo "<hr>$a ** $a<hr>";

    echo $b += $b;      // $b = $b + $b;
    echo "<hr>";

    echo $e[2], $e[5], $e[1], $e[3];
    ?>
</body>
</html>
