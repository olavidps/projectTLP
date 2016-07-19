<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Productos</title>
	<?php 
        require('include/header.php')
    ?>	
</head>

<body>
	<?php 
        require('include/nav.php')
    ?>	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Tablas</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Productos
						<button type="button" class="btn btn-success pull-right"  data-toggle="modal" data-target="#modalNuevo">Nuevo Producto</button>
					</div>					
					<div class="panel-body">
						<table data-toggle="table" data-url="./tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>						        
						        <th data-field="id" data-sortable="true">Item ID</th>
						        <th data-field="name"  data-sortable="true">Item Name</th>
						        <th data-field="price" data-sortable="true">Item Price</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="modalNuevo">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="modaNuevo">Nuevo producto</h4>
		      </div>
		      <div class="modal-body">
		        <form>
				  <div class="form-group">
				    <label for="input1">Codigo de producto</label>
				    <input class="form-control" id="input1" placeholder="Codigo">
				  </div>
				  <div class="form-group">
				    <label for="input2">Nombre</label>
				    <input type="password" class="form-control" id="input2" placeholder="Nombre">
				  </div>
				  <div class="form-group">
				    <label for="input3">Stock</label>
				    <input type="password" class="form-control" id="input3" placeholder="Stock">
				  </div>
				  <div class="form-group">
				    <label for="input4">Detalle</label>
				    <input type="password" class="form-control" id="input4" placeholder="Detalle">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputFile">Imagen</label>
				    <input type="file" id="exampleInputFile">				    
				  </div>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		        <button type="button" class="btn btn-primary">Guardar</button>
		      </div>
		    </div>
		  </div>
		</div>
		
	</div><!--/.main-->
	<?php 
        require('include/footer.php')
    ?>	

</body>

</html>
