<?php 
    require_once'../model/classConexao.php';
    include '../view/tableTamanho.html';
    
    $siglaTamanhoC = addslashes($_POST['sigla']);

    $TamanhoC = new conexao();
    $TamanhoC->insereTamanho($siglaTamanhoC);

    echo"<br><br>";
    echo"<div class='tableTamanho'><h2>TAMANHO CADASTRADO</h2>.";
?>