<?php 
    require_once '../model/classConexao.php';
    include '../view/tableEndereco.html';
    
    $cepEndC = addslashes($_POST['cepEnd']);
    $ruaEndC = addslashes($_POST['ruaEnd']);
    $bairroEndC = addslashes($_POST['bairroEnd']);
    $cidadeEndC = addslashes($_POST['cidadeEnd']);
    $ufEndC = addslashes($_POST['ufEnd']);
    

    $enderecoC = new conexao();
    $enderecoC->insereEndereco($cepEndC, $ruaEndC, $bairroEndC, $cidadeEndC, $ufEndC);

    echo"<br><br>";
    echo"<div class='tableEndereco'><h2>ENDEREÇO CADASTRADO</h2>.";
?>