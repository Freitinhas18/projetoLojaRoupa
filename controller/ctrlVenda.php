<?php 
    require_once'../model/classConexao.php';
    include '../view/tableVenda.html';
    
    $nfVendaC = addslashes($_POST['nfVenda']);
    $dataVendaC = addslashes($_POST['dataVenda']);

    $vendaC = new conexao();
    $vendaC->insereVenda($nfVendaC, $dataVendaC);

    echo"<br><br>";
    echo"<div> class='tableVenda'<h2>VENDA CADASTRADO</h2>.";
?>