<?php 
   // $conexao = new PDO("mysql:dbname=dbLojaRoupa;host:localhost","root","");
    Class conexao {
        private $pdo;
        private $host = "localhost";
        private $dbname = "dbLojaRoupa";
        private $user = "root";
        private $senha = "";

        public function __construct(){
            try{
                $this->pdo = new PDO(dsn: "mysql:dbname=".$this->dbname.";host=".$this->host,username: $this->user,password: $this->senha);
            }
            catch(PDOException $e){

                echo"ERRO DE CONEXÃO NO PDO ".$e->getMessage();
                exit();
            }
            catch(Exception $e){
                echo"ERRO não passou da conexão: ".$e->getMessage();
                exit();
            }
        }
        public function insereCliente($nomeClienteC, $cpfClienteC, $telClienteC, $emailClienteC){
            $insere = $this->pdo->prepare("insert into cliente(nomeCliente, cpfCliente, telCliente, emailCliente)
            values (:nomeCliente, :cpfCliente, :telCliente, :emailCliente)");
            $insere->bindValue(":nomeCliente",$nomeClienteC);
            $insere->bindValue(":cpfCliente",$cpfClienteC);
            $insere->bindValue(":telCliente",$telClienteC);
            $insere->bindValue(":emailCliente",$emailClienteC);
            $insere->execute();
        }

        public function insereEndereco($cepEndC, $ruaEndC, $numeroEndC, $bairroEndC, $cidadeEndC, $ufEndC, $complResidClienteC, $obsResidClienteC) {
            $insere = $this->pdo->prepare("insert into endereco(cepEndereco, numeroEndereco, tipoEndereco, ruaEndereco, cidadeEndereco, bairroEndereco, ufEndereco, complResidCliente, obsResidCliente)
            values (:cepEnd, :numeroEnd, :tipoEnd, :ruaEnd, :cidadeEnd, :bairroEnd, :ufEnd, :complResidCliente, :obsResidCliente)");
            $insere->bindValue(":cepEnd",$cepEndC);
            $insere->bindValue(":ruaEnd",$ruaEndC);
            $insere->bindValue(":numeroEnd",$numeroEndC);
            $insere->bindValue(":bairroEnd",$bairroEndC);
            $insere->bindValue(":cidadeEnd",$cidadeEndC);
            $insere->bindValue(":ufEnd",$ufEndC);
            $insere->bindValue(":complResidCliente",$complResidClienteC);
            $insere->bindValue(":obsResidCliente",$obsResidClienteC);
            $insere->execute();
        }

        public function insereEstoque($loteEstqC, $dataEstqC, $quantidadeEstqC, $precoCustoC, $precoVendaC) {
            $insere = $this->pdo->prepare("insert into estoque(loteEstoque, dataEstoque, qtdEstoque, precoCusto, precoVenda)
            values (:loteEstq, :dataEstq, :qtdEstq, :precoCustoEstq, :precoVendaEstq)");
            $insere->bindValue(":loteEstq",$loteEstqC);
            $insere->bindValue(":dataEstq",$dataEstqC);
            $insere->bindValue(":qtdEstq",$quantidadeEstqC);
            $insere->bindValue(":precoCustoEstq",$precoCustoC);
            $insere->bindValue(":precoVendaEstq",$precoVendaC);
            $insere->execute();
        }
    }

?>