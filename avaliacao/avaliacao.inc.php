<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Registar Reclamação </title>
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


            #box{
                margin-top: 18px;
                margin-left: 41%;
                font-family: 'Montserrat';
                font-size: 16px;
                text-align: center;
                width: 330px;
            }

            /* -- -- Botão de Listagem -- -- */
            #btnlist{
                font-family: 'Montserrat';
                border: none;
                padding: 7px 7px 7px 7px;
                background-color: #59A95D;
                font-size: 15px;
                border-radius: 3px;
                color: white;
                margin-top: 13px;
                display: inline-block;
            }

            #btnlist:active{
                background-color: #509C54;
            }
        </style>
    </head>
    <body>
        <?php
            include '../conecta_mysql.inc.php';

            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $pagamento = $_POST["pagamento"];
            $avaliacao = $_POST["avaliacao"];
            $reclamacao = $_POST["reclamacao"];

            $sql = "INSERT INTO cliente VALUES";
            $sql .= "('NULL', '$nome', '$endereco', '$pagamento', '$avaliacao', '$reclamacao')";

            if ($conexao->query($sql) === TRUE){
                echo "<div id='box'>";
                echo "Reclamação armazenada com sucesso!";
                echo "<a href='../listar.inc.php'> <buttom id='btnlist'> Listagem de Avaliações </buttom> </a>";   
                echo "</div>";
                
             } else{
                    echo "</div>";
                    echo "Error: ".$sql."<br>".$conexao->error;
                
                $conexao->close();
             }
        ?>
    </body>
</html>