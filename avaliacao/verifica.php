<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Verificar </title>

        <style>
            /* -- -- -- -- Fontes -- -- -- -- */
            /* -- Montserrat -- */
            @font-face {
                font-family: 'Montserrat';
                src: url('../Fontes/Montserrat-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

            /* -- -- -- -- Body -- -- -- -- */
            body{
                margin: 0;
                padding: 0;
                height: 1000px;
                background-color:white;
            }

            ::selection {
                background: #ffca47;
            }


            .msg-erro{
                margin-top: 17%;
                margin-left: 41%;
                font-family: 'Montserrat';
                font-size: 16px;
                text-align: center;
                width: 330px;
            }

            #msg-sucesso{
                margin-top: 15%;
                margin-left: 40.2%;
                font-family: 'Montserrat';
                font-size: 16px;
                text-align: center;
                width: 351px;
            }
        </style>
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $pagamento = $_POST["pagamento"];
            $avaliacao = $_POST["avaliacao"];
            $reclamacao = $_POST["reclamacao"];
            $erro = 0;


            if(empty($nome) or strstr($nome, ' ')==false){
                echo "<div class='msg-erro'> Favor digitar seu nome corretamente. </div>"; $erro = 1;
            }

            if(empty($endereco) or strstr($endereco, ' ')==false){
                echo "<div class='msg-erro' style='width: 350px; margin-top: 10px; margin-left: 40.4%'> Favor digitar seu endereço corretamente. </div>"; $erro = 1;
            }

            if(empty($reclamacao)){
                echo "<div class='msg-erro' style='width: 300px; margin-top: 10px; margin-left: 42.3%;'> Favor entre com alguma reclamação. </div>"; $erro = 1;
            }


            if($erro == 0) {
                echo "<div id='msg-sucesso'>";
                echo "Todos dados foram digitados corretamente!<br>";
                echo "</div>";
                include "avaliacao.inc.php";
            }
        ?>
    </body>
</html>