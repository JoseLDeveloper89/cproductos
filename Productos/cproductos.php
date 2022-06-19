<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/LogoFares.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="./css/dcoloresf.css">
    <link rel="stylesheet" type="text/css" href="./css/disenocssf.css">
    <script src="./JScript/acciones_script.js"></script>
    <title>Inventario-Fares</title>
    
</head>

<body>
    
    <!-- Titulo de la pagina -->
    <Header id="titulo1" class="fcolor-d5">
        <h1>Ediciones Fares</h1>
    </Header>
    
    <!-- Barra de navegacion -->
    <nav class="fcolor-l4">
        <ul>
            <!-- pestaña de principal -->
            <li><a href="#">Principal</a></li>
            <!-- pestaña de libros -->
            <li><a href="#">Libros</a></li>
            <!-- desplegable de inventario -->
            <li class="f-desplegable">
                <a href="#" class="btndesplegable">Inventario</a>
                <div class="cont-desplegable">
                    <a href="cproductos.php">Crear Producto</a>
                    <a href="#">Consultar Producto</a>
                </div>
            </li>
            <!-- pestaña de contactos -->
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <!-- Contenido de la pagina -->
    <section class="fcolor-l1 seccion-form">

        <!-- div perteneciente al encabezado de INVENTARIO -->
        <div class="s-encabezado">
            <h2>Inventario</h2>
        </div>

        <!-- Inicio del formulario -->
        <form class="fcolor-l5" action="Guardar.php" method="post" enctype="multipart/form-data" autocomplete="off">

        <!-- div que contiene Código & Nombre del producto -->
        <div id="codnom">
                <label class="codnom1">Código: <input type="text" name="codigo" id="codigo" pattern="^[0-]+{3,}" placeholder="Ingresar solo números" size="12" autofocus required> </label>
                <label class="codnom1">Producto: <input type="text" class="campof" name="nproducto" id="nproducto" pattern="^[a-zA-Z\s]+{3,100}" placeholder="Ingresar solo letras" size="50"> </label>
            </div>

        <!-- Div que contiene Costo y Porcentaje de venta -->
            <div id="cospor">
                <label class="codnom1">Costo: <input type="text" class="campof" name="costop" id="costop" pattern="[0-9]+([,\.][0-9]+)?"> </label>
                <label class="codnom1">Porcentaje de venta: <input type="text" class="campof" name="porcentajev" id="porcentajev" maxlength="3" size="4"> </label>
            </div>

            <!-- Div que contiene el precio de venta y Fecha -->
            <div id="prefecha">
                <label class="codnom1">Precio de Venta: <input type="text" class="campof" name="pventa" id="pventa" readonly></label>
                <label class="codnom1">Fecha: <input type="date" class="campof" name="fecha_creacion" id="fecha_creacion"></label>
            </div>

            <!-- Div que contiene donde aparecerá la imagen -->
            <div id="csimagen">
                <img src="" width="200px" alt="Imagen del producto">
            </div>
            
            <!-- Div del boton Seleccionar archivo -->
            <div id="botonimg">
                <input type="file" class="campof" name="simagen" id="simagen">
            </div>

            <!-- div que contiene el boton de guardar -->
            <div class="btnGuardar">
                <input type="submit" id="btn" value="Guardar">
            </div>
            
         </form> <!--cierre del espacio del formulario -->
    </section>

    <!-- Pie de pagina -->
    <footer class="fcolor-d5">
        <p>
            Derechos Reservados &copy; 2004 - 2023
        </p>
    </footer>
</body>

</html>
