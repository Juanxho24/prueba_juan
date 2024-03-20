<?php
 require 'conexion/database.php';
    $db = new Database();
    $con = $db->conectar();

?>


<!-- -->

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Validación Parque - Diversiones</title>
 <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
 <link rel="stylesheet" href="css/css.css">
</head>

<body>

   <div><i class="fa fa-align-center" aria-hidden="true"><h1>PARQUE DE DIVERSIONES</h1></i></div>  

   <main>
        <form method="POST" autocomplete="off" class="formulario" id="formulario">
            

                <!-- div para capturar el nombre -->

                <div class="formulario__grupo-input" id="grupo__nombre">
                    <label for="nombre" class="formulario__label">Nombres *</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" onkeyup="mayus(this);" name="nombre" id="nombre" placeholder="Nombres">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">
                            El usuario tiene que ser de 12 a 20 dígitos y solo puede contener letras</p>
                </div>

                <!-- div para capturar la edad -->

                <div class="formulario__grupo-input" id="grupo__edad">
                    <label for="edad" class="formulario__label">Edad *</label>
                    <div class="formulario__grupo-input">
                        <input onkeyup="minus(this);" type="edad" class="formulario__input" name="edad" id="edad" placeholder="Edad">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La Edad solo puede contener numeros.</p>
                </div>


                <!-- div para capturar la fecha -->

                <div class="formulario__grupo-input" id="grupo__fecha">
                    <label for="fecha" class="formulario__label">Fecha Ingreso *</label>
                    <div class="formulario__grupo-input">
                        <input onkeyup="minus(this);" type="fecha" class="formulario__input" name="fecha" id="fecha" placeholder="Fecha Ingreso">
                        <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La Fecha solo puede contener, numeros y guiones.</p>
                </div>

                
                <!-- div para capturar el juego -->

                <div class="formulario__grupo-input" id="grupo__juego">
                    <label for="juego" class="formulario__label">Juego Favorito *</label>
                        <div class="formulario__grupo-input">
                            <input type="ciudad" class="formulario__input" name="juego" id="juego" placeholder="Ingresa el juego">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">
                        El juego solo puede contener letras.</p>
                </div>

                <!-- div para capturar la comida -->

                <div class="formulario__grupo-input" id="grupo__comida">
                    <label for="comida" class="formulario__label">Comida Favorita *</label>
                        <div class="formulario__grupo-input">
                            <input type="comida" class="formulario__input" name="comida" id="comida" placeholder="Ingresa la comida">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">
                        La comida solo puede contener letras.</p>
                </div>
                                
        
                

                
                <!-- Grupo: Terminos y Condiciones -->
   <div class="formulario__checkbox" id="grupo__terminos">
    <label class="formulario__checkbox">
     <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
     Acepto los Terminos y Condiciones
    </label>
   </div>

   <div class="formulario__mensaje" id="formulario__mensaje">
    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
   </div>
            
            <p class="text-center">
                      
            <div class="formulario__grupo-btn-enviar">
                <button type="submit" class="formulario__btn" name="save" value="guardar" >Enviar</button>
                <p class="formulario__mensaje" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
            </div>
                
        
        </form>
   </main>
   <script src="js/jquery.js"></script>
   <script src="js/formulario.js"></script>
 <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

    <!-- Javascript funcion para convertor en mayusculas y minusculas -->
    <!-- <script src="../js/main.js"></script> -->
    <script>
        function mayus(e) {
        e.value = e.value.toUpperCase();
        }

        function minus(e) {
        e.value = e.value.toLowerCase();
        }
    </script>
  
</body>

</html>

