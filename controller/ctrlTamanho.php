<?php 
    require_once'../model/classConexao.php';
    include '../view/tableTamanho.html';
    
    $siglaTamanhoC = addslashes($_POST['sigla']);

    $TamanhoC = new conexao();
    $TamanhoC->inserecTamanhoC($siglaTamanhoC);

    echo"<br><br>";
    echo"<div> class='tableTamanho'<h2>ENDEREÇO CADASTRADO</h2>.";
?>