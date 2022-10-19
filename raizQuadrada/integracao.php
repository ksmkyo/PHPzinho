

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href ="integracao.html"/>
    <link rel="stylesheet" href = "integracao.css"/>
    <meta charset="UTF-8">
<title>PHPzinho</title>
</head>
<body>
    
<div>

<form method="get" action="integracao.php">
    <p>Coloque o numero através da URL (ex: "?v=4" OU através do input :) </p>
    valor: <input type = "number" name = "v" />
    <input type ="submit" value="calcular raiz"/>
</form>            

<?php
    $valor = $_GET["v"];
    $raiz = sqrt($valor);
    echo "O valor enviado foi : $valor";
    echo "<br/> A raiz quadrada de $valor é : $raiz";
?>

</div>
        
</body>
</html>