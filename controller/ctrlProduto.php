<?php 
    require_once'../model/classConexao.php';
    include '../view/tableProduto.html';
    
    $corProdutoC = addslashes($_POST['corProduto']);
    $nomeProdutoC = addslashes($_POST['nomeProduto']);
    $modeloProdutoC = addslashes($_POST['modeloProduto']);
    $tecidoProdutoC = addslashes($_POST['tecidoProduto']);
    $marcaProdutoC = addslashes($_POST['marcaProduto']);

    $produtoC = new conexao();
    $produtoC->insereProduto($corProdutoC, $nomeProdutoC, $modeloProdutoC, $tecidoProdutoC, $marcaProdutoC);

    echo"<br><br>";
    echo"<div> class='tableProduto'<h2>PRODUTO CADASTRADO</h2>.";
?>