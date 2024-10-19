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
                src: url('Fontes/OpenSans-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

            @font-face {
                font-family: 'Open Sans';
                src: url('Fontes/OpenSans-Bold.ttf') format('truetype');
                font-weight: bold;
                font-style: normal;
                font-display: swap;
            }

            /* -- Montserrat -- */
            @font-face {
                font-family: 'Montserrat';
                src: url('Fontes/Montserrat-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }


            /* -- -- -- -- Geral -- -- -- -- */
            /* -- -- Bloco -- -- */
            #bloco{
                background-color: #FFC985;
                padding: 15px 25px 24px 24px;
                width: 1690px;
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

            /* -- -- Link Apagar -- -- */
            .apagar{
                font-family: 'Open Sans';
                text-decoration: none;
                color: #d14f4f;
                font-weight: 500;
            }

            .apagar:hover{
                border-bottom: 1px solid #bd1717;
                color: #bd1717;
                padding-bottom: 1px;
            }

            /* -- -- Link Editar -- -- */
            .editar{
                font-family: 'Open Sans';
                text-decoration: none;
                color: #296AA7;
                font-weight: 500;
            }

            .editar:hover{
                border-bottom: 1px solid #296AA7;
                color: #296AA7;
                padding-bottom: 1px;
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
                <table>
                <tr id='listagem-colunas'>
                    <td> idCliente </td>
                    <td style='width: 256px; padding: 0px 0px 0px 35px'> Nome </td>
                    <td style='width: 294px; padding: 0px 0px 0px 35px'> Endereço </td>
                    <td style='width: 225px; padding: 0px 0px 0px 35px'> Pagamento </td>
                    <td style='width: 85px; padding: 0px 0px 0px 35px'> Avaliação </td>
                    <td style='width: 400px; padding: 0px 0px 0px 35px;'> Reclamação </td>          
                </tr>";

        while ($mostrar = mysqli_fetch_array($res)){
            echo "<tr id='listagem-items'>
                    <td style='text-align: center; padding: 0px 0px 20px 0px'>".$mostrar['idCliente']."</td>
                    <td style='padding: 0px 0px 20px 35px'>".$mostrar['nome']."</td>
                    <td style='padding: 0px 0px 20px 35px'>".$mostrar['endereco']."</td>
                    <td style='padding: 0px 0px 20px 35px'>".$mostrar['pagamento']."</td>
                    <td style='text-align: center; padding: 0px 0px 20px 35px;'>".$mostrar['avaliacao']."</td> 
                    <td style='padding: 0px 0px 20px 35px; text-aling: justify;'>".$mostrar['reclamacao']."</td> 
                    <td style='padding: 0px 0px 20px 35px;'> 
                        <a href='apagar.php?a=".$mostrar['idCliente']."' class='apagar'> Apagar </a>
                    </td>
                    <td style='padding: 0px 0px 20px 35px;'> 
                        <a href='alterar.php?a=".$mostrar['idCliente']."' class='editar'> Editar </a>
                    </td>";
        }

        echo " </tr>
            </table>
            </div>";
        ?>
    </body>
</html>