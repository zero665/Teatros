

<?php
require_once '../../includes/headerCliente.php';
?>

<html>
    <head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
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
            <br/>
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
    
    <div class="container">
        <div class="container mt-3">

        <h2>Obras de Teatro</h2>
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
                    <img src="./../../img/muer_risa.jpg" alt="Muerte" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>La Muerte Me Da Risa</h3>
                        <p>La Compañia De Comedias</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./../../img/que_hace.jpg" alt="QueHace" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>¿Qué Hacéis Aquí?</h3>
                        <p>Tiriteatreros</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./../../img/ric3.jpg" alt="Ricardo" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Ricardo III</h3>
                        <p>William Shakespeare</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./../../img/son_lag_music.jpg" alt="Sonrisas" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Sonrisas y Lágrimas El Musical</h3>
                        <p>Escuela de Actores Butaca 78</p>
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
        </div>

    </div>
    </div>
  
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