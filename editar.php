<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php'
?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Edição de Registros</h5><hr>
	</div>
</div>

<?php
	include_once 'banco_de_dados/conexao.php'; 

	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$_SESSION['id'] = $id;
	$querySelect = $link->query("select * from tb_alunos where id='$id'");

	while($registros = $querySelect->fetch_assoc()) {

		$id = $registros['id'];
		$nome = $registros['nome'];
		$email = $registros['email'];
		$telefone = $registros['telefone'];
	}
 ?>

 <!-- FORMULÁRIO DE CADASTRO -->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/update.php" method="post" class="col s12">
				<fieldset style="border: 1px #ddd solid; border-radius: 10px; padding: 15px" class="formulario">
					<legend><img src="imagens/avatar-01.jpg" alt="[imagem]" width="100" style="border-radius: 20px"></legend>
					<h5 class="light center">Dados do Aluno</h5>

					<!-- CAMPO NOME -->
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
						<label for="nome">Nome do Aluno</label>
					</div>

					<!-- CAMPO EMAIL -->
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required>
						<label for="email">Email do Aluno</label>
					</div>

					<!-- CAMPO TELEFONE -->
					<div class="input-field col s12">
						<i class="material-icons prefix">phone</i>
						<input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required>
						<label for="telefone">Telefone do Aluno</label>
					</div>

					<!-- BOTÕES -->
					<div class="input-field col s12">
						<input type="submit" value="alterar" class="btn blue">
						<a href="consultas.php" class="btn red">cancelar</a>
					</div>
				</fieldset>
			</form>
		</div>


<?php include_once 'includes/footer.inc.php' ?>