<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!-- Styles -->
        
        <!-- CSS only  pruene-->
<link href="../css/bootstrap.min.css" rel="stylesheet"   >
<!-- JavaScript Bundle with Popper --> 


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        
      }

      .custom-control-label:before{
  background-color:red;
}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  .btn-sistema-naranja{
		background-color: #F0AC3F;
		color: white;
	  }
	  .footer-sistema{
		background-color: #414852;
	  }
	  
	  input:focus, textarea:focus, select:focus{
        outline: none;
    }
	  
    </style>

    
  </head>
  <body>
    
<main class="container">
<br>
<br>
  <!-- <div class="bg-light p-5 rounded mt-3">
    
	
	
  </div> -->
  
  <div class="form-group">
	  <div class="row">
		<div class="col-xl-5 ">
        <h3>Cambio de contraseña</h3>
        <p>Recuerde, para tener una contraseña segura debe cumplir con las siguientes reglas de seguridad:</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">1. Debe incluir números.</li>
            <li class="list-group-item">2. Utilice una combinación de letras mayúsculas y minúsculas.</li>
            <li class="list-group-item">3. Incluya caracteres especiales: -*?!@#$/(){}=.,::</li>
            <li class="list-group-item">4. Tenga una longitud mayor o igual a 8 caracteres.</li>
            <li class="list-group-item">5. No debe tener espacios en blanco.</li>
        </ul>
    
		</div>
        <div class="col-xl-1 	">
        </div>
		<div class="col-xl-5 ">
			<form class="">
			<br><br>
					<div class="form-floating mb-3 ">
					  <input type="email" class="form-control  border-warning" id="txt_contrasenna_temporal" placeholder="name@example.com" >
					  <label for="floatingInput">Contraseña temporal</label>
					</div>

            <div class="form-floating mb-3 ">
					  <input type="email" class="form-control  border-warning" id="txt_nueva_contrasenna" placeholder="name@example.com" >
					  <label for="floatingInput">Nueva contraseña</label>
					</div>

                    <div class="form-floating mb-3 ">
					  <input type="email" class="form-control  border-warning" id="txt_confirmar_nueva_contrasenna" placeholder="name@example.com" >
					  <label for="floatingInput">Confirmar nueva contraseña</label>
					</div>
			<br>
				<div class="row">
				<div class="col d-flex justify-content-center">
					<button id="btn_cambiar_contrasenna" class="btn btn-sistema-naranja btn-lg btn-block">Cambiar contraseña</button>
				</div>
	  
				</div>
				
			</form>  
		</div>
	  </div>
	  
	  
	  
    </div>
</main>
<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark  footer-sistema">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Legacy</a>
    
  </div>
</nav>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
