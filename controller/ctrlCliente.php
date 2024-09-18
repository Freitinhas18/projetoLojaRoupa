<?php
    require_once '../model/classConexao.php';
    include '../view/tableCliente.html';

    $nomeClienteC = addslashes($_POST['nomeCliente']);
    $cpfClienteC = addslashes($_POST['cpfCliente']);
    $telClienteC = addslashes($_POST['telCliente']);
    $emailClienteC = addslashes($_POST['emailCliente']);

    $clienteC = new conexao();
    $clienteC->insereCliente($nomeClienteC, $cpfClienteC, $telClienteC, $emailClienteC);

    echo"<br><br>";
    echo"<div> class='tableCliente'<h2>CLIENTE CADASTRADO</h2>.";
?>