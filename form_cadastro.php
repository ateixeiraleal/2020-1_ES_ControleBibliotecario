<?php
	$rg = $_POST['cRG'];
	$nome = $_POST['cNome'];
	$email = $_POST['cEmail'];
	$nascimento = $_POST['cNascimento'];
	$estado = $_POST['cEstado'];
	$admissao = $_POST['cAdmissao'];
	$telefone = $_POST['cTelefone'];
	$departamento = $_POST['cDepartamento'];
	$salario = $_POST['cSalario'];
	$curso = $_POST['cCurso'];
	$veiculo = $_POST['cVeiculo'];
	$placa = $_POST['cPlaca'];
	$qdelivros = $_POST['cQdelivros'];
	$corfundo = $_POST['cCorfundo'];
	$foto = $_POST['cFoto'];
	$qdesapatos = $_POST['cQdesapatos'];

	echo 
		"<html>
			<boby>
				<h1>Dados do Cliente</h1>
				<p>
					<strong>RG:</strong> ".$rg." <br>
					<strong>Nome:</strong> ".$nome." <br>
					<strong>E-mail:</strong> ".$email." <br>
					<strong>Nascimento:</strong> ".$nascimento." <br>
					<strong>Estado:</strong> ".$estado." <br> 
					<strong>Admissão:</strong> ".$admissao." <br>
					<strong>Telefone:</strong> ".$telefone." <br>
					<strong>Departamento:</strong> ".$departamento." <br>
					<strong>Salário:</strong> ".$salario." <br>
					<strong>Curso:</strong> ".$curso." <br>
					<strong>Veículo:</strong> ".$veiculo." <br>
					<strong>Placa:</strong> ".$placa." <br>
					<strong>Quantidade de livros:</strong> ".$qdelivros." <br>
					<strong>Cor de fundo:</strong> ".$corfundo." <br>
					<strong>Foto:</strong> ".$foto." <br>
					<strong>Quantidade de sapatos:</strong> ".$qdesapatos."
				</p>
			</body>
		</html>" ;
?>