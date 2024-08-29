<?php
    $conexao = new PDO("mysql:dbname=pw3_ap01;host:localhost","root","");

    // $conexao -> query("insert into cadastro (nome, email, telefone, cpf)
                        // values ('Maria Aparecida', 'maria.br@gmail.com', '119678767', '56708945610')");

   /* $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $tel = addslashes($_POST['telefone']);
    $cpf = addslashes($_POST['cpf']);
    $insere = $conexao -> prepare("insert into cadastro (nome, email, telefone, cpf)
    values (:n,:e,:t,:c)");
    $insere -> bindValue(":n", $nome);
    $insere -> bindValue(":e", $email);
    $insere -> bindValue(":t", $tel);
    $insere -> bindValue(":c", $cpf);
    $insere -> execute();
    */
    //alteração
    $nome = "Pedro  freitas";
    $email = "pedro@email";
    $tel = "11952610052";
    $cpf = "14069287809";
    $id = "3";


    $alteracao = $conexao -> prepare ("update cadastro set nome = :n,
    email = :e, telefone = :t, cpf = :c where idcadastro = :i");
    $alteracao ->bindValue(":n", $nome);
    $alteracao->bindValue(":e", $email);
    $alteracao->bindValue(":t", $tel);
    $alteracao->bindValue(":c", $cpf);
    $alteracao->bindValue(":i", $id);
    $alteracao->execute();
    echo "cadastro realizado query";

?>