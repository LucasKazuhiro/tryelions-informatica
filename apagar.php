<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Apagar </title>

        <style>
        /* -- -- -- -- Geral -- -- -- -- */
        /* -- Montserrat -- */
        @font-face {
                font-family: 'Montserrat';
                src: url('Fontes/Montserrat-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

        /* -- -- Mensagem de Delete -- -- */
            #apagardados{
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
            $_SESSION ["idCliente"] = $_GET['a'];

            $base = mysqli_connect('localhost', 'root', 'usbw', 'tryelions');
            $apagar = "DELETE FROM cliente WHERE idCliente ='" . $_SESSION ["idCliente"] . "'";
            mysqli_query($base, $apagar);

            echo "<div id='apagardados'> Registro excluído com sucesso! </div>";
            include 'listar.inc.php';
        ?>
    </body>
</html>