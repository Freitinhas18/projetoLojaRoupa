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
        public function insereCliente(): void{}

        public function insereEndereco($cepEndC, $ruaEndC, $numeroEndC, $bairroEndC, $cidadeEndC, $ufEndC) {
            $insere = $this->pdo->prepare("insert into endereco(cepEndereco, numeroEndereco, tipoEndereco, ruaEndereco, cidadeEndereco, bairroEndereco, ufEndereco)
            values (:cepEnd, :numeroEnd, :tipoEnd, :ruaEnd, :cidadeEnd, :bairroEnd, :ufEnd)");
            $insere->bindValue(":cepEnd",$cepEndC);
            $insere->bindValue(":numeroEnd",$numeroEndC);
            $insere->bindValue(":ruaEnd",$ruaEndC);
            $insere->bindValue(":bairroEnd",$bairroEndC);
            $insere->bindValue(":cidadeEnd",$cidadeEndC);
            $insere->bindValue(":ufEnd",$ufEndC);
        }

        public function insereEstoque($loteEstqC, $dataEstqC, $quantidadeEstqC, $precoCustoC, $precoVendaC) {
            $insere = $this->pdo->prepare("insert into estoque(loteEstoque, dataEstoque, qtdEstoque, precoCusto, precoVenda)
            values (:loteEstq, :dataEstq, :qtdEstq, :precoCustoEstq, :precoVendaEstq)");
            $insere->bindValue(":loteEstq",$loteEstqC);
            $insere->bindValue(":dataEstq",$dataEstqC);
            $insere->bindValue(":qtdEstq",$quantidadeEstqC);
            $insere->bindValue(":precoCustoEstq",$precoCustoC);
            $insere->bindValue(":precoVendaEstq",$precoVendaC);
        }
        
    }

?>