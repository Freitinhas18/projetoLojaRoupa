<?php 
    require_once '../model/classConexao.php';
    include '../view/tableEndereco.html';
    
    $cepEndC = addslashes($_POST['cepEnd']);
    $ruaEndC = addslashes($_POST['ruaEnd']);
    $numeroEndC = addslashes($_POST['numeroEnd']);
    $bairroEndC = addslashes($_POST['bairroEnd']);
    $cidadeEndC = addslashes($_POST['cidadeEnd']);
    $ufEndC = addslashes($_POST['ufEnd']);
    $complResidClienteC = addslashes($_POST['complResidCliente']);
    $obsResidClienteC = addslashes($_POST['obsResidCliente']);

    $enderecoC = new conexao();
    $enderecoC->insereEndereco($cepEndC, $ruaEndC, $numeroEndC, $bairroEndC, $cidadeEndC, $ufEndC, $complResidClienteC, $obsResidClienteC);

    echo"<br><br>";
    echo"<div class='tableEndereco'> <h2>ENDEREÇO CADASTRADO</h2>.";
?>