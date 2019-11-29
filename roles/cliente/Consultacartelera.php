

<?php
require_once '../../includes/headerCliente.php';
 $servidor = "localhost";
$usuarioBD="root";
$pwdBD="";
$nomBD="teatros";

$db= mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);
    $usuario = $_SESSION['usu'];
   $sql = "select nombre, apellido from registrados where usuario='$usuario'";
   $result = $db->query($sql);
    $row = $result->fetch_row(); 
    ?>

<html>
    <head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
<style>
  /* Make the image fully responsive */
  .carousel-item {
    align-content: center;
  }
  #left{
      float: left;
      width: 50%;
      height: 50%
          
  }
  #right{
      float: right;
      width: 50%;
      height: 50%
  }
  #main{
      width: 100%;
      border: 1px solid  #f44336;
  }
  #footer{
      
   
  }
  </style>
</head>
<body>
    
    <div class="container">
         <h1 class="text-center">Bienvenido Cliente <?php echo $row[0]." ".$row[1]; ?></h1>
         <br>
         <hr>
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
  
    <div class="container" >
  <h2>Selecciona un espectaculo</h2>
  
  <form>
    <div class="form-group">
        <br>
      <label for="sel1">Lista de espectaculos:</label>
      <?php 
      include '../../control/conecta.php';
        if($db)
            {
           $sql = "select * from espectaculo";
           $result = mysqli_query($db, $sql);
           if (mysqli_num_rows($result) > 0) {
           while($row = mysqli_fetch_assoc($result)) {    
            ?>
      <select class="form-control" id="sel1">
          <option> </option>
          <option><?php echo $row["nombre"];?></option>
         
        <?php
           }
           }
           } 
           ?>
      </select>
      <br><br>
      
      
    </div>
      <div>
          <div class="row">
              <div class="col">
              <table>
                  <thead>
                  <th><h2>Detalles funcion</h2></th>
                  </thead>
                  <tbody>
                      
                  <tr><td>Titulo: </td><br></tr>
                  <tr><td>Elenco: </td><br></tr>
                  <tr><td>Protagonista: </td><br></tr>
                  <tr><td>Tipo: </td><br></tr>
                  <tr><td>Hora: </td><br></tr>
                  <tr><td>Fecha: </td><br></tr>
                  <tr><td>Sinopsis: </td><br></tr>
                  
                  
                  </tbody>
              </table>
          </div>
              <div class="col" >
              <img  style=" width: 51%" src="../../img/muer_risa.jpg" alt=""/>
              
          </div>
      </div>
      </div>
  </form>
</div>
   
  
</body>

<script>
    
$("#c2").click(function() {
$("#cont1").show("slow");
});

$("#c1").click(function() {
$("#cont1").hide(1500);
});
</script>

<footer>
<?php
require_once '../../includes/footer.php';
?>
</footer>
</html>