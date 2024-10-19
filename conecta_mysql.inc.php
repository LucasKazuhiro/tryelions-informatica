<?php
    header("content-type text/html charset=utf-8");
    $conexao=mysqli_connect('localhost', 'root', '', 'tryelions');
    mysqli_set_charset($conexao, 'UTF8');
?>