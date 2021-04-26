<?php 
require_once 'modulos/header.php';
?>
<body class="app sidebar-mini">
	<?php
      
	  //CABECERA
      include "modulos/cabecera.php";

      //MENU(izquierda)
       include "modulos/menu.php";

      //CONTENIDO CENTRAL
      echo '<main class="app-content">';
	  if(isset($_GET["ruta"])){

		if($_GET['ruta'] == "inicio"){
			
			include_once "modulos/".$_GET['ruta'].".php";
        
        }else{

          include "modulos/404.php";

        }

      }else{

        include "modulos/inicio.php";

      }
	  echo '</main>';
	  
	  ?>
</body>
<?php
require_once 'modulos/footer.php';
?>
