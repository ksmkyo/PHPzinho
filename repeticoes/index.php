<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href = "index.html"/>
    <title>SWITCH</title>
</head>
<body>

<div>
    <form method="get" action="index.php">
        Numero:<input type="number" name="num"/><br/>
        <fieldset><legend>Operação</legend>
        <input type="radio" name="oper" id="dobro" value="1"/>
        <label for="dobro">DOBRO</label>

        <input type="radio" name="oper" id="cubo" value="2"/>
        <label for="cubo">CUBO</label>

        <input type="radio" name="oper" id="raiz" value="3"/>
        <label for="raiz">RAIZ</label>
    </fieldset>
    
    <input type="submit" value="CALCULAR"/>
    </form>

    <?php 
        $n = isset($_GET["num"])?$_GET["num"]:0;
        $o = isset($_GET["oper"])?$_GET["oper"]:1;

        switch ($o){
            case 1:
                $r = $n *2;
                break;
            case 2:
                $r = $n ^ 3;
                break;
            case 3:
                $r = sqrt($n);
            }
            echo "O RESULTADO DA OPERAÇÃO SOLICITADA FOI $r"
    
    ?>
</div>
</body>
</html>