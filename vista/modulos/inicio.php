<!---title menu-->
<div class="title-inicio mt-3">
  <div class="pt-3">
    <p class="w-100 text-muted"> Nombre del Flujo: <input class="ml-3 pl-2 input-inicio" type="text" value="Documentos"> </p>
  </div>
  <ul class="app-nav">
    <li class="h4"><a href="#"><i class="color-flecha fas fa-arrow-alt-circle-left"></i></a></li>
  </ul>
</div>
<!---menu-->
<div>
  <div class="container">
  <ul class="nav-inicio">
    <li class="mx-3 h6"><a class="nav-inicio-item" href="#">Etapas</a></li>
    <li class="mx-3 h6"><a class="nav-inicio-item" href="#">Acciones</a></li>
    <li class="mx-3 h6"><a class="nav-inicio-item" href="#">Funciones</a></li>
    <li class="mx-3 h6"><a class="nav-inicio-item" href="#">Formulario</a></li>
    <li class="mx-3 h6"><a class="nav-inicio-item" href="#">Template</a></li>
    <li class="mx-3 h6"><a class="nav-inicio-item" href="#">SLA</a></li>
    <li class="mx-3 h6"><a class="nav-inicio-item" href="#">Notificaciones</a></li>
  </ul>
  </div>
</div>
<!---calendar-->
<div class="container">
  <div class="ml-5 pl-4">
  <p class="font-weight-bold mt-3  py-1 px-2 ml-5 pl-3 borde_fecha"><span class="text-muted pt-0 mx-2" >Horario laboral</span><i class="ml-1 mr-3 text-muted far fa-calendar-alt"></i></p>
  </div>
</div>
<!---cuadritos-->

  <div class="container">
  <ul class="nav-inicio">
    <li class=" h6"><a class="nav-inicio-item1" href="#">CREADO</a></li>
    <li class=" h6"><a class="nav-inicio-item2" href="#">EN GESTIÓN</a></li>
    <li class=" h6"><a class="nav-inicio-item2" href="#">ENTREGADO</a></li>
    <li class=" h6"><a class="nav-inicio-item2" href="#">EN FIRMA</a></li>
    <li class=" h6"><a class="nav-inicio-item2" href="#">EN FIRMA</a></li>
  </ul>
  </div>

<!---time-->
  <div class="container pt-3 mt-3">
    <ul class="nav-inicio">
      <li class="text-muted font-weight-bold mt-2 ml-3"><p>SLA</p></li>
      <li class="mx-2"><button class="button-conf" data-toggle="modal" data-target="#modal-config"><i class="text-muted fas fa-cog"></i></button></li>
      <li class="barra-v"></li>
      <li class="mt-3 barra-h"></li>
      <li class="barra-v"></li>
      <li class="text-muted font-weight-bold mt-2 ml-3"><p>15 dias</p></li>
    </ul>
  </div>
  <div>
    <ul class="nav-inicio text-muted">
      <li class="mr-2 pr-5 "><p>Inicio</p></li>
      <li class="mr-5 pr-5 ml-5 pl-5"><p>4 dias</p></li>
      <li class="mr-5 pr-5  ml-5 pl-5"><p>7 dias</p></li>
      <li class="ml-2 pl-5 "><p>Fin</p></li>
    </ul>
  </div>

  <!----buttons-->
<div class="contaienr">
  <ul class="buttons">
    <li>
      <button class="btn btn-content p-1 px-4 mx-2 mt-3 ">Guardar</button>
    </li>
    <li>
      <button class="btn btn-content p-1 px-4 mx-2 mt-3 ">Siguiente</button>
    </li>
  </ul>

</div>



<!-- Modal -->
<div class="modal fade" id="modal-config" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="m-2">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class=" salir fas fa-times-circle"></i></span>
        </button>
      </div>
      <div class="text-center">
        <h6 class="modal-title" id="exampleModalLongTitle">Configuración SLA</h6>
      </div>
      
      <div class="modal-body">
        <ul class="nav-inicio text-muted">
          
          <li><button class="btn btn-cabecera p-1 px-2 mx-2 ">15</button>
          <li class="mr-2 pr-5 pt-1"><p>días</p></li>
        </ul>
        <ul class="nav-inicio p-0">
          <li class="text-muted  mt-2 mr-3"><p>Inicio</p></li>
          <li class="barra1-v"></li>
          <li class="mt-3 barra1-h"></li>
          <li class="barra1-v"></li>
          <li class="text-muted mt-2 ml-3"><p>FIN</p></li>
        </ul>
        <div class="container ralla">
          <div class="row row-inicio">
            <div class="col-lg-2 pr-0">
              <p class=" text-muted "> Por Periodo</p>
            </div>
            <div class="col-lg-3">
              <select class="  py-1 select-modal" type="text" ><option value="">Desde</option></select></br>
              <select class="mt-2  py-1 select-modal" type="text" ><option value="">Hasta</option></select>
            </div>
            <div class="text-muted col-lg-3 text-center">
              <p class="">Días</p><p><input class="input-modal" type="text"><i class="ml-2 fas fa-plus"></i></p>
            </div>
            <div class="col-lg-3 text-muted text-center">
              <p class="  ">Alertas Días<i class="pl-2 fas fa-exclamation-circle"></i></p>
              <p><i class="fas fa-minus mr-3"></i><input class="input-modal" type="text"><i class="ml-3 fas fa-plus"></i></p>
            </div>
            <div class="col-lg-1 text-muted text-center">
            <br><p><i class="pt-2 mt-2 far fa-trash-alt"></i></p>
            </div>
          </div>
        </div>
        <div class="container ralla pt-3">
          <div class="row row-inicio">
            <div class="col-lg-2 pr-0">
              <br><p class="mt-2 pt-2 text-muted "> Por Etapa</p>
            </div>
            <div class="col-lg-3">
            </br>
              <select class="mt-3 py-1 select-modal" type="text" ><option value="">Hasta</option></select>
            </div>
            <div class="text-muted col-lg-3 text-center">
              <p class="">Días</p><p><input class="input-modal" type="text"><i class="ml-2 fas fa-plus"></i></p>
            </div>
            <div class="col-lg-3 text-muted text-center">
              <p class="  ">Alertas Días<i class="pl-2 fas fa-exclamation-circle"></i></p>
              <p><i class="fas fa-minus mr-3"></i><input class="input-modal" type="text"><i class="ml-3 fas fa-plus"></i></p>
            </div>
            <div class="col-lg-1 text-muted text-center">
            <br><p><i class="pt-2 mt-2 far fa-trash-alt"></i></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <ul class="app-nav text-muted">
          <li class="mr-5"><p class="font-weight-bold">Total SLA</p></li>
          <li class="mr-3"><p class="font-weight-bold">15</p></li>
        </ul>
      </div>
      <div class="container mb-5">
        <ul class="app-nav ">
        <button class="btn btn-content p-1 px-4 mx-2">Guardar</button>
        </ul>
      </div>
    </div>
  </div>
</div>
