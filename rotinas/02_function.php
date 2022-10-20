<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ROTINAS</title>
</head>
<body>
    <div>
        <?php 
            function soma ($a, $b) {
                $s = $a + $b;
                return $a + $b;
            }

            $x = 89;
            $y = 45;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual a $r";
        ?>
    </div>
    
</body>
</html>