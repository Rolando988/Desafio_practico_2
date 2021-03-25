<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
            <div class="card-header">INGRESAR DATOS DEL LIBRO</div>
            <div class="card-body">
<form id="form1" action= "mostrar.php" method="post" class="needs-validation" novalidate >
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="autor">Autor</label>
                      <input name="autor" type="text" class="form-control" id="autor" placeholder="" value="" required>
                       
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="titulo">Titulo del Libro</label>
                      <input name="titulo" type="text" class="form-control" id="titulo" placeholder="" value="" required> 
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="numero">Numero de Edicion</label>
                      <input name="numero" type="text" class="form-control" id="numero" placeholder="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="publicacion">Lugar de Publicacion</label>
                        <input name="publicacion" type="text" class="form-control" id="publicacion" placeholder="" aria-describedby="inputGroupPrepend" required> 
                      </div>

                      <div class="form-row">
                      <div class="col-md-4 mb-3">
                      <label for="editorial">Editoral</label>
                      <input name="editorial" type="text" class="form-control" id="editorial" placeholder="" value="" required>
                       
                    </div>
              
                    <div class="col-md-4 mb-3">
                      <label for="año">Año de Edicion</label>
                      <input name="año" type="text" class="form-control" id="año" placeholder="" value="" required> 
                    </div>
          

                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="pagina">Numero de Paginas</label>
                      <input name="pagina" type="text" class="form-control" id="pagina" placeholder="" required>
                    </div>

                    <div class="col-md-4 mb-3">
                      <label for="notas">Notas</label>
                        <input name="notas" type="text" class="form-control" id="notas" placeholder="" aria-describedby="inputGroupPrepend" required> 
                      </div>
                      

                      <div class="col-md-4 mb-3">
                      <label for="isbn">ISBN</label>
                        <input name="isbn" type="text" class="form-control" id="isbn" placeholder="" aria-describedby="inputGroupPrepend" required> 
                      </div>
                    
                  <button class="btn btn-primary" type="submit" name="validar">Enviar</button>
                  
                </form>
                </div>
                </div>
                </div>
                </div>
                </div>
<!--form name="formulario" method="post" action="ejemploPost.php">

Autor: <input type="text" name="nombre" value="">
<br>
Titulo del Libro: <input type="text" name="titulo" value="">
<br>
Numero de Edicion: <input type="text" name="edicion" value="">
<br>
Lugar de Publicacion: <input type="text" name="publicacion" value="">
<br>
Editorial: <input type="text" name="editorial" value="">
<br>
Año de Edicion: <input type="text" name="año" value="">
<br>
Numero de Paginas: <input type="text" name="numero" value="">
<br>
Notas: <input type="text" name="notas" value="">
<br>
ISBN: <input type="text" name="isbn" value="">
<br>

<input type="submit" />

</form-->
<script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>  
</body>
</html>