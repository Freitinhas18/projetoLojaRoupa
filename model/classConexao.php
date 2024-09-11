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
            return $this->pdo;
        }
    }

?>