<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Listagem de Alunos </title>

        <style>
            /* -- -- -- -- Fontes -- -- -- -- */
           /* -- Open Sans -- */
           @font-face {
                font-family: 'Open Sans';
                src: url('../Fontes/OpenSans-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'Open Sans';
                src: url('../Fontes/OpenSans-Bold.ttf') format('truetype');
                font-weight: bold;
                font-style: normal;
                font-display: swap;
            }

            /* -- Montserrat -- */
            @font-face {
                font-family: 'Montserrat';
                src: url('../Fontes/Montserrat-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }


            /* -- -- -- -- Geral -- -- -- -- */
            /* -- -- Body -- --*/
            body{
                text-align: center;
            }

            /* -- -- Bloco -- -- */
            #bloco{
                background-color: #FFC985;
                padding: 8px 38px 10px 38px;
                display: inline-block;
            }

            /* -- -- Título -- -- */
            #title{
                font-family: 'Open Sans';
                font-size: 22px;
            }

            /* -- -- Listagem Campos -- -- */
            #listagem-colunas{
                font-family: 'Open Sans';
                font-size: 17px;
                font-weight: bold;
            }

            #listagem-items{
                font-family: 'Montserrat';
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <?php
        $base = mysqli_connect('localhost', 'root', 'usbw', 'tryelions') or die("erro de conexão");
        $regra1 = "SELECT * FROM cliente order by idCliente";

        $res = mysqli_query($base, $regra1);

        echo " <div id='bloco'>
            <h2 id='title'> Registro de Reclamações </h2>
                <table style='display: inline-block'>
                <tr id='listagem-colunas'>
                    <td style='width: 500px;'> Reclamação </td>          
                </tr>";

        while ($mostrar = mysqli_fetch_array($res)){
            echo "<tr id='listagem-items'>
                    <td style='padding: 0px 0px 18px 0px; text-aling: justify;'>".$mostrar['reclamacao']."</td>";
        }

        echo " </tr>
            </table>
            </div>";
        ?>
    </body>
</html>