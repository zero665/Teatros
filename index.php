<?php
require_once './includes/header.php';
//hola
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #fff;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #fff;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }
        .tit{
            color:white;
        }


        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
        .contenedor{
            position: relative;
            display: inline-block;
            text-align: center;
        }

        .texto-encima{
            position: absolute;
            top: 10px;
            left: 10px;
            transform: translate(450px, 150px);
        }
    </style>
    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100 px;
        }
        .carousel-caption{
            background-color: rgba(0,0,0,.7);
        }
    </style>
</head>


<body>
    <!--carrusel-->

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
                    <img src="./img/muer_risa.jpg" alt="Muerte" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>La Muerte Me Da Risa</h3>
                        <p>La Compañia De Comedias</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/que_hace.jpg" alt="QueHace" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>¿Qué Hacéis Aquí?</h3>
                        <p>Tiriteatreros</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/ric3.jpg" alt="Ricardo" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>Ricardo III</h3>
                        <p>William Shakespeare</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/son_lag_music.jpg" alt="Sonrisas" width="1100" height="500">
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
    <!--modal-->         
    <div id="id01" class="modal">
        <div class="container">

            <form id="modal" class="modal-content animate" action="./control/valida.php" method="post" style="background-color: rgba(0,0,0,0.7);">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                </div>

                <div class="container">
                    <label class="tit" for="uname"><b>Correo Electronico</b></label>
                    <input style="width: 100%; height: 60px;"type="email" placeholder="Correo Electronico" name="uname" id="cor">
                    <span class="error" id="errorMsj1" style="color: red;"></span>
                    <br/>
                    <label class="tit" for="psw"><b>Contraseña</b></label>
                    <input type="password" placeholder="Contraseña" name="psw" id="con">
                    <span class="error" id="errorMsj2" style="color: red;"></span>

                    <br/>
                    <br/>

                    <button type="submit" id="va">Iniciar</button>

                </div>

                <div class="container" >
                    <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#va').click(function () {
                var regUsr = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{4,16}$/;
                var regEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+.)+[A-Z]{2,4}$/i;
                $('#errorMsj1').text('');
                $('#errorMsj2').text('');
                var name = $('#cor').val();
                var pwd = $('#con').val();

                if (name.trim() === '') {
                    $('input[id="cor"]').each(function () {
                        if (!$(this).val()) {
                            $(this)[0].className += " Red";
                        }
                    });
                    $('#cor').attr('placeholder', 'No se admiten campos vacíos');
                    $('#cor').focus();
                    $('#errorMsj1').text('No se admiten campos vacíos');

                    return false;
                } else if (name.trim() !== '' && !regEmail.test(name)) {
                    $('#errorMsj1').text('Correo no válido');
                    $('#cor').focus();
                    return false;
                } else if (pwd.trim() === '') {
                    $('input[id="con"]').each(function () {
                        if (!$(this).val()) {
                            $(this)[0].className += " Red";
                        }
                    });
                    $('#con').attr('placeholder', 'No se admiten campos vacíos');
                    $('#errorMsj2').text('No se admiten campos vacíos');

                    $('#con').focus();
                    return false;
                } else if (pwd.trim() !== '' && !regUsr.test(pwd)) {
                    $('#errorMsj2').text('Mínimo 4 caracteres, al menos 1 mayúscula y 1 número');
                    $('#con').focus();
                    return false;
                } else {
                    //                                        console.log(pwd);
                    $('#modal').submit();
                }
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
<?php
require_once './includes/footer.php';
?>