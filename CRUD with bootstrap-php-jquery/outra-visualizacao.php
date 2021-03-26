<!DOCTYPE html>
<html lang="pt-br">
<head>
 	<link rel="stylesheet" href="sweetAlert/dist/sweetalert2.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
<?php

    include("conexao.php"); 
    $sql = "SELECT * FROM comentarios";
    $result = mysqli_query($conn, $sql);
?>
<div class="container">
    <div class="row text-center mt-5">
        <div class="col-12 alert alert-primary">
            <h3 class="h3 display-1 text-dark">OUTRA VISUALIZACAO</h1>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-6 col-lg-3 mt-2 text-center">
            <div class="card border-3 bg-warning">
                <h5 class="h5 ">O <?php echo $row['nome'];  ?> entrou na ultima página e comentou</h5>
                <hr/>
                <cite>
                    <h6><?php echo $row['comentario'];  ?> </h6>   
                </cite>  
                <div class="row bg-dark mx-3 p-2">
                    <div class="col-md-6 col-12">
                        <button class="btn btn-danger" onclick="delete_confirmation2(<?php echo $row['id']; ?>)">
                            Excluir
                        </button>
                    </div>
                    <div class="col-md-6 col-12">
                        <button class="btn btn-success">
                            Opcao
                        </button>
                    </div>
                </div>     
            </div>
        </div>
        <?php } ?>
        <div class="col-md-6 col-lg-3 mt-2 text-center">
            <div class="card border-3 bg-warning h-100">
                <button class="btn btn-outline-info mt-5" onclick="AdicionarComentario2()" >
                    Novo Comentario
                </button>  
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

