<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once "inclusiones/meta_tags.php"; ?>
        <title>Registro de aspirantes</title>
        <?php include_once "inclusiones/css_y_favicon.php"; ?>
        <link href="css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <!-- Menu principal -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php
                    include_once "inclusiones/menu_horizontal_superior.php";
                ?>
            </div>
        </div>
    </div>

        <div id ="contenedor" class="container">
            <h1> Registre para uno o mas cursos </h1>
            <p>
                Puede seleccionar uno o mas cursos, es requisito el RFC
            </p>
            <form name="forma" id="forma" action ="inserta_aspirante.php" method= "post" onsubmit="" >
                <div id= "row"> 
                    <div class="col-25">
                        <label> RFC: </label>
                    </div>   
                    <div class="col-75">
                        <input type="text" name="f_rfc" id="f_rfc" class="mayusculas" value="" placeholder="Ingrese RFC">
                    </div>
                </div>
                <div id= "row"> 
                    <div class="col-25">
                        <label> Nombre: </label>
                    </div>   
                    <div  class="col-75">
                        <input type="text" name="f_nombre" id="f_nombre" class="mayusculas" value="" placeholder="Ingrese Nombre">
                    </div>
                </div>
                <div id= "row"> 
                    <div class="col-25">
                        <label> Patermo: </label>
                    </div>   
                    <div  class="col-75">
                        <input type="text" name="f_paterno" id="f_paterno" class="mayusculas" value="" placeholder="Ingrese Apellido Paterno">
                    </div>
                </div>
                <div id= "row"> 
                    <div class="col-25">
                        <label> Materno: </label>
                    </div>   
                    <div  class="col-75">
                        <input type="text" name="f_materno" id="f_materno" class="mayusculas" value="" placeholder="Ingrese Apellido Materno">
                    </div>
                </div>
                <div id= "row"> 
                    <div class="col-25">
                        <label> Empresa: </label>
                    </div>   
                    <div  class="col-75">
                        <select name ="f_id_empresa" id= "f_id_empresa">
                            <option value="0">Seleccione </option>
                            <option value="1">Coca Cola </option>
                            <option value="2">Magna </option>
                            <option value="3">Intel </option>
                        </select>
                    </div>
                </div>
                <div id= "row"> 
                    <div class="col-25">
                        <label> Telefono: </label>
                    </div>   
                    <div  class="col-75">
                        <input maxlength="10" type="tel" name="f_telefono" id="f_telefono" value="" placeholder="Ingrese telefono personal">
                    </div>
                </div>

                <div id= "row"> 
                    <div class="col-25">
                        <label> E-mail: </label>
                    </div>   
                    <div  class="col-75">
                        <input type="email" name="f_email" id="f_email" placeholder="Ingrese correo personal">
                    </div>
                </div>
                <div id= "row"> 
                    <div class="col-25">
                        <label> Curso: </label>
                    </div>   
                    <div  class="col-75">
                        <select name ="f_id_curso" id= "f_id_curso">
                            <option value="0">Seleccione </option>
                            <option value="1">Manejo de recursos hidráulicos </option>
                            <option value="2">Ecología </option>
                            <option value="3">Manejo de recursos </option>
                        </select>
                    </div>
                </div>

                <div id= "row2">  
                    <input  class="boton_menu" type="button" name="add" onClick='valida_aspirante()' value="Registrar" >
                </div>
            </form>
        </div> <!--contenedor-->

        <?php include_once "inclusiones/js_incluidos.php"; ?>
    </body>
</html>