<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACTURA DIGITAL - RESULTADO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body bg="gray">   
<div class="container">
  
<h1 class="text-center">La Empresa S.A de C.v.</h1>
<p class="fs-6 text-center"><b> ACTIVIDADES DE ASESORAMIENTO EMPRESARIAL</b> <br>
  Departamento de San Salvador°El Salvador°Centroamerica <br>
  Telefono:(503) 2222-1111 ° Fax: (503) 2222-1111
</p>
  <br>
  <form class='row g-2 ' name='frm' action='Examen1-Factura.php' method='post'>;
  <?php
    if (isset($_POST['cliente'])) {
        //Declaramos las variables a utilizar
        $nombre_Cliente = $_POST['cliente'];
        $fecha = $_POST['fecha'];
        $direccion = $_POST['direccion'];
        $numeroRegistro = $_POST['numeroRegistro'];
        $departamento = $_POST['depto'];
        $nit = $_POST['nit'];
        $giro = $_POST['giro'];
        $condicionesDePago = $_POST['condiciones'];
        $cant1 = $_POST['cantidad1'];
        $descp1 = $_POST['descripcion1'];
        $precU1 = $_POST['precioUnitario1'];
        $ventasEx1 = $_POST['ventasExentas1'];
        $ventasAfec1 = ($cant1);
        $cant2 = $_POST['cantidad2'];
        $descp2 = $_POST['descripcion2'];
        $precU2 = $_POST['precioUnitario2'];
        $ventasEx2 = $_POST['ventasExentas2'];
        $ventasAfec2 = ($cant2);
        $cant3 = $_POST['cantidad3'];
        $descp3 = $_POST['descripcion3'];
        $precU3 = $_POST['precioUnitario3'];
        $ventasEx3 = $_POST['ventasExentas3'];
        $ventasAfec3 = ($cant3);
        $nombreEmpleado = $_POST['nombreEmp'];
        $duiEmpleado = $_POST['duiEmpl'];
        $fechaRegEmpl = $_POST['fechaR'];
        $nombreClienteReg = $_POST['clienteR'];
        $duiClienteREg = $_POST['duiCl'];
        $fechaClienteReg = $_POST['fechaCLR'];
        $sumas =(($cant1 * $precU1) + ($cant2 * $precU2) + ($cant3 * $precU3));
        $IVA = ($sumas * 0.13);
        $subTotal = ($sumas + $IVA);
        $ivaRetenido = ($subTotal * 0.01);
        $ventasExentas = ($ventasEx1 + $ventasEx2 + $ventasEx3);
        $ventaTotales = ($subTotal - $ivaRetenido);
        $observaciones = $_POST['observaciones'];
        $cancelado = $_POST['cancelado'];
    
                echo"<div class='col-md-6 '>";
                    echo"<!--CLIENTE-->";
                    echo "<label for='cliente' class='form-label'>Cliente:</label>";
                    echo "<input type='text' class='form-control' value='$nombre_Cliente' id='' name='cliente' maxlength='25' required readonly = 'true'>"; 
                echo "</div>";
            echo "<div class='col-md-6 '>";
                    echo "<!--FECHA -->";
                    echo "<label for='fecha' class='form-label'>Fecha:</label>";
                    echo "<input type='date' class='form-control' value ='$fecha' id='' name='fecha' required readonly = 'true'>";
                echo "</div>";
                echo "<div class='col-12 '>";
                    echo "<!--DIRECION-->";
                    echo "<label for='direc' class='form-label'>Direccion: </label>";
                    echo "<input type='text' class='form-control' value='$direccion' id='' name='direccion' maxlength='30' required readonly = 'true'>";
                echo "</div>";
                    echo "<!--NUMERO DE REGISTRO-->";
                echo "<div class='col-md-6'>";
                    echo "<label for='numRegistro' class='form-label'>N° Registro: </label>";
                    echo "<input type='number' name='numeroRegistro' value='$numeroRegistro' class='form-control' id='' maxlength='8' pattern='[0-9]{5}-[0-2]{4}' placeholder='00000-00' required readonly = 'true'>";
                echo "</div>";
                echo "<!--DEPARTAMENTO-->";
                echo "<div class='col-md-6'>";
                    echo "<label for='dept' class='form-label'>Departamento: </label>";
                    echo "<select id='dept' name='depto' class='form-select' readonly = 'true'>";
                    echo "<option>$departamento</option>";
                
                    echo "</select>";
                echo "</div>";
                echo "<!--NIT-->";
                echo "<div class='col-md-6'>";
                    echo "<label for='nit' class='form-label'>NIT:</label>";
                    echo "<input type='number' class='form-control' value ='$nit' name='nit' id='nit' maxlength='17' pattern='[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}' placeholder='0000-000000-000-0' required readonly = 'true'> ";
                echo "</div>";
                echo "<!--GIRO-->";
                echo "<div class='col-md-6'>";
                echo "<label for='giro' class='form-label'>Giro:</label>";
                    echo "<input type='text'class='form-control' value='$giro' id='giro' name='giro' maxlength='25' required readonly = 'true'>"; 
                echo "</div>";
                echo "<!--CONDICIONES-->";
                echo "<div class='col-md-6'>";
                    echo "<label for='condiciones' class='form-label'>Condiciones de pago:</label>";
                    echo "<select id='cliente' name='condiciones' value='$condicionesDePago' class='form-select' required readonly = 'true'>";
                    echo "<option>$condicionesDePago</option>";
                echo "</select>";
                echo "</div>";

                echo "<br>";
                echo "<hr size='5'>";
                echo "<table class='table'>";
                echo "<thead>";
                    echo "<tr>";
                    echo "<th scope='col'>Cantidad</th>";
                    echo "<th scope='col'>Descripcion</th>";
                    echo "<th scope='col'>Precio Unitario</th>";
                    echo "<th scope='col'>Ventas Exentas</th>";
                    echo "<th scope='col'>Ventas Afectadas</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                    echo "<tr>";
                    echo "<th scope='row'><input type='number' name='cantidad1' value='$cant1' maxlength='6'  required readonly='true'></th>";
                    echo "<th scope='row'><input type='text' name='descripcion1' value='$descp1' maxlength='30' size='40' readonly='true'></th>";
                    echo "<td><input type='number' name='precioUnitario1' value='$precU1' maxlength='6' readonly = 'true'></td>";
                    echo "<td><input type='number' name='ventasExentas1' value='$ventasEx1' maxlength='6'readonly = 'true'></td>";
                    echo "<td><input type='number' name='ventasAfectadas1' value='$ventasAfec1' maxlength='6' readonly = 'true'></td>";
                    echo "</tr >";
                    echo "<tr>";
                    echo "<th scope='row'><input type='number' name='cantidad2' value='$cant2' maxlength='6'  required readonly='true'></th>";
                    echo "<th scope='row'><input type='text' name='descripcion2' value='$descp2' maxlength='30' size='40' readonly='true'></th>";
                    echo "<td><input type='number' name='precioUnitario2' value='$precU2' maxlength='6' readonly = 'true'></td>";
                    echo "<td><input type='number' name='ventasExentas2' value='$ventasEx2' maxlength='6'readonly = 'true'></td>";
                    echo "<td><input type='number' name='ventasAfectadas2' value='$ventasAfec2' maxlength='6' readonly = 'true'></td>";
                    echo "</tr >";
                    echo "<tr>";
                    echo "<th scope='row'><input type='number' name='cantidad3' value='$cant3' maxlength='6'  required readonly='true'></th>";
                    echo "<th scope='row'><input type='text' name='descripcion3' value='$descp3' maxlength='30' size='40' readonly='true'></th>";
                    echo "<td><input type='number' name='precioUnitario3' value='$precU3' maxlength='6' readonly = 'true'></td>";
                    echo "<td><input type='number' name='ventasExentas3' value='$ventasEx3' maxlength='6'readonly = 'true'></td>";
                    echo "<td><input type='number' name='ventasAfectadas3' value='$ventasAfec3' maxlength='6' readonly = 'true'></td>";
                    echo "</tr >";
                    
                    
                echo "</tbody>";
                echo "</table>";
                echo "<br>";
                echo "<hr size='5'>";

                    echo "<!--ENTREGADO POR-->";
                    echo "<table style='width:100%'>";
                
                    echo "<tr>";
                        echo "<td>";
                            echo "<h5><center>ENTREGADO POR</center></h5>";
                    echo "<!--NOMBRE-->";
                    echo "<div class='col-10'>";
                    echo "<label for='cliente' class='form-label'>Nombre:</label>";
                    echo "<input type='text' class='form-control' id='' value='$nombreEmpleado' name='nombreEmp' maxlength='25' required='true' readonly = 'true'>"; 
                echo "</div>";
                
                
                echo "<!--DUI-->";
                echo "<div class='col-10'>";
                    echo "<label for='nit' class='form-label'>Dui:</label>";
                    echo "<input type='number' class='form-control' name='dui' value='$duiEmpleado' id='nit' maxlength='17' pattern='[0-9]{8}-[0-9]{1}' placeholder='00000000-0' required readonly = 'true'>";
                echo "</div>";
                echo "<!--FECHA-->";
                echo "<div class='col-10 '>";
                    echo "<label for='fecha' class='form-label'>Fecha:</label>";
                    echo "<input type='date' class='form-control' id='' value='$fechaRegEmpl' name='fechar' required readonly = 'true'>";
                echo "</div>";
                echo "</td>";

                    echo "<td>";
                echo "<h5><center>RECIBIDO POR</center></h5>";
                    
                    
                echo "<!--NOMBRE-->";    	
                echo "<div class='col-10'>";
                    echo "<label for='cliente' class='form-label'>Nombre:</label>";
                    echo "<input type='text' class='form-control' id='' value='$nombreClienteReg' name='clienter' maxlength='25' require='true' readonly = 'true'>"; 
                echo "</div>";
                
                
                echo "<!--DUI-->";
                echo "<div class='col-10'>";
                    echo "<label for='nit' class='form-label'>Dui:</label>";
                    echo "<input type='number' class='form-control' value='$duiClienteREg' name='dui' id='nit' maxlength='17' pattern='[0-9]{8}-[0-9]{1}' placeholder='00000000-0' required readonly = 'true'>"; 
                echo "</div>";
                echo "<!--FECHA-->";
                echo "<div class='col-10'>";
                    echo "<label for='fecha' class='form-label'>Fecha:</label>";
                    echo "<input type='date' class='form-control' id='' value=' $fechaClienteReg' name='fechas' required readonly = 'true'>";
                echo "</div>";

                echo "<!--Sumas y venta Total-->";
                echo "<td>";
                echo "<p>Sumas</p>";
                echo "<p>IVA</p>";
                echo "<p>Sub - Total</p>";
                echo "<p>(-) IVA Retenido</p>";
                echo "<p>Ventas Exentas</p>";
                echo "<p>Venta Total</p>";
                echo "<td>";
                echo "<!--SUMAS-->";
                echo "<div class='col-10'>";
                    echo "<input type='number' class='form-control' value='$sumas' id='sum' name='sumas' maxlength='25' require='true' readonly = 'true'>"; 
                echo "</div>";
                
                
                echo "<!--IVA-->";
                echo "<div class='col-10'>";
                    
                    echo "<input type='number' class='form-control' value='$IVA' name='iva' id='i' maxlength='25' require='true' readonly = 'true'>"; 
                echo "</div>";

                echo "<!--SUB - TOTAL-->";
                echo "<div class='col-10'>";
                    
                    echo "<input type='number' class='form-control' value='$subTotal' id='s_total' name='subtotal' maxlength='25' require='true' readonly = 'true'>";
                echo "</div>";

                echo "<!--(-) IVA Retenido-->";
                echo "<div class='col-10'>";
                    
                    echo "<input type='number' class='form-control' value='$ivaRetenido' id='ivaR' name='IvaRetenido' maxlength='25' require='true' readonly = 'true'>";
                echo "</div>";
                
                echo "<!--Ventas Exentas-->";
                echo "<div class='col-10'>";
                    
                    echo "<input type='number' class='form-control' value='$ventasExentas' id='ivaE' name='VentasExaentas' maxlength='25' require='true' readonly = 'true'>";
                echo "</div>";

                echo "<!--Venta Total-->";
                echo "<div class='col-10'>";
                    
                    echo "<input type='number' class='form-control' value='$ventaTotales' id='venta_t' name='VentaTotal' maxlength='25' require='true' readonly = 'true'>";
                echo "</div>";

                echo "</tr>";
                echo "</table>";
                echo "<br>";
                echo "<hr size='5'>";
                echo "<table class='table'>";
                    echo "<div class='col-12'>";
                    echo "<!--OBSERVACIONES-->";
                    echo "<label for='direc' class='form-label'>Observaciones: </label>";
                    echo "<input type='text' class='form-control' id='' value='$observaciones' name='observaciones' maxlength='30' readonly = 'true'>";
                echo "</div>";
                echo "<div class='col-12'>";
                    echo "<!--CANCELADO-->";
                    echo "<label for='direc' class='form-label'>Cancelado: </label>";
                    echo "<input type='text' class='form-control' id='' value='$cancelado' name='cancelado' maxlength='30' readonly = 'true'>";
                
                echo "</div>";
                echo "</table>";
                echo "<br>";

                echo "<div class='col-12'>";
                    echo "<center>";
                echo "<button class='btn btn-primary' type='submit' value='Enviar'>Nuevo registro</button>";
                echo "</div>";
                echo "</center>";
                echo "</div>";
                echo "<br>";
                echo "<br>";
            }
            ?>
</form>;

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>