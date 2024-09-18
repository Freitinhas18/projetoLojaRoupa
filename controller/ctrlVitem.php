<?php 
    require_once'../model/classConexao.php';
    include '../view/tableVitem.html';
    
    $nfvItemC = addslashes($_POST['nfvItem']);
    $qtdItemVendC = addslashes($_POST['qtdItemVend']);
    $idEstoquevItemC = addslashes($_POST['idEstoquevItem']);
    $precovItemC = addslashes($_POST['precovItem']);

    $VitemC = new conexao();
    $VitemC->insereVenda($nfvItemC, $qtdItemVendC, $idEstoquevItemC, $precovItemC);

    echo"<br><br>";
    echo"<div> class='tableVitem'<h2>ENDEREÇO CADASTRADO</h2>.";
?>