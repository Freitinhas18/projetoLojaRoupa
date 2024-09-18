<?php
    require_once '../model/classConexao.php';
    include '../view/tableCliente.html';

    $nomeClienteC = addslashes($_POST['nomeCliente']);
    $cpfClienteC = addslashes($_POST['cpfCliente']);
    $telClienteC = addslashes($_POST['telCliente']);
    $emailClienteC = addslashes($_POST['emailCliente']);
    $numResidClienteC = addslashes($_POST['numResidCliente']);
    $complResidClienteC = addslashes($_POST['complResidCliente']);
    $obsResidClienteC = addslashes($_POST['obsResidCliente']);

    $clienteC = new conexao();
    $clienteC->insereCliente($nomeClienteC, $cpfClienteC, $telClienteC, $emailClienteC, $numResidClienteC, $complResidClienteC, $obsResidClienteC);

    echo"<br><br>";
    echo"<div> class='tableCliente'<h2>ENDEREÇO CADASTRADO</h2>.";
?>