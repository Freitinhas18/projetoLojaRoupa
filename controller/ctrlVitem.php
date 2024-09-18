<?php 
    require_once'../model/classConexao.php';
    include '../view/tableVitem.html';
    
    $qtdVitemC = addslashes($_POST['qtdadevItem']);
    $precoVitemC = addslashes($_POST['precovItem']);

    $VitemC = new conexao();
    $VitemC->insereVenda($qtdVitemC, $precoVitemC);

    echo"<br><br>";
    echo"<div> class='tableVitem'<h2>VENDA ITEM CADASTRADO</h2>.";
?>