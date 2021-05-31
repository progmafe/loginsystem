<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);          
?>

<?php



if(isset($_GET["id_contato"])) 
{
	$id_contato=$_GET["id_contato"];
}
elseif(isset($_POST["id_contato"]))
{
	$id_contato=$_POST["id_contato"];
}	
else
echo "ERRO!";

$conex=mysqli_connect("localhost","root","",'agenda2');

	$query_select_contato_id="SELECT * FROM tb_contatos WHERE id_contatos=$id_contato";
	$sql_select_contato_id=mysqli_query($conex , $query_select_contato_id);
	

	if($sql_select_contato_id == false)
	{
		
		echo "FALHA AO CONSULTAR CONTATO FAVOR ENTRAR EM CONTATO COM O ADMINISTRADOR";
		exit;
	}
	
	while($array_select_contato_id=mysqli_fetch_array($sql_select_contato_id))
	{
		$id_contato=$array_select_contato_id["id_contatos"];
		$nome=$array_select_contato_id["nome"];
		$sobrenome=$array_select_contato_id["sobrenome"];
		$email=$array_select_contato_id["email"];
		$tel=$array_select_contato_id["tel"];
		$cel=$array_select_contato_id["cel"];	
	}
	if(isset($_POST['submit_editar']))
	{
	     $id_contato=$_POST['id_contato'];
	     $nome=$_POST['nome'];
	     $sobrenome=$_POST['sobrenome'];
	     $email=$_POST['email'];	     
		 $tel=$_POST['tel'];
		 $cel=$_POST['cel'];		 
		 
		 
$query_update="UPDATE tb_contatos SET nome='$nome',sobrenome='$sobrenome',email='$email',tel='$tel',cel='$cel' WHERE id_contatos=$id_contato";
		 
		 $sql_update=mysqli_query($conex, $query_update);
		 if($sql_update == true)
		 {
		   echo"<script type=\"text/javascript\">alert('DADOS EDITADOS COM SUCESSO');</script>";
		 header("Location:index.php");
 
		 }
		 else
         echo"<script type=\"text/javascript\">alert('FALHA AO EDITAR ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";	 		 		 
	}
if(isset($_POST['submit_deletar']))
	{
			
  
	
  $id_contato=$_GET["id_contato"];
  //$query="DELETE FROM tb_contatos WHERE id_contato={$_GET['id_contato']}";
  $query="DELETE FROM tb_contatos WHERE id_contatos=$id_contato";
  $sql=mysqli_query($conex, $query);
  
  if($sql)
  {
	  header("Location:index.php");
  }
  else
  {
	echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";    
	exit;
  }
 }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar</title>
</head>

<body>
<h1>LISTAR CONTATOS<br />
  <br />
</h1>
<ul>
	<li><a href="index.php" onclick="return confirm('Deseja listar contatos?');">Listar Contatos</a></li>
</ul>


<form id="form_agenda" name="form_agenda" method="post" action="">
  <p>
    <input type="hidden" name="id_contato" value="<?php echo $id_contato;?>"/>
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php print($nome);?>"/>
    <br />
	<label for="sobrenome">Sobrenome:</label>
  	<input type="text" name="sobrenome" id="sobrenome" value="<?=$sobrenome;?>"/>
    <br />
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo $email?>"/>
    <br />
    <label for="telefone">Telefone</label>
    <input type="text" name="tel" id="telefone" value="<?php print($tel)?>" />
    <label for="celular">Celular</label>
    <input type="text" name="cel" id="celular" value="<?=$cel?>"/>
    <br />
    <input type="submit" name="submit_editar" id="editar" value="Gravar alterações" />
     <!-- <input type="submit" name="submit_deletar" id="deletar" value="Deletar" onclick="return true;" /> -->
	 <input type="submit" name="submit_deletar" id="deletar" value="Deletar" onclick="return confirm('Confirma a exclusão ?');" />

<br />
  </p>
</form>

</body>
</html>
