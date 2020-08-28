<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Surftware | Sistema de gestion de productos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		  <link href="<?php echo base_url(); ?>public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

		<!-- Page level plugin CSS-->
		<link href="<?php echo base_url(); ?>public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="<?php echo base_url(); ?>public/css/sb-admin.css" rel="stylesheet">
    <!-- Estilos del proyecto-->
    <link href="<?php echo base_url(); ?>public/css/estilo.css" rel="stylesheet">
	</head>
	<body id="page-top">
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo base_url(); ?>">
    <img src="<?php echo base_url(); ?>public/img/logos/creacion-paginas-web.png" alt="" class="logo_principal">
    </a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search -->
    <?php
    if ($this->session->userdata('login') === TRUE) {
    ?>
    <div class="d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <a class="navbar-brand mr-1" href="<?php echo base_url(); ?>">
    <img src="<?php echo base_url(); ?>public/img/logos/creacion-paginas-web.png" alt="" class="logo_principal">
    </a>
    </div>
    <div class="d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <a class="navbar-brand mr-1" href="<?php echo base_url(); ?>">
    <img src="<?php echo base_url(); ?>public/img/logos/creacion-paginas-web.png" alt="" class="logo_principal">
    </a>
    </div>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $this->session->userdata('Nombre');?> <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url(); ?>public/img/usuario/perfil.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Mi cuenta</h5>
          <p class="card-text">En este recuadro se ve la informacion de usuario una ves iniciada la session_abort.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nombre: <?php echo $this->session->userdata('Nombre');?></li>
          <li class="list-group-item">Contraseña: <?php echo $this->session->userdata('Pass');?></li>
          
        </ul>
      </div>
        </div>
      </li>
    </ul>
    <?php
    }
    ?>
  </nav>
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Inicio/index">
        <?php
          if ($this->session->userdata('login') === TRUE) {
          ?>
          <i class="fas fa-arrow-alt-circle-left"></i>
          <span>CERRAR SESION</span>
          <?php
          }
          if ($this->session->userdata('login') != TRUE || $this->session->userdata('login') == null){
         ?>
         
         <i class="fas fa-arrow-alt-circle-right"></i>
          <span>INICIO DE SESION</span>
         <?php
          }
         ?>
        </a>
      </li>
      <?php
      if ($this->session->userdata('login') == TRUE ){      
      ?>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" 
        aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-arrow-alt-circle-right"></i>
          <span>pendiente 1</span>
        </a>
        
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Sub Modulos:</h6>
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Inicio/pendiente"><i class="fas fa-arrow-alt-circle-right"></i> Inicio</a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/Platillos"><i class="fas fa-arrow-alt-circle-right"></i> Registros</a>
        </div>
      </li>
      <?php
      }
      ?>
    </ul>
	<div id="content-wrapper">
	<div class="container main">
      <?php
          //  contenido del cuerpo
					echo $content_for_layout;
			?>
	</div>
	<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row listaFooter">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mb-4 titilares text-center">Surftware</h5>
      <p class="letrafooter contenedorFooter"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia suscipit non accusamus ipsum commodi voluptatibus earum et vel, qui reprehenderit fugit aliquid fugiat eaque labore autem magnam ullam minima ipsa? </p>
    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mb-4 titilares text-center">CORREOS</h5>

      <ul class="list-unstyled contenedorFooter">
        <li>
          <p>
          <i class="far fa-envelope"></i>
            <a href="#!" class="letrafooter"> <br> pendiente.com</a>
          </p>
           
        </li>
        <li>
          <p>
          <i class="far fa-envelope"></i>
            <a href="#!" class="letrafooter"><br> pendiente.com</a>
          </p>
        </li>

      </ul>
      
    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

      <!-- Contact details -->
      <h5 class="font-weight-bold text-uppercase mb-4 titilares text-center">TELEFONOS</h5>

      <ul class="list-unstyled contenedorFooter">

        <li>
          <p class="letrafooter">
            <i class="fas fa-phone mr-3"></i> pendiente</p>
        </li>
        <li>
          <p class="letrafooter">
            <i class="fas fa-phone mr-3"></i> pendiente</p>
        </li>
        <li>
          <p class="letrafooter">
            <i class="fas fa-phone mr-3"></i> pendiente</p>
        </li>
        <li>
          <p class="letrafooter">
            <i class="fas fa-phone mr-3"></i> pendiente</p>
        </li>
        <li>
          <p class="letrafooter">
            <i class="fas fa-phone mr-3"></i> pendiente</p>
        </li>
        <li>
          <p class="letrafooter">
            <i class="fas fa-phone mr-3"></i> pendiente</p>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

      <!-- Social buttons -->
      <h5 class="font-weight-bold text-uppercase mb-4 titilares text-center">SOCIALES</h5>
      <ul class="list-unstyled contenedorFooter">
      <li>
          <p>
          <i class="fab fa-facebook-f"></i> FACEBOOK</p>
        </li>
        <li>
          <p class="letrafooter">
           pendiente</p>
        </li>
        <li>
          <p >
          <i class="fab fa-whatsapp-square"></i> WHATSAPP</p>
        </li>
        <li>
          <p class="letrafooter">
          pendiente</p>
        </li>
        <li>
          <p>
          <i class="fab fa-youtube"></i> YOUTUBE</p>
        </li>
        <li>
          <p class="letrafooter">
          pendiente</p>
        </li>
      </ul>
      <!-- Dribbble -->
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- Footer Links -->
<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="http://surftware.company"> Surftware</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
	</div>
    <!-- /.content-wrapper -->
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
 <!-- Bootstrap core JavaScript-->
 <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url(); ?>public/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url(); ?>public/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>public/vendor/datatables/dataTables.bootstrap4.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>public/js/sb-admin.min.js"></script>
  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url(); ?>public/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url(); ?>public/js/demo/chart-area-demo.js"></script>
</body>
</html>
