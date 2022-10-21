<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WORDWRAP</title>
</head>
<body>
    <?php
        $t = "Aqui temos um teto gigante criado pelo PHP e vai mostrar o funcionamento da funcao wordwrap";
        $r = wordwrap($t, 20, "<br/>"); // usado para quebra de linhas 
        echo $r; 
    ?>
</body>
</html>