<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FUNCTION</title>
</head>
<body>
    <?php 
        function teste($x) {
            $x += 2;
            echo "<p>O valor de X é $x</p>";

        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a<P>"

    ?>
</body>
</html>