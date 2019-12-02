<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador - Crear Función</title>
   
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
       $(window).load(function(){

 $(function() {
  $('#file-input').change(function(e) {
      addImage(e); 
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      $('#posterSalida').attr("src",result);
     }
    });
  });
    </script>
    </head>
    <body>
        <form method="post" action="CrearFuncion.php">
                <h1>Administrador - Cartelera de funciones</h1>
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th>Funciones</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="container">
            <h2>Funciones</h2>
            
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th><input type="button" class="btn btn-success" data-toggle="collapse" data-target="#agregar" value="Agregar Función" name="btnAgregar" />
                         <div id="agregar" class="collapse">
                             <br>
                             <form>
                             Nombre del espectáculo:
                                 <input name="espectaculo" type="text" class="mb-3">
                                 <br>
                                
                             Fecha del espectáculo:
                             <input name="fecha" type=date class="mb-3">
                             <br>
                             Hora del espectáculo:
                             <input name="hora" type="time" class="mb-3">  
                             <br>
                              Elegir teatro: 
                                 <select name="teatro" class="custom-select mb-3">
                                    <option selected>Teatros disponibles</option>
                                    <option value="toluca">Toluca</option>
                                    <option value="metepec">Metepec</option>
                                    <option value="cdmx">CDMX</option>
                                 </select>
                             Elegir tipo de espectáculo:
                             <select name="tipoespect" class="custom-select mb-3">
                               <option selected>Tipo de espectáculo</option>
                               <option value="tragedia">Tragedia</option>
                               <option value="comedia">Comedia</option>
                               <option value="satira">Sátira</option>
                               <option value="melodrama">Melodrama</option>
                               <option value="monologo">Monólogo</option>
                             </select>
                             Elenco del espectáculo: <br>
                             <textarea name="elenco" rows="10" cols="35"></textarea>
                             <br>
                             Breve descripción del espectáculo: <br>
                             <textarea name="descripcion" rows="10" cols="35"></textarea>
                             </form>
                             Inserta póster del espectáculo:
                             <input type="file" name="file-input" id="file-input"/>
                             <br>
                             Vista previa:
                             <img id="posterSalida" width="400" height="500" src="" />
                             <br>
                             <input type="submit"  onclick="alert('Función creada, ahora generar boletos')" class="btn btn-success" value="Confirmar" name="btnConfirmar" />
                             
                        </div>
                        </th>
               
                    </tr>
                </thead>
            </table>
            </form>
        <?php
        include ("ConsultaAdministrador.php");
        ?>
    </body>
</html>
