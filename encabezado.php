<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- ARCHIVOS DEL MENU -->
<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/twitter-bootstrap-hover-dropdown.min.js"></script>
<link href="css/estilos.css" type="text/css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background: rgba(0,0,0,0.8);">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><img width="100px" height="100px" src="images/ss2.jpg" title="Logo" alt="Logo"></a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">

	<ul class="nav navbar-nav navbar-center" style="height:120px;">
 
      <li class="dropdown">
        <a href="index.php" style="text-align:center;cursor:pointer;">
          INICIO
        </a>
      </li>

      <li class="dropdown">
        <a data-toggle="modal" data-target="#Portafolio" style="cursor:pointer;">
          PORTAFOLIO
        </a>
      </li>

      <li class="dropdown">
        <a data-toggle="modal" data-target="#Curriculum" style="cursor:pointer;">
          CURRICULUM
        </a>
      </li>

      <li class="dropdown">
        <a data-toggle="modal" data-target="#Trabajos" style="cursor:pointer;">
          TRABAJOS
        </a>
      </li>

      <li class="dropdown">
        <a data-toggle="modal" data-target="#Contacto" style="cursor:pointer;">
          CONTACTO
        </a>
      </li>
      
    
    </ul>
  </div>
</nav>
</div>
</body>
</html>