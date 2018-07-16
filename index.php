<?php session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php'
?>

		<!-- FORMULÁRIO DE CADASTRO -->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/create.php" method="post" class="col s12">
				<fieldset style="border: 1px #ddd solid; border-radius: 10px; padding: 15px" class="formulario">
					<legend><img src="imagens/avatar-01.jpg" alt="[imagem]" width="100" style="border-radius: 20px"></legend>
					<h5 class="light center">Cadastro de Alunos</h5>

					<?php 
						if(isset($_SESSION['msg'])) {

							echo $_SESSION['msg'];
							session_unset();
						}
					 ?>

					<!-- CAMPO NOME -->
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
						<label for="nome">Nome do Aluno</label>
					</div>

					<!-- CAMPO EMAIL -->
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" maxlength="50" required>
						<label for="email">Email do Aluno</label>
					</div>

					<!-- CAMPO TELEFONE -->
					<div class="input-field col s12">
						<i class="material-icons prefix">phone</i>
						<input type="tel" name="telefone" id="telefone" maxlength="15" required>
						<label for="telefone">Telefone do Aluno</label>
					</div>

					<!-- BOTÕES -->
					<div class="input-field col s12">
						<input type="submit" value="cadastrar" class="btn blue">
						<input type="reset" value="limpar" class="btn red">
					</div>
				</fieldset>
			</form>
		</div>

		<?php include_once 'includes/footer.inc.php' ?>