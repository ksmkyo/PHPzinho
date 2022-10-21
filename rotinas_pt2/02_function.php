<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FUNCTION</title>
</head>
<body>
    <?php
        include "funcoes.php"; //vamos pegar as funções de outro arquivo
        //include "funcoes.php";

        echo "<h1>Testando novas funções</h1>";
        ola();
        mostrarValor(4);

        //include: caso o arquivo tenha um erro, o include vai continuar o procedimento 
        //require: caso o arquivo tenha um erro, o require ele vai parar o procedimento 
        //include_once OU require_once: vai carregar apenas uma vez. Se você ja carregou, não precisa carregar mais.
    ?>
</body>
</html>

