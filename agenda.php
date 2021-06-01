<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);          
?>

 

<?php
//$logado="false";
 // file_put_contents("sec.in", $logado);


$conex=mysqli_connect("localhost","root","",'agenda2');
$query_select_contatos="SELECT * FROM tb_contatos";
$sql_select_contatos=mysqli_query($conex,$query_select_contatos);

if($sql_select_contatos == false)
	{
	echo "FALHA AO CONSULTAR A TABELA";
	exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Agenda</title>
<style type="text/css">
.listarbig 
	   {
		width:788px;
		height:200px;

		}
 #celula1 {
  width: 100px;
  padding:10px;
  background-color:#FFFFFF;
 
	}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


</head>

<body>
<div class="container">

    <h5><a href="privado.php" style= "color: deeppink; font-size:20; margin-left: 100">Home</a>
	<a href="sobre.php" style="color: blueviolet; font-size:20">Sobre</a>
	<a href="historia.php" style="color: deepskyblue; font-size:20">História</a>
	<a href="agenda.php" style="color: lawngreen; font-size:20">Agenda</a>
	<a href="logout.php"style="color: darkorange; font-size:20">Logout</a></br></br><h5>

<?php
require_once('conexao.php');
?>

<h2>AGENDA</h2>

<ul>
	<li><a href="inserir_contato.php" style="color:deeppink">Inserir Contato</a></li>
</ul>
<div class="listarbig">
<table class="width="5" border="1" cellspacing="0" cellpadding="0">
  <tr>
    
    <th id="celula1">Nome:</th>
    <th id="celula1">Sobrenome:</th>
    <th id="celula1">Email:</th>
    <th id="celula1">Telefone:</th>
    <th id="celula1">Celular:</th>
    <th id="celula1"colspan="2">Ações</th>
 
    </tr>
<?php  
if(mysqli_num_rows($sql_select_contatos) > 0)
{
   while($array_select_contatos=mysqli_fetch_array($sql_select_contatos))
	{
		$id_contato=$array_select_contatos["id_contatos"];
		//$nome=utf8_encode($array_select_contatos["nome"]);
		//$sobrenome=utf8_encode($array_select_contatos["sobrenome"]);
		$nome=$array_select_contatos["nome"];
		$sobrenome=$array_select_contatos["sobrenome"];
		$email=$array_select_contatos["email"];
		$tel=$array_select_contatos["tel"];
		$cel=$array_select_contatos["cel"];		

 echo
 " <tr>
    <td>$nome</td>
    <td>$sobrenome</td>
    <td>$email</td>
    <td>$tel</td>
    <td>$cel</td>
	<td><a href=\"./editar_contato.php?id_contato=$id_contato\"><button type='button' class='btn btn-outline-dark'>Editar</button></a></td>
    <td><a href=\"./deletar_contato.php?id_contato=$id_contato\"><button type='button' class='btn btn-outline-dark'>Deletar</button></a></td>
  </tr>
  ";
	}
}
?>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>
</html>
