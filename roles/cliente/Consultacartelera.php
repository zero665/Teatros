

<?php
require_once '../../includes/header.php';
?>

<html>
    <head>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
  /* Make the image fully responsive */
  .carousel-item {
    align-content: center;
  }
  </style>
</head>
<body>
    <div class="container">
        <div>
            <h5>Buscar espectaculo</h5>
        </div>
        
    <form action="/action_page.php">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search" name="search">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
        </form>
        </div>
    
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../img/muer_risa.jpg" alt="Los Angeles" width="500" height="250">
      
    </div>
    <div class="carousel-item ">
      <img src="../../img/que_hace.jpg" alt="Chicago" width="500" height="250">
     
    </div>
    <div class="carousel-item ">
      <img src="../../img/ric3.jpg" alt="New York" width="500" height="250">
      
    </div>
      <div class="carousel-item ">
      <img src="../../img/son_lag_music.jpg" alt="New York" width="500" height="250">
      
    </div>
  </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 <div class="container">
  <h2>Selecciona un espectaculo</h2>
  
  <form>
    <div class="form-group">
        <br>
      <label for="sel1">Lista de espectaculos:</label>
      <select class="form-control" id="sel1">
        <option>Muere de risa</option>
        <option>Que haces</option>
        <option>Rico</option>
        <option>Musical</option>
      </select>
      <br><br>
      
      <h3>Selecciona un teatro</h3>
      <label for="sel12">Lista de teatros:</label>
      <select class="form-control" id="sel12">
        <option>Muere de risa</option>
        <option>Que haces</option>
        <option>Rico</option>
        <option>Musical</option>
      </select>
      <br><br>
      
      <h4>Selecciona tu horario disponible</h4>
      <label for="sel13">Horarios disponibles:</label>
      <select class="form-control" id="sel13">
        <option>Muere de risa</option>
        <option>Que haces</option>
        <option>Rico</option>
        <option>Musical</option>
      </select>
    </div>
  </form>
</div>

  
</body>
</html>

<?php
require_once '../../includes/footer.php';
?>