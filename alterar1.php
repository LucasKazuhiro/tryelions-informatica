<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Alterar </title>

        <style>
            /* -- -- -- -- Fontes -- -- -- -- */
            /* -- Montserrat -- */
            @font-face {
                font-family: 'Montserrat';
                src: url('Fontes/Montserrat-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

            /* -- -- -- -- Geral -- -- -- -- */
            /* -- -- Mensagem de Edit -- -- */
            #editdados{
                width: 1713px;
                background-color: #FFAA3E;
                padding: 15px 0px 15px 18px;
                border-left: solid 8px #CB770D;
                font-family: 'Montserrat';
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();
            $_SESSION ["idCliente"];

            echo " <div id='editdados'> Atualizando o cadastro... </div>";

            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $pagamento = $_POST["pagamento"];
            $avaliacao = $_POST["avaliacao"];
            $reclamacao = $_POST["reclamacao"];


            $base = mysqli_connect('localhost', 'root', '', 'tryelions') or die("Erro de conexão");
            $regra = "UPDATE cliente SET nome='$nome', endereco='$endereco', pagamento='$pagamento', avaliacao='$avaliacao', reclamacao='$reclamacao' WHERE idCliente='". $_SESSION ["idCliente"] ."'";
            $res = mysqli_query($base, $regra) or die ("A alteração de dados falhou!!");

            include 'listar.inc.php';
        ?> 
    </body>
</html>