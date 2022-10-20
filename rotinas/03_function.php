<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ROTINAS</title>
</head>
<body>
    <div>
        <?php
        function soma() {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for($i=0; $i<$t; $i++) {
                $s += $p[$i];
            } 
            return $s;   
        } 

        $r = soma(3,5,6,7,8,3,9);
        echo " A soma dos valores selecionados foi $r";
        ?>
    </div>
</body>
</html>