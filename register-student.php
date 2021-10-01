<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include "src/controller/StudentController.php";
?>

<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/png" href="../../public/assets/miscellaneous/favicon.png">
	<link rel="stylesheet" href="../../public/styles/style.css">
    <link rel="stylesheet" href="../../public/styles/register-student.css">

	<meta name="description" content="Website para listar e cadastrar alunos.">

	<title>Cadastrar aluno</title>
</head>

<body>
    <section>
        <div id="form-box">
            <h1 id="form-title">Cadastrar aluno</h1>
            <form action="" method="POST">
                <div class="input-field">
                    <p>Nome</p>
                    <input type="text" name="nome" placeholder="Nome Sobrenome" maxlength="100" required>
                </div>
                <div class="input-field">
                    <p>E-mail</p>
                    <input type="email" name="email" placeholder="aluno@email.com" maxlength="100" required>
                </div>
                <div class="input-field">
                    <p>Curso</p>
                    <input type="text" name="curso" placeholder="Informática" maxlength="100" required>
                </div>
                <div class="input-field">
                    <p>Situação</p>
                    <input type="text" name="situacao" placeholder="Cursando" maxlength="100" required>
                </div>
                <div class="input-field">
                    <p>Ano e semestre de ingresso</p>
                    <input type="text" name="ano_semestre_ingresso" placeholder="2019.1" maxlength="100" required>
                </div>
                <hr>
                <input id="submit-button" type="submit" name="submit" value="Cadastrar">
            </form>
        </div>
    </section>
</body>

</html>