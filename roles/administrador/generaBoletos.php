<?php
require_once './../../includes/headerAdmin.php';
?>
<?php
$servidor = "localhost";
$usuarioBD = "root";
$pwdBD = "";
$nomBD = "teatros";

$db = mysqli_connect($servidor, $usuarioBD, $pwdBD, $nomBD);
$usuario = $_SESSION['usu'];
$sql = "select nombre, apellido from registrados where usuario='$usuario'";
$result = $db->query($sql);
$row = $result->fetch_row();
?>
<head>
    <title>Bienvenido</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
       
        #funcion, #teatro, #fecha, #hora{
            width: 100%;
            height: 40px;
        }
    </style>

</head>


<body >
    <h1 class="text-center">Administrador <?php echo $row[0] . " " . $row[1]; ?></h1>

    <h3 class="text-center" style="background-color: #4CAF50; height: 50px; font-size: 40px;">Generar Boletos</h3>
    <br>    <br>
    <h3 class=" text-center"> Información de la Función</h3>
    <br>
    <div class="row">
        <div class="col"></div>
        <div class="col-6">
            <div class="row" >
                <input type="text" value="" placeholder="Nombre de Función" id="funcion" name="funcion" disabled="true">
            </div><br>
            <div class="row" style="align:right;">
                <input type="text" value="" placeholder="Nombre del Teatro" id="teatro" name="teatro" disabled="true">
            </div><br>
            <div class="row">
                <div class="col">
                    <input type="text" value="" placeholder="Fecha" id="fecha" name="fecha" disabled="true">
                </div>
                <div class="col">
                    <input type="text" value="" placeholder="Hora" id="hora" name="hora" disabled="true">
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <br><br>
    <div class="row">
        <div class="col"></div>
        <div class="col-6 text-center">
            <h3>Generar Boletos</h3><br>
            <a href="#"><button type="button" class="btn btn-outline-success">Generar todos los boletos</button></a><br><br><br>
            <h3>Generar Boletos por Zona</h3><br>
            <h3 class="text-center" style="background-color: gold; height: 50px; font-size: 40px;">Zona Oro</h3>
            <form action="/action_page.php">
                <select name="cars">
                    <option value="volvo">1</option>
                    <option value="saab">2</option>
                    <option value="fiat">3</option>
                    <option value="audi">4</option>
                    <option value="audi">5</option>
                    <option value="volvo">6</option>
                    <option value="saab">7</option>
                    <option value="fiat">8</option>
                    <option value="audi">9</option>
                    <option value="audi">10</option>
                    <option value="volvo">11</option>
                    <option value="saab">12</option>
                    <option value="fiat">13</option>
                    <option value="audi">14</option>
                    <option value="audi">15</option>
                    <option value="volvo">16</option>
                    <option value="saab">17</option>
                    <option value="fiat">18</option>
                    <option value="audi">19</option>
                    <option value="audi">20</option>
                    <option value="volvo">21</option>
                    <option value="saab">22</option>
                    <option value="fiat">23</option>
                    <option value="audi">24</option>
                    <option value="audi">25</option>
                    <option value="volvo">26</option>
                    <option value="saab">27</option>
                    <option value="fiat">28</option>
                    <option value="audi">29</option>
                    <option value="audi">30</option>

                </select>
                <br><br>
                <a href="#"><button class="btn btn-outline-success" type="button">Aceptar</button></a>
            </form>
            <br>
            <h3 class="text-center" style="background-color: silver; height: 50px; font-size: 40px;">Zona Plata</h3>
            <form>
                <select name="cars">
                    <option value="volvo">1</option>
                    <option value="saab">2</option>
                    <option value="fiat">3</option>
                    <option value="audi">4</option>
                    <option value="audi">5</option>
                    <option value="volvo">6</option>
                    <option value="saab">7</option>
                    <option value="fiat">8</option>
                    <option value="audi">9</option>
                    <option value="audi">10</option>
                    <option value="volvo">11</option>
                    <option value="saab">12</option>
                    <option value="fiat">13</option>
                    <option value="audi">14</option>
                    <option value="audi">15</option>
                    <option value="volvo">16</option>
                    <option value="saab">17</option>
                    <option value="fiat">18</option>
                    <option value="audi">19</option>
                    <option value="audi">20</option>
                    <option value="volvo">21</option>
                    <option value="saab">22</option>
                    <option value="fiat">23</option>
                    <option value="audi">24</option>
                    <option value="audi">25</option>
                    <option value="volvo">26</option>
                    <option value="saab">27</option>
                    <option value="fiat">28</option>
                    <option value="audi">29</option>
                    <option value="audi">30</option>
                </select>
                <br><br>
                <a href="#"><button class="btn btn-outline-success" type="button">Aceptar</button></a>
            </form>
            <br>
            <h3 class="text-center" style="background-color: pink; height: 50px; font-size: 40px;">Zona General</h3>
            <form>
                <select name="cars">
                    <option value="volvo">1</option>
                    <option value="saab">2</option>
                    <option value="fiat">3</option>
                    <option value="audi">4</option>
                    <option value="audi">5</option>
                    <option value="volvo">6</option>
                    <option value="saab">7</option>
                    <option value="fiat">8</option>
                    <option value="audi">9</option>
                    <option value="audi">10</option>
                    <option value="volvo">11</option>
                    <option value="saab">12</option>
                    <option value="fiat">13</option>
                    <option value="audi">14</option>
                    <option value="audi">15</option>
                    <option value="volvo">16</option>
                    <option value="saab">17</option>
                    <option value="fiat">18</option>
                    <option value="audi">19</option>
                    <option value="audi">20</option>
                    <option value="volvo">21</option>
                    <option value="saab">22</option>
                    <option value="fiat">23</option>
                    <option value="audi">24</option>
                    <option value="audi">25</option>
                    <option value="volvo">26</option>
                    <option value="saab">27</option>
                    <option value="fiat">28</option>
                    <option value="audi">29</option>
                    <option value="audi">30</option>
                    <option value="volvo">31</option>
                    <option value="saab">32</option>
                    <option value="fiat">33</option>
                    <option value="audi">34</option>
                    <option value="audi">35</option>
                    <option value="volvo">36</option>
                    <option value="saab">37</option>
                    <option value="fiat">38</option>
                    <option value="audi">39</option>
                    <option value="audi">40</option>
                    <option value="volvo">41</option>
                    <option value="saab">42</option>
                    <option value="fiat">43</option>
                    <option value="audi">44</option>
                    <option value="audi">45</option>
                    <option value="volvo">46</option>
                    <option value="saab">47</option>
                    <option value="fiat">48</option>
                    <option value="audi">49</option>
                    <option value="audi">50</option>
                </select>
                <br><br>
                <a href="#"><button class="btn btn-outline-success" type="button">Aceptar</button></a>
            </form>
            <br>
        </div>
        <div class="col"></div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<?php
require_once './../../includes/footer.php';
?>