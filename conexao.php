<?php
//ini_set('default_charset', 'UTF-8');
//CONEXAO AO SERVIDOR
$conexao=mysqli_connect("localhost","root","");// se fosse uwamp seria  ("localhost","root","root");
//$link = mysql_connect('localhost', 'user', 'password');
//mysqli_set_charset('utf8',$conexão);
mysqli_query($conexao,"SET NAMES 'utf8'"); 
mysqli_query($conexao,'SET character_set_connection=utf8'); 
mysqli_query($conexao,'SET character_set_client=utf8'); 
mysqli_query($conexao,'SET character_set_results=utf8'); 
if($conexao != false)//if($conexao == true)  ou ainda if($conexao)
{
  // echo "CONEXAO OK";
}
else
{
 echo "<h5>FALHA AO CONECTAR</h5><br>";
 exit; // TERMINA O PROGRAMA
}
 
$banco_de_dados=mysqli_select_db($conexao,"agenda2");// use agenda2 , abra o banco de dados agenda2


//CONEXAO AO BANDO DE DADOS
if($banco_de_dados)//if($banco_de_dados==true)   if($banco_de_dados!=false)
{
 echo "<h5><span style='background-color: deeppink;' class='badge rounded-pill'>CONECTADO</span></h5> <br>";
}
else
{
  echo "<h5>FALHA AO CONECTAR AO BANCO DE DADOS</h5><br>";
  exit;
}

?>
  
  
  
  

