<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Drop Down Sidebar Menu | CodingLab </title>
    
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link href="../css/bootstrap.min.css" rel="stylesheet"   >
     <link href="../css/layout.css" rel="stylesheet">
     <script src="../js/general/layout.js"></script>
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">POS.ADMIN</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <!-- <i class='bx bx-grid-alt' ></i> -->
          <i class='bx bxs-bank'></i>
          <span class="link_name">Institución</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Institución</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <!-- <i class='bx bx-grid-alt' ></i> -->
          <i class='bx bx-store-alt'></i>
          <span class="link_name">Sucursal</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Sucursal</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bxs-user'></i>
            <span class="link_name">Usuario</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Usuario</a></li>
          <li><a href="#">Gestión</a></li>
          <li><a href="#">Relacionar usuario con sucursal</a></li>
          
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx bxs-user-badge'></i>
            <span class="link_name">Roles</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Roles</a></li>
          <li><a href="#">Gestión</a></li>
          <li><a href="#">Relacionar rol a sucursal</a></li>
          <li><a href="#">Relacionar rol a usuario</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="image/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Prem Shahi</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  
  </div>
  
  <section class="home-section">
    <nav class="navbar navbar-expand-md	 menu-top border-start  border-warning">
    <div class="home-content">
		
			<i class='bx bx-menu' ></i>
		
      
      <span class="text"></span>
    </div>
	<div class="container">
      <a class="navbar-brand" href="#">Container</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
        </ul>
        
		
                        <ul class="nav navbar-nav ml-auto">
						<li class="nav-item">
						<a class="nav-link" ><img src="image/profile.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50"></a>
                                
                            </li>
							<li class="nav-item">
            
          </li>
                            <li class="nav-item">
										<a class="nav-link" >
										<span id="spanNombre Usuario" class="text-white class="nav-link active"">CHRISTIAN ALONSO CALVO PADILLA</span>

                                <br />
								
                                <span id="spanNombre Usuario" class="text-white" >Último sesion | 1994-06-01 00:45:00</span>
										</a>
                                

                            </li>
							<li class="nav-item">
								<a class="nav-link">
                                <span id="spanNombre Usuario" class="text-white" >
								<i class='bx bx-log-out' ></i></span>
								</a>

                            </li>
                            
                            

                           
                        </ul>
                   
      </div>
    </div>
	</nav>
  @yield('panchito')  
  </section>


</body>
</html>
