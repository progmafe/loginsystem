    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<a href="privado.php">Home</a>
	<a href="sobre.php">Sobre</a>
	<a href="historia.php">História</a>
	<a href="agenda.php">Agenda</a>
	<a href="logout.php">Logout</a></br></br>
	
	
	<h4><?php
	require('logado.php');
	echo "Olá, ".$_SESSION['usuario']['nome'];?><h4></br>

	<h4>Sobre</br></br><h4>
	<h6>Me chamo Maria Fernanda, tenho 24 anos e sou estudante de Desenvolvimento de Sistemas na ETEC Fernando Prestes de Sorocba (SP). 
	Possuo inglês avançado, curso de Photoshop do SENAC e curso de Programação Web que estou realizando na Udemy.
    Linguagens que utilizo no momento C# | JavaScript | PHP
    Eu comecei na área da programação recentemente com o desejo de melhorar minhas habilidades tecnológicas e profissionais mas
	mais ainda com o desejo de evoluir em questões de maturidade, organização e determinação. Eu me vejo como uma pessoa de enorme potencial e acredito que a programação entrou na minha vida exatamente para isso melhorar minha tomada de decisão e foco. Desde a primeira vez que vi programadores preocupados e ansiosos com os erros, procurando constantemente como resolve-los e o alivio e felicidade ao conseguir, percebi que estava destinada a isso. Essa paixão que vi neles me cativou e despertou em mim o mesmo sentimento; o sentimento de ser capaz e de ser útil. Despertou em mim o sentimento de determinação. Acredito que todos tem a capacidade de programar mas o essencial para isso é o amor pela programação e o amor pelo que se faz. Por isso, mesmo iniciante, sei que estou aqui para somar e muito! Atualmente estou buscando minha primeira oportunidade e para isso tenho dedicado meu tempo a cursos voltados para desenvolvimento e projetos práticos para aplicar o que tenho estudado. ←
    Fracasso é uma possibilidade. Se as coisas não estão fracassando, você não está inovando o suficiente. (Elon Musk)<h6>
  