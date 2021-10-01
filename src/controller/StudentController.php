<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (isset($_POST["submit"])) {
        require_once "src/models/Student.php";
        $student = new Student;
        
        $studentInfo = array();
        $studentInfo["nome"] = $_POST["nome"];
        $studentInfo["email"] = $_POST["email"];
        $studentInfo["curso"] = $_POST["curso"];
        $studentInfo["situacao"] = $_POST["situacao"];
        $studentInfo["ano_semestre_ingresso"] = $_POST["ano_semestre_ingresso"];
        
        $student->create($studentInfo);
        
        header("Location: index.php");
    }
?>