    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <a href="privado.php" style= "color: deeppink; font-size:20; margin-left: 100">Home</a>
	<a href="sobre.php" style="color: blueviolet; font-size:20">Sobre</a>
	<a href="historia.php" style="color: deepskyblue; font-size:20">História</a>
	<a href="agenda.php" style="color: lawngreen; font-size:20">Agenda</a>
	<a href="logout.php"style="color: darkorange; font-size:20">Logout</a></br></br>

	<div class="container">

	<h6><?php
	require('logado.php');
	echo "Olá! Seja bem vindo ".$_SESSION['usuario']['nome'];
	?><h6>
	
	Home
	</br>

 <style>
 .carousel-inner img
 {
  width: 400px;
  height: 500px;

 }
 </style>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./imagens/rosa.jpg" class="d-block w-100" alt="Rosa">
	  <div class="carousel-caption d-none d-md-block">
        <h5>A lei da mente é implacável</h5>
        <p>O que você pensa, você cria</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./imagens/gato.jpg" class="d-block w-100" alt="Gato">
	  <div class="carousel-caption d-none d-md-block">
        <h5>O que você sente</h5>
        <p>Voce atrai</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./imagens/colorido.jpg" class="d-block w-100" alt="Colorido">
	  <div class="carousel-caption d-none d-md-block">
        <h5>O que voce acredita</h5>
        <p>Torna-se realidade</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
 </div>
 </div>
 