<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
        $op = $_POST["op"] ?? 1;
        $old = $_POST["idade"] ?? 2023;
        $idade = date("Y") - $old;
        if($op == 1){
            echo "A sua idade é $idade."; 
        }
        else
        {
            $idade =  $idade - 1;
            echo "A sua idade é $idade.";
        }
        
        // $_REQUEST junção de $_GET e $_POST
        
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>

</body>
</html>

