<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


<?php
error_reporting(0);
ini_set(“display_errors”, 0 );           
?>

<?php
require_once('conexao.php');
try{
if(isset($_POST["inserir"])) 
{
	$nome=$_POST["nome"];
	$sobrenome=$_POST["sobrenome"];
	$email=$_POST["email"];
	$telefone=$_POST["telefone"];
	$celular=$_POST["celular"];
	
	$query_inserir_contato="INSERT INTO tb_contatos (nome,sobrenome,email,tel,cel) VALUES ('$nome','$sobrenome','$email','$telefone','$celular')";
  $conex=mysqli_connect("localhost","root","",'agenda2');
	$sql_inserir_contato=mysqli_query($conex, $query_inserir_contato);
	
	if($sql_inserir_contato)
	echo "<H3>CONTATO CADASTRADO COM SUCESSO</H3> <BR>";
	else
	echo "<H3>FALHA AO CADASTRAR O CONTATO</H3> <BR>";	


}
}catch(Exception $e){

   echo $e;

}
?>

<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="utf-8"/> 
<title>Agenda</title>
</head>

<title>Inserir dados na agenda</title>
<style type="text/css">
 
   .txtarea {
	background-color: #87CEFF;
    height: 20px;
    width: 300px;
	
	
}

   .selecionar {
   background-color: #87CEFF;
    height: 20px;
    width: 220px;
		
}
</style>
</head>

<body>
<h2>INSERIR CONTATO</h2>
<ul>
	<li><a href="agenda.php">Listar Contatos</a></li>
</ul>


<form id="form_agenda" name="form_agenda" method="post" action="">
  <p>
    <label for="nome">Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="nome" id="nome" placeholder="Digite o Nome " required   class="txtarea " />
    <br />
	<label for="sobrenome">Sobrenome:</label>
  	<input type="text" name="sobrenome" id="sobrenome" placeholder="Digite o sobrenome " required="required" class="txtarea" />
    <br />
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Coloque e-mail válido"required="required"class="txtarea"/>
    <br />
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone"  placeholder="Digite o Telefone " />
    <label for="celular">Celular</label>
    <input type="text" name="celular" id="celular"  placeholder="Digite o Celular "  />
    <br />
    <input type="submit" name="inserir" id="inserir" value="Inserir" />
<br />
  </p>
</form>



</body>
</html>