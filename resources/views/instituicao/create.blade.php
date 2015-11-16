@extends('layouts.master')

@section('Content')
	<div class="container">

		<div class="row">
			<!-- Cadastro -->
			<div class="col-xs-5 col-xs-offset-4">
				<h1> Cadastro de Instituições </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<!--Inicio do Formulário-->
				<form class="form-horizontal" method="post">
					<!--Nome do Acadêmico-->
					<div class="form-group">
						<legend>Dados da Instituição de Ensino</legend>
						<label for="nomeinst" class="col-xs-2 control-label"><p class="text-left">Nome da Instuição de Ensino:</p></label>
						<div class="col-xs-10">
							<input type="text" class="form-control" name="nomeinst" placeholder="Ex.: Centro Universitário... / Universidade Federal..." />
						</div>
					</div>

					<!--Telefone -->
					<div class="form-group">
						<label for="emailinst" class="col-xs-2 control-label"><p class="text-left">E-mail:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="emailinst" placeholder="Ex.: email@outlook.com / email@gmail.com" />
						</div>

						<label for="telinst" class="col-xs-1">Telefone:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="telinst" placeholder="Ex.: (000)0000-0000" />
						</div>
					</div>

  					<!--Endereço-->
					<div class="form-group">
						<legend>Endereço</legend>
						<label for="ruainst" class="col-xs-2 control-label"><p class="text-left">Rua:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="ruainst" placeholder="Rua" />
						</div>
						<label for="ninst" class="col-xs-1 control-label">Número</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="ninst" placeholder="Número" />
						</div>
					</div>

					<div class="form-group">
						<label for="bairroinst" class="col-xs-2 control-label"><p class="text-left">Bairro:</p></label>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="bairroinst" placeholder="Bairro" />
						</div>
						<label for="cidadeinst" class="col-xs-1 control-label">Cidade:</label>
						<div class="col-xs-2">
							<input type="text" class="form-control" name="cidadeinst" placeholder="Cidade" />
						</div>
					</div>

					<!--Botão enviar-->
					<div class="form-group">
						<div class=" col-xs-offset-10 col-xs-2">
							<button type="submit" class="btn btn-default">Enviar Informações</button>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
	<?php 
		if (isset($_POST['nome']))
		{
			echo $_POST['nome'];
		}

	?>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>      
@endsection