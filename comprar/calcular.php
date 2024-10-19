<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Comprar </title>
        <style>
            /* -- -- -- -- Fontes -- -- -- -- */
            /* -- Roboto Condensed -- */
            @font-face {
                font-family: 'Roboto Condensed';
                src: url('../Fontes/RobotoCondensed-Bold.ttf') format('truetype');
                font-weight: bold;
                font-style: normal;
                font-display: swap;
            }  

            @font-face {
                font-family: 'Roboto Condensed';
                src: url('../Fontes/RobotoCondensed-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
                font-display: swap;
            }

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
                src: url('../Fontes/OpenSans-Light.ttf') format('truetype');
                font-weight: 300;
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
                src: url('../Fontes/Montserrat-Light.ttf') format('truetype');
                font-weight: 300;
                font-style: normal;
                font-display: swap;
            }

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
                background-color:white;
            }

            ::selection {
                background: #ffca47;
            }


            /* -- -- Botão Reclamação -- --*/
            #btn-voltar{
                margin-top: 15px;
                width: 110px;
                padding: 8px 7px 8px 7px; 
                background-color: #DE7900;
                font-size: 16px;
                font-family: 'Montserrat';
                text-decoration: none;
                color: white;
                border: none;
                letter-spacing: 0.5px;
                border-radius: 6px;
                user-select: none;
                margin-left: 48%;
            }

            #btn-voltar:active{
                background-color: #CD5400;
            }

            /* -- -- Opções -- --*/
            #zero{
                margin-top: 19%;
                margin-left: 36%;
                font-family: 'Montserrat';
                font-size: 16px;
                background-color: #F8D593;
                padding: 7px 9px 7px 8px;
                border-radius: 3px;
                width: 413px;
            }

            #um{
                margin-top: 19%;
                margin-left: 36%;
                font-family: 'Montserrat';
                font-size: 16px;
                background-color: #F8D593;
                padding: 7px 9px 7px 8px;
                border-radius: 3px;
                width: 420px;
                text-align: center;
            }

            #dois{
                margin-top: 19%;
                margin-left: 36%;
                font-family: 'Montserrat';
                font-size: 16px;
                background-color: #F8D593;
                padding: 7px 9px 7px 8px;
                border-radius: 3px;
                width: 420px;
                text-align: center;
            }

            #tres{
                margin-top: 19%;
                margin-left: 34%;
                font-family: 'Montserrat';
                font-size: 16px;
                background-color: #F8D593;
                padding: 7px 9px 7px 8px;
                border-radius: 3px;
                width: 484px;
                text-align: center;
            }


        </style>
    </head>
    <body>
        <?php
            $escolha = $_POST["pagamento-escolha"];

            if ($escolha == "-1"){
                echo "<div id='zero'> Por favor, escolha uma forma de pagamento válido! </div>";
                echo "<a href='../Produtos/gabinete/gabinete.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "-2"){
                echo "<div id='zero'> Por favor, escolha uma forma de pagamento válido! </div>";
                echo "<a href='../Produtos/monitor/monitor.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "-3"){
                echo "<div id='zero'> Por favor, escolha uma forma de pagamento válido! </div>";
                echo "<a href='../Produtos/teclado/teclado.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "-4"){
                echo "<div id='zero'> Por favor, escolha uma forma de pagamento válido! </div>";
                echo "<a href='../Produtos/capa/capa.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "-5"){
                echo "<div id='zero'> Por favor, escolha uma forma de pagamento válido! </div>";
                echo "<a href='../Produtos/pelicula/pelicula.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "1"){
                echo "<div id='um'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ 337,99";
                echo "</div>"; 
                echo "<a href='../Produtos/gabinete/gabinete.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "2"){
                $porcentagem = 337.99 * 0.01;
                $valor = 337.99 + $porcentagem;
                echo "<div id='dois'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ " . number_format($valor, 2, ',', '.');
                echo "</div>";
                echo "<a href='../Produtos/gabinete/gabinete.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "3"){
                $porcentagem = 337.99 * 0.04;
                $valor = 337.99 + $porcentagem;
                $parcelas = $valor / 12;
                echo "<div id='tres'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "<spam style='display: inline-block'> O valor do produto ficou R$ " . number_format($valor, 2, ',', '.') . " em 12 parcelas de R$ " . number_format($parcelas, 2, ',', '.') . "</spam>";
                echo "</div>";
                echo "<a href='../Produtos/gabinete/gabinete.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if($escolha == "4"){
                echo "<div id='um'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ 1.459,00";
                echo "</div>"; 
                echo "<a href='../Produtos/monitor/monitor.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if($escolha == "5"){
                $porcentagem = 1459 * 0.01;
                $valor = 1459 + $porcentagem;
                echo "<div id='dois'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ " . number_format($valor, 2, ',', '.');
                echo "</div>";
                echo "<a href='../Produtos/monitor/monitor.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "6"){
                $porcentagem = 1459 * 0.04;
                $valor = 1459 + $porcentagem;
                $parcelas = $valor / 10;
                echo "<div id='tres'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "<spam style='display: inline-block'> O valor do produto ficou R$ " . number_format($valor, 2, ',', '.') . " em 10 parcelas de R$ " . number_format($parcelas, 2, ',', '.') . "</spam>";
                echo "</div>";
                echo "<a href='../Produtos/monitor/monitor.html'> <button id='btn-voltar'> Voltar </button> </a>";

            }  else if($escolha == "7"){
                echo "<div id='um'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ 199,90";
                echo "</div>"; 
                echo "<a href='../Produtos/teclado/teclado.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if($escolha == "8"){
                $porcentagem = 199.90 * 0.01;
                $valor = 199.90 + $porcentagem;
                echo "<div id='dois'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ " . number_format($valor, 2, ',', '.');
                echo "</div>";
                echo "<a href='../Produtos/teclado/teclado.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "9"){
                $porcentagem = 199.90 * 0.04;
                $valor = 199.90 + $porcentagem;
                $parcelas = $valor / 11;
                echo "<div id='tres' style='width: 495px'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "<spam style='display: inline-block'> O valor do produto ficou R$ " . number_format($valor, 2, ',', '.') . " em 11 parcelas de R$ " . number_format($parcelas, 2, ',', '.') . "</spam>";
                echo "</div>";
                echo "<a href='../Produtos/teclado/teclado.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if($escolha == "10"){
                echo "<div id='um'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ 11,99";
                echo "</div>"; 
                echo "<a href='../Produtos/capa/capa.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if($escolha == "11"){
                $porcentagem = 11.99 * 0.01;
                $valor = 11.99 + $porcentagem;
                echo "<div id='dois'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ " . number_format($valor, 2, ',', '.');
                echo "</div>";
                echo "<a href='../Produtos/capa/capa.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "12"){
                $porcentagem = 11.99 * 0.04;
                $valor = 11.99 + $porcentagem;
                $parcelas = $valor / 2;
                echo "<div id='tres'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "<spam style='display: inline-block'> O valor do produto ficou R$ " . number_format($valor, 2, ',', '.') . " em 2 parcelas de R$ " . number_format($parcelas, 2, ',', '.') . "</spam>";
                echo "</div>";
                echo "<a href='../Produtos/capa/capa.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if($escolha == "13"){
                echo "<div id='um'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ 40,70";
                echo "</div>"; 
                echo "<a href='../Produtos/pelicula/pelicula.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if($escolha == "14"){
                $porcentagem = 40.70 * 0.01;
                $valor = 40.70 + $porcentagem;
                echo "<div id='dois'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "O valor do produto ficou R$ " . number_format($valor, 2, ',', '.');
                echo "</div>";
                echo "<a href='../Produtos/pelicula/pelicula.html'> <button id='btn-voltar'> Voltar </button> </a>";

            } else if ($escolha == "15"){
                $porcentagem = 40.70 * 0.04;
                $valor = 40.70 + $porcentagem;
                $parcelas = $valor / 3;
                echo "<div id='tres'>";
                echo "<spam style='margin-bottom: 10px; display: inline-block'> Muito Obrigado por efetuar a compra em nossa loja! </spam>";
                echo "<spam style='display: inline-block'> O valor do produto ficou R$ " . number_format($valor, 2, ',', '.') . " em 3 parcelas de R$ " . number_format($parcelas, 2, ',', '.') . "</spam>";
                echo "</div>";
                echo "<a href='../Produtos/pelicula/pelicula.html'> <button id='btn-voltar'> Voltar </button> </a>";

            }
        ?>
    </body>
</html>