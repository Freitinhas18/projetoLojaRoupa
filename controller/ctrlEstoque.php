<?php 
    require_once '../model/classConexao.php';
    include '../view/tableEstoque.html';
    
    $loteEstqC = addslashes($_POST['lote']);
    $dataEstqC = addslashes($_POST['dataEstq']);
    $quantidadeEstqC = addslashes($_POST['quantidadeEstq']);
    $precoCustoC = addslashes($_POST['precoCusto']);
    $precoVendaC = addslashes($_POST['precoVenda']);

    $estoqueC = new conexao();
    $estoqueC->insereEstoque($loteEstqC, $dataEstqC, $quantidadeEstqC, $precoCustoC, $precoVendaC);

    echo"<br><br>";
    echo"<div class='tableEstoque'><h2>ESTOQUE CADASTRADO</h2>.";
?>