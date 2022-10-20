<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ROTINAS</title>
</head>
<body>
    <div>
        <?php 
            function soma ($a, $b){
                $s = $a + $b;
                echo "<p>A soma de $a + $b vale $s</p>";
            }
            
            soma(19, 45);
            soma(43, 56);
            soma(73, 96);
            soma(42, 58);
        ?>
    </div>
</body>
</html>