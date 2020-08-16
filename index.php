<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>AventuriPlanet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="56.52">
<nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">
      <img src="" alt="">
      <span>Aventuri Planet</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-center">
      <li class="nav-item  active">
        <a class="nav-link " href="#">
          INICIO
        </a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GENERALES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CLASES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Abejitas Laboriosas</a>
          <a class="dropdown-item" href="#">Rayitos de Sol</a>
          <a class="dropdown-item" href="#">Constructores</a>
          <a class="dropdown-item" href="#">Manos Ayudadoras</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ESPECIALIDADES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item  active">
        <a class="nav-link " href="#">
          CONTÁCTANOS
        </a>
      </li>
      <button id="btn-tienda" type="button" class="btn btn-danger">Aventuri-Tienda</button>
    </ul>
  </div>
</nav>
<!--main-->
<main id="main">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-pause="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/fondos/hawaii.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/fondos/hawaii2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="img/fondos/hawaii3.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="overlay"><!--esto es para poner texto encima del slide-->
		  	<div class="container">
		  		<div class="row align-items-center">
		  			<div class="col-md-6 offset-md-6 text-md-right text-center">
                      <h1>UN</h1>
                      <h1>MUNDO</h1>
                      <h1>LLENO DE IDEAS</h1>
		  			</div>
		  		</div>
              </div>
        </div>
    </div>
</main>
<!--/main-->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 bg-primary text-center p-5">
                <h1>AVENTURI PLANET</h1>
                <br>
                <div class="text-justify">
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam aspernatur est voluptate quo, eveniet hic atque consequuntur omnis odio ab itaque expedita fugiat dolor eius nostrum adipisci mollitia ipsum corrupti.</p>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam aspernatur est voluptate quo, eveniet hic atque consequuntur omnis odio ab itaque expedita fugiat dolor eius nostrum adipisci mollitia ipsum corrupti.</p>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam aspernatur est voluptate quo, eveniet hic atque consequuntur omnis odio ab itaque expedita fugiat dolor eius nostrum adipisci mollitia ipsum corrupti.</p>
                </div>
                <br>
                <div class="video">
                  <iframe width="100%" height="500" src="https://www.youtube.com/embed/5rMORILl_Hc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-3 bg-danger">
                <p>ansdkjsanfn</p>
            </div>
        </div>
    </div>
</section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>

<?php

?>