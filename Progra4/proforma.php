
<!-- saved from url=(0037)http://localhost/Progra4/proforma.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proforma</title>
    <link rel="stylesheet" href="./proforma_files/styles.css">
    <link rel="stylesheet" href="./proforma_files/simple-sidebar.css">
    <link href="./proforma_files/bootstrap.min.css" rel="stylesheet">
    <link href="./proforma_files/font-awesome.min.css" rel="stylesheet">
    <link href="./proforma_files/icon" rel="stylesheet">
    <link rel="stylesheet" href="./proforma_files/materialize.min.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Kozko</div>
            <div class="list-group list-group-flush">
                <li><a href="http://localhost/Progra4/index.php"><i class="material-icons">dashboard</i><span>Dashboard</span></a></li>
<li><a href="http://localhost/Progra4/proforma.php"><i class="material-icons">point_of_sale</i><span>Proforma</span></a></li>
<li><a href="http://localhost/Progra4/productos.php"><i class="material-icons">shopping_cart</i><span>Productos</span></a></li>
<li><a href="http://localhost/Progra4/clientes.php"><i class="material-icons">people</i><span>Clientes</span></a></li>
<li><a href="http://localhost/Progra4/proveedores.php"><i class="material-icons">local_shipping</i><span>Proveedor</span></a></li>
<li><a href="http://localhost/Progra4/reportes.php"><i class="material-icons">insert_chart_outlined</i><span>Reporte</span></a></li>            </div>
        </div>



        <div id="page-content-wrapper">
            
            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-2">
                    <label>FACTURA No</label>
                    <input type="text" class="form-control" id="txtFactura No" name="txtFactura No">
                </div>
				
			<div class="col-2">	
			<label>Fecha:</label>
				<input type="date" id="txtfecha" name="txtfecha" class="form-control" value="2020-11-20" required="">
			</div>
				
				 <div class="col-2">
                    <br>
                    <!-- <input type="submit" class="btn btn-info" id="btnAgregar" name="btnAgregar" value="Agregar Cliente" /> -->
                    <button class="btn waves-effect waves-light blue accent-4 btn-large boton" type="submit" name="action">Orden de Compra</button>
                </div>
				
                <div class="col-2">
                    <br>
                    <!-- <input type="submit" class="btn btn-success" id="btnConsultar" name="btnConsultar" value="buscar" /> -->
                    <button class="btn waves-effect waves-light blue accent-4 btn-large boton" type="submit" name="action">Nueva Factura</button>
                </div>
           
            </div>
			<div class="row">
				<div class="col-2">
                    <label>Tipo de moneda</label>
                    <select class="form-control" id="cboTipodeMoneda" name="cboTipodeMoneda" size="1">
                        <option value="0">--Todas--</option>
						<option value="1">Colones</option>
                        <option value="2">Dólares</option>
                    </select>
                </div>
				
				<div class="col-2">
                    <label>Vendedor</label>
                    <select class="form-control" id="cboVendedor" name="cboVendedor" size="1">
                        <option value="0">--Todas--</option>
						<option value="1">Administrador</option>
                        <option value="2">Cajero</option>
                    </select>
                </div>
				
				<div class="col-2">
                    <label>Bodega</label>
                    <select class="form-control" id="cboBodega" name="cboBodega" size="1">
                        <option value="0">--Todas--</option>
						<option value="1">Bodega Principal</option>
                        <option value="2">Bodega de Inventarios</option>
                    </select>
                </div>
			</div>
			<br>
			
			<div class="row">
			<div class="col-2">
                    <label>Cliente(*)</label>
                    <input type="text" class="form-control" id="txtCedula" name="txtCedula">
            </div>
			
			<div class="col-2">
                    <label>Venta</label>
                    <select class="form-control" id="cboVenta" name="cboVenta" size="1">
                        <option value="0">--Todas--</option>
						<option value="1">Contado</option>
                        <option value="2">Crédito</option>
                    </select>
                </div>
			</div>
			
			</br>
			
			<div class="col-2">
                    <label>Observaciones</label>
                    <input type="textarea" class="form-control" id="txtObservaciones" name="txtObservaciones" style="
    width: 600.66666px;
    height: 200 px;
    height: 113.16666000000001px;
    padding-right: 10.;
">
            </div>
					
            <br>
            <br>
            <div class="row">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Prodcuto</th>
                            <th>Cantidad</th>
                            <th>Precio sin IV</th>
                            <th>Precio Unitario</th>
                            <th>Descuento</th>
                            <th>IV</th>
							<th>Total</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr><td colspan="7">No hay datos disponibles en la tabla</td></tr>
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    

    <script src="./proforma_files/feather.min.js.descarga"></script>
    <script>
        feather.replace()
    </script>
</body></html>