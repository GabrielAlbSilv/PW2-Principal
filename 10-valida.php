<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão - Implementando os formulários - Valida</title>

    <?php 
    
    session_start();

    if ($_SESSION["nome"] != "master"){

        session_destroy();
        header("location:10-decimo.php");
    }
    
    ?>

</head>
<body>
    
    <b>Página autorizada.</b>
</body>
</html>