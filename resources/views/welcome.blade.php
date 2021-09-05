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
		<div class="col-6 	">
		
			1 of 2
		</div>
		<div class="col-xl-6 ">
			<form>
			
				<h3>¡Bienvenido nuevamente 2!</h3>
				<h6>Por favor inicie sesión con su cuenta</h6>
				<br>
				<div class="shadow p-3 mb-5 bg-white rounded">
				
					<div class="form-floating mb-3">
					  <input type="email" class="form-control border border-top-0 border-end-0 border-start-0 border border-3 border-warning" id="txtCorreoElectonico" placeholder="name@example.com">
					  <label for="floatingInput">Correo electrónico</label>
					</div>
					
					<div class="  form-floating mb-3">
					  <input type="password" class="form-control border border-top-0 border-end-0 border-start-0 border border-3 border-warning" id="txtContrasenna" placeholder="password">
					  <label for="floatingInput">Contraseña</label>
            
           
					</div>

          
          
					<div class="row mb-4">
					<div class="col d-flex justify-content-center">
					  <!-- Checkbox -->
					  <div class="form-check">
						<input  class="form-check-input custom-control-label " type="checkbox"  value="" id="form1Example3"/>
						<label class="form-check-label" for="form1Example3"> Mostrar contraseña </label>
					  </div>

            
					</div>
          <div class="col d-flex justify-content-center">
					  <!-- Checkbox -->
					  <a href="#!">¿Olvidó su contraseña?</a>

            
					</div>

					
		
				</div>

        
	  
				</div>
				
				<div class="row">
				<div class="col d-flex justify-content-center">
					<button  class="btn btn-sistema-naranja btn-lg btn-block">Iniciar sesión</button>
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
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropup">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Dropup</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown10">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div> -->
  </div>
</nav>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
