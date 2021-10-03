<?php
	require_once "src/models/Student.php";
	$studentInfo = new Student;
?>

<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/png" href="public/assets/miscellaneous/favicon.png">
	<link rel="stylesheet" href="public/styles/style.css">

	<meta name="description" content="Website para listar e cadastrar alunos.">

	<title>Listar alunos</title>
</head>

<body>
	<header id="page-header">
		<?php
			echo "<h1>", count($studentInfo->read()), " Alunos cadastrados</h1>";

			if (count($studentInfo->read()) == 0) {
				include_once "src/components/StudentsNotFound/index.php";
			}
		?>

		<a href="register-student.php">
			<button id="register-student-redirect">
				<p>Cadastrar aluno</p>
				<img src="public/assets/icons/person-add.svg">
			</button>
		</a>
	</header>

	<section id="students">
		<?php
			foreach ($studentInfo->read() as $student) {
				echo '
					<div class="student-card" onclick="window.location = window.location.origin + \'/see-student.php?id=', $student['id'],'\'">
						<div class="profile-pic">
							<img src="public/assets/icons/person.svg" alt="Foto de perfil">
						</div>
						<header class="card-header"></header>
						<div class="dados">
							<h2>', $student["nome"], '</h2>
							<div class="student-info">
								<span>
									<img class="icon" src="public/assets/icons/book.svg" alt="">
									<p><strong>Curso:</strong> ', $student["curso"], '</p>
								</span>
								<span>
									<img class="icon" src="public/assets/icons/school.svg" alt="">
									<p><strong>Situação:</strong> ', $student["situacao"], '</p>
								</span>
								<span>
									<img class="icon" src="public/assets/icons/calendar.svg" alt="">
									<p><strong>Ingresso:</strong> ', $student["ano_semestre_ingresso"], '</p>
								</span>
								<span>
									<img class="icon" src="public/assets/icons/mail.svg" alt="">
									<p><strong>E-mail:</strong> ', $student["email"], '</p>
								</span>
							</div>
						</div>
					</div>
				';
			}
		?>
	</section>
</body>

</html>