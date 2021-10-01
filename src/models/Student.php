<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    include_once "src/connection/Database.php";

    class Student {
        public function create($aluno) {
            $db = new Database;
            $connection = $db->getConnection();
            
            $sql = "INSERT INTO aluno (nome, email, curso, situacao, ano_semestre_ingresso) VALUES (:nome, :email, :curso, :situacao, :ano_semestre_ingresso)";
            
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(":nome", $aluno["nome"]);
            $stmt->bindParam(":email", $aluno["email"]);
            $stmt->bindParam(":curso", $aluno["curso"]);
            $stmt->bindParam(":situacao", $aluno["situacao"]);
            $stmt->bindParam(":ano_semestre_ingresso", $aluno["ano_semestre_ingresso"]);
            $stmt->execute();
        }

        public function read() {
            $db = new Database;
            $connection = $db->getConnection();
            
            $sql = "SELECT * FROM aluno";
            
            $stmt = $connection->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $query = $stmt->fetchAll();

            return $query;
        }
    }
?>