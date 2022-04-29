<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FACTURA DIGITAL</title>
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
    <form class="row g-2 " name="frm" action="Resultado.php" method="post">
                <div class="col-md-6 ">
                    <!--CLIENTE-->
                    <label for="cliente" class="form-label">Cliente:</label>
                    <input type="text" class="form-control" id="" name="cliente" maxlength="25" required> 
                </div>
                <div class="col-md-6 ">
                    <!--FECHA -->
                    <label for="fecha" class="form-label">Fecha:</label>
                    <input type="date" class="form-control" id="" name="fecha" required>
                </div>
                <div class="col-12 ">
                    <!--DIRECION-->
                    <label for="direc" class="form-label">Direccion: </label>
                    <input type="text" class="form-control" id="" name="direccion" maxlength="30" required>
                </div>
                    <!--NUMERO DE REGISTRO-->
                <div class="col-md-6">
                    <label for="numRegistro" class="form-label">N° Registro: </label>
                    <input type="number" name="numeroRegistro" class="form-control" id="" maxlength="8" pattern="[0-9]{5}-[0-2]{4}" placeholder="00000-00" required>
                </div>
                <!--DEPARTAMENTO-->
                <div class="col-md-6">
                    <label for="dept" class="form-label">Departamento: </label>
                    <select id="dept" name="depto" class="form-select">
                    <option>La Libertadad</option>
                    <option>San Vicente</option>
                    <option>San Salvador</option>
                    <option>La Paz</option>
                    <option>Santa Ana</option>
                    <option>San Miguel</option>
                    <option>Ahuachapan</option>
                    
                    </select>
                </div>
                <!--NIT-->
                <div class="col-md-6">
                    <label for="nit" class="form-label">NIT:</label>
                    <input type="number" class="form-control" name="nit" id="nit" maxlength="17" pattern="[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}" placeholder="0000-000000-000-0" required> 
                </div>
                <!--GIRO-->
                <div class="col-md-6">
                <label for="giro" class="form-label">Giro:</label>
                    <input type="text" class="form-control" id="giro" name="giro" maxlength="25" required> 
                </div>
                <!--CONDICIONES-->
                <div class="col-md-6">
                    <label for="condiciones" class="form-label">Condiciones de pago:</label>
                    <select id="cliente" name="condiciones" class="form-select" required>
                    <option>Credito</option>
                    <option>Contado</option>
                </select>
                </div>

                <br>
                <hr size="5">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio Unitario</th>
                    <th scope="col">Ventas Exentas</th>
                    <th scope="col">Ventas Afectadas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><input type="number" name="cantidad1" maxlength="6"  required></th>
                    <th scope="row"><input type="text"  name="descripcion1" maxlength="30" size="40"></th>
                    <td><input type="number" name="precioUnitario1" maxlength="6"></td>
                    <td><input type="number" name="ventasExentas1" maxlength="6"></td>
                    <td><input type="number" name="ventasAfectadas1" maxlength="6"></td>
                    </tr >
                    <tr>
                    <th scope="row"><input type="number" name="cantidad2" maxlength="6"  required></th>
                    <th scope="row"><input type="text"  name="descripcion2" maxlength="30" size="40"></th>
                    <td><input type="number" name="precioUnitario2" maxlength="6"></td>
                    <td><input type="number" name="ventasExentas2" maxlength="6"></td>
                    <td><input type="number" name="ventasAfectadas2" maxlength="6"></td>
                    </tr >
                    <tr>
                    <th scope="row"><input type="number" name="cantidad3" maxlength="6"  required></th>
                    <th scope="row"><input type="text"  name="descripcion3" maxlength="30" size="40"></th>
                    <td><input type="number" name="precioUnitario3" maxlength="6"></td>
                    <td><input type="number" name="ventasExentas3" maxlength="6"></td>
                    <td><input type="number" name="ventasAfectadas3" maxlength="6"></td>
                    </tr >
                    
                    
                </tbody>
                </table>

                <br>
                <hr size="5">

                    <!--ENTREGADO POR-->
                    <table style="width:100%">
                
                    <tr>
                        <td>
                            <h5><center>ENTREGADO POR</center></h5>
                    <!--NOMBRE-->
                    <div class="col-10">
                    <label for="cliente" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="" name="nombreEmp" maxlength="25" require="true"> 
                </div>
                
                
                <!--DUI-->
                <div class="col-10">
                    <label for="nit" class="form-label">Dui:</label>
                    <input type="number" class="form-control" name="duiEmpl" id="nit" maxlength="17" pattern="[0-9]{8}-[0-9]{1}" placeholder="00000000-0" required> 
                </div>
                <!--FECHA-->
                <div class="col-10 ">
                    <label for="fecha" class="form-label">Fecha:</label>
                    <input type="date" class="form-control" id="" name="fechaR" required>
                </div>
                </td>

                    <td>
                <h5><center>RECIBIDO POR</center></h5>
                    
                    
                <!--NOMBRE-->    	
                <div class="col-10">
                    <label for="cliente" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="" name="clienteR" maxlength="25" require="true"> 
                </div>
                
                
                <!--DUI-->
                <div class="col-10">
                    <label for="nit" class="form-label">Dui:</label>
                    <input type="number" class="form-control" name="duiCl" id="nit" maxlength="17" pattern="[0-9]{8}-[0-9]{1}" placeholder="00000000-0" required> 
                </div>
                <!--FECHA-->
                <div class="col-10 ">
                    <label for="fecha" class="form-label">Fecha:</label>
                    <input type="date" class="form-control" id="" name="fechaCLR" required>
                </div>

                <!--Sumas y venta Total-->
                <td>
                <p>Sumas</p>
                <p>IVA</p>
                <p>Sub - Total</p>
                <p>(-) IVA Retenido</p>
                <p>Ventas Exentas</p>
                <p>Venta Total</p>
                <td>
                <!--SUMAS-->
                <div class="col-10">
                    <input type="number" class="form-control" id="sum" name="sumas" maxlength="25" require="true"> 
                </div>
                
                
                <!--IVA-->
                <div class="col-10">
                    
                    <input type="number" class="form-control" name="iva" id="i" maxlength="25" require="true"> 
                </div>

                <!--SUB - TOTAL-->
                <div class="col-10 ">
                    
                    <input type="number" class="form-control" id="s_total" name="subtotal" maxlength="25" require="true">
                </div>

                <!--(-) IVA Retenido-->
                <div class="col-10 ">
                    
                    <input type="number" class="form-control" id="ivaR" name="IvaRetenido" maxlength="25" require="true">
                </div>
                
                <!--Ventas Exentas-->
                <div class="col-10 ">
                    
                    <input type="number" class="form-control" id="ivaE" name="VentasExaentas" maxlength="25" require="true">
                </div>

                <!--Venta Total-->
                <div class="col-10 ">
                    
                    <input type="number" class="form-control" id="venta_t" name="VentaTotal" maxlength="25" require="true">
                </div>

                </tr>
                </table>
                <br>
                <hr size="5">
                <table class="table">
                    <div class="col-12 ">
                    <!--OBSERVACIONES-->
                    <label for="direc" class="form-label">Observaciones: </label>
                    <input type="text" class="form-control" id="" name="observaciones" maxlength="30">
                </div>
                <div class="col-12 ">
                    <!--CANCELADO-->
                    <label for="direc" class="form-label">Cancelado: </label>
                    <input type="text" class="form-control" id="" name="cancelado" maxlength="30">
                </div>
                </table>
                <br>

                <div class="col-12">
                    <center>
                <button class="btn btn-primary" type="submit" value="Enviar" name="btEnviar">Registrar</button>
                </div>
                </center>
                </div>
                <br>
                <br>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>