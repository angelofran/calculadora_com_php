<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Formulários em php</title>
</head>
<body>
    <div class="container" style="display: flex; justify-content: center;margin-top: 200px;">

        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $op = $_POST["op"] ?? 1;
                $old = $_POST["idade"] ?? 2023;
                $idade = date("Y") - $old;
                if($op == 1){
                    echo "Resultado: $idade."; 
                }
                else
                {
                    $idade =  $idade - 1;
                    echo "Resulta: $idade.";
                }
            }
            else {
                echo "Method error ❌";
            }   
            // $_REQUEST junção de $_GET e $_POST   
        ?>
    </div>
    
    <!--<p><a href="javascript:history.go(-1)">Voltar</a></p>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

