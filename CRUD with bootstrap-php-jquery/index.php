<!--
	Criado por: Leonardo Galbiere Arruda
	---20/04/2020---
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
 	<link rel="stylesheet" href="sweetAlert/dist/sweetalert2.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
<div><!--Conteudo da pagina, incluindo textos e a div da tabela-->
	<div class="container">
		<br />
		<h3 class="h3 mb-2 text-gray-800">CRUD (Create, Read, Update, Delete)</h3> 
		<br />
		<hr>
		<br />
		<div class="row">
			<div class="col-md-9"></div>
				<div class="col-md-2">
					<button class="btn btn-primary" onclick="alert_error("")">Novo comentário</button>
				</div>
			<div class="col-md-1"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12" style="border-style: groove;" >
				<br>
				<div id="table"></div>
				<br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center mt-5">
			<a href="outra-visualizacao.php">
				<button class="btn btn-info" >Outro tipo de VIsualização da dados</button>
			</a>
			</div>
		</div>
	</div>	

	<!-- MODAL DO CADASTRO -->
	<div class="modal fade" id="modalInsert" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<h2 class="h2 mb-2 text-gray-800">Novo comentário</h2>
						<hr>
						
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<label for="basic-url">Nome</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" id="nome" placeholder="Insira seu nome aqui" required>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>

						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<label for="basic-url">Comentário</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" id="comentario" placeholder="Insira seu comentário aqui">
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</form>
					<p>&nbsp;</p>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 text-right" style="">
							<button class="btn btn-danger" onclick="fechaModal();">Cancelar</button>
							<button class="btn btn-primary" onclick="cadastrar();">Cadastrar</button>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL PARA UPDATE -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<form>
						<h2 class="h2 mb-2 text-gray-800">Alterar comentário</h2>
						<hr>
						
						<input type="hidden" id="idUpdate" >

						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<label for="basic-url">Nome</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" id="nomeUpdate" placeholder="Insira seu nome aqui" required>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>

						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<label for="basic-url">Comentário</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" id="comentarioUpdate" placeholder="Insira seu comentário aqui">
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
					</form>
					<p>&nbsp;</p>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10 text-right" style="">
							<button class="btn btn-danger" onclick="fechaModal();">Cancelar</button>
							<button class="btn btn-primary" onclick="update();">Alterar comentário</button>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="sweetAlert/dist/sweetalert2.all.min.js"></script>
<script src="sweetAlert/dist/sweetalert2.min.js"></script>
<script src="jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="script.js"></script>

<!-- Core plugin JavaScript-->

