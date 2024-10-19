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

            .space{
                margin: 0;
            }

            input:-webkit-autofill {
                box-shadow: 0 0 0 30px white inset;
            }


            /* -- -- -- -- Box -- -- -- -- */
            #box{
                margin-left: 35%;
                margin-top: 5.5%;
                background-color: #FFC377;
                width: 460px;
                text-align: right;
                user-select: none;
                padding: 12px 22px 24px 0px;
                border-radius: 7px;
            }

            /* -- -- Label -- -- */
            .lblInfo{
                font-family: 'Montserrat';
                display: inline-block;
                font-size: 15px;
            }

            /* -- -- Campos de Texto p/ escrever -- -- */
            .txtcampo{
                padding: 6px 12px 6px 9px;
                outline: none;
                width: 300px;
                margin-left: 10px;
                font-family: 'Montserrat';
                font-size: 14px;
                border: 1px solid #B0B0B0;
            }

            /* -- -- Reclamação -- -- */
            #reclamacao{
                outline: none;
                padding: 12px 7px 17px 16px;
                font-family: 'Montserrat';
                margin-left: 25px;
                width: 410px;
                border: 1px solid #B0B0B0;
                resize: none;
            }

            /* -- -- Botão Atualização -- --*/
            #btnatt{
                margin-top: 36px;
                margin-left: 18px;
                width: 180px;
                padding: 8px 7px 8px 7px; 
                background-color: #DE7900;
                font-size: 15px;
                font-family: 'Montserrat';
                text-decoration: none;
                color: white;
                border: none;
                letter-spacing: 0.5px;
                border-radius: 6px;
                user-select: none;
            }

            #btnatt:active{
                background-color: #CD5400;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();
            $_SESSION ['idCliente'] = $_GET['a'];

            $base = mysqli_connect('localhost', 'root', 'usbw', 'tryelions') or die("Erro de conexão");
            $regra = "SELECT * FROM cliente WHERE idCliente = '". $_SESSION ["idCliente"] ."'";

            $res = mysqli_query ($base, $regra);
            $mostrar = mysqli_fetch_array ($res);

       


        ?>


        <form method="POST" action="alterar1.php">

            <div id="box">
                <div style="text-align: left;">
                    <h1 style="font-family: 'Montserrat'; font-size: 22px; margin-left: 26%; margin-bottom: 24px;"> Alteração de Dados </h1>
                </div>
          
                <p class='lblInfo'> Nome: </p>
                <input class="txtcampo" type="text" size="35" maxlength="35" name="nome" value="<?PHP echo $mostrar['nome'];?>" readonly="true"/>

                <p class="space"></p>

                <p class='lblInfo'> Endereço: </p>
                <input class="txtcampo" type="text" maxlength="35" name="endereco" value="<?PHP echo $mostrar['endereco'];?>">

                <p class="space"></p>

                <p class='lblInfo'> Pagamento: </p>
                <?php
                    $selected = $mostrar['pagamento'];

                    $opcoes = array('Cartão de Débito', 'Cartão de Crédito', 'Cartão de Crédito Parcelado');

                    echo "<select name='pagamento' class='txtcampo' style='width: 323px; padding: 6px 0px 6px 7px;'>";
                     foreach($opcoes as $opcao){
                         if ($selected == $opcao){
                             echo "<option selected='selected' value='$opcao'> $opcao </option>";
                         } else{
                             echo "<option value ='$opcao'> $opcao </option>";
                         }
                     }
                    echo "</select>";
                ?>

                <p class="space"></p>

                <div style="text-align: left;"> 
                    <p class='lblInfo' style="margin-left: 47px"> Avaliação: </p>
                    <?php
                        $selected2 = $mostrar['avaliacao'];

                        $opcoes2 = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');

                        echo "<select name='avaliacao' class='txtcampo' style='width: 50px; padding: 4px 0px 4px 7px;'>";
                        foreach($opcoes2 as $opcao2){
                            if ($selected2 == $opcao2){
                                echo "<option selected='selected' value='$opcao2'> $opcao2 </option>";
                            } else{
                                echo "<option value ='$opcao2'> $opcao2 </option>";
                            }
                        }
                        echo "</select>";
                    ?>
                </div>   

                <p class="space" style="height: 10px"></p>

                <div style="text-align: left;">
                    <p class='lblInfo' style="margin-left: 25px"> Reclamação: </p>
                    <textarea name="reclamacao" rows="8" maxlength="1000" placeholder="Faça uma reclamação..." id="reclamacao"> <?PHP echo $mostrar['reclamacao'];?> </textarea>
                </div>

                <div style="text-align: center;">
                    <input id="btnatt" type="submit" value="Atualizar Cadastro" name="enviar">
                </div>
        
            </div>
   
        </form>
    </body>
</html>