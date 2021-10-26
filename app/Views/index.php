
 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url()?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="letrados" style="font-size:17px;">ADMINISTRADOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>/public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block letrados"  style="font-size:14px;">BRALLAN BORH</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar letrados" type="search" placeholder="buscar" aria-label="Search">
          <div class="input-grou  p-append">
        
            
        
          
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p class="letrados">
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a onclick="cargarcontenido('content-wrapper', 'app/Views/facturacion.php')"class="nav-link active letrados" style="cursor: pointer;">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="letrados">Facturacion</p>
                </a>
              </li>
              
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 letrados">Facturacion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item letrados"><a href="http://localhost/taller/">inicio</a></li>
              <a onclick="cargarcontenido('content-wrapper', 'app/Views/facturacion.php')" class="breadcrumb-item active letrados " style="cursor:pointer;">facturas</a>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container" id="container">
 <div class="row">
 <div class="col-md-6 mt-2">
     <h3 class="letra d-flex justify-content-center">informacion de facturacion</h3>
     <hr class="hr">

<form id="formulario">
  
 <div class="container">
<div class="row">
  <div class="form-group col-md-6">
    <label for="nit" class="letrados text-muted">nit</label>
    <input type="text" class="form-control letrados" id="nit" name="nit" placeholder="ingrese cedula">
    <small id="ingrese cnum eros" class="form-text text-muted letrados">solo numeros</small>
  </div>
  <div class="form-group col-md-6">
    <label for="cedula" class="letrados text-muted">nombres completos</label>
    <input type="text" class="form-control letrados" id="nombres" name="nombres"  placeholder="ingrese nombres">
    <small id="ingrese o numeros" class="form-text text-muted letrados">solo letras</small>
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6">
    <label for="telefono" class="letrados text-muted">telefono</label>
    <input type="text" class="form-control letrados" id="telefono" name="telefono"  placeholder="ingrese telefono">
    <small id="ingrese c" class="form-text text-muted letrados">solo numeros maximo 10 caracteres</small>
  </div>
  <div class="form-group col-md-6">
    <label for="nit o cedula" class="letrados text-muted">direccion</label>
    <input type="text" class="form-control letrados" id="direccion" name="direccion" placeholder="ingrese direccion">
    <small id="ingrese nit solo" class="form-text text-muted letrados">con nomenclatura y barrio</small>
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6">
    <label for="correo" class="letrados text-muted">correo</label>
    <input type="email" class="form-control letrados" id="correo" name="correo" placeholder="ingrese correo">
    <small id="ingrese correo valido" class="form-text text-muted letrados">correo electronico</small>
  </div>
  <div class="form-group col-md-6">
    <label for="contrasena" class="letrados text-muted">contraseña</label>
    <input type="password" class="form-control letrados" id="contrasena" name="contrasena" placeholder="ingrese contraseña">
    <small id="ingrese" class="form-text text-muted letrados">minimo 8 caracteres</small>
  </div>
  </div>
  
  
  
  </div>
  <button id="btn" class="btn btn-primary btn-block">registrar</button>
</form>
   
 </div>
 <div class="col-md-6">

 <a class="nav-link d-flex justify-content-center letratres"  style="font-size: 20px; cursor:pointer;  font-family:cursive;">Informacion de clientes <input name="inputs" type="text"  placeholder="buscar"  class="form-control letrados" style="background-color: gainsboro; border-radius: 3px;  width: 30%;  margin-left:50px;" id="inputss"> <i class="fas fa-search icono" style="font-size: 25px;" id="buscar"></i></a>
 
 <div class="card-body">
                <table class="display table-bordered table-hover " style="width:100%">

                <tr>
                  <th>nombres</th>
                  <th>telefono</th>
                  <th>direccion</th>
                  <th>email</th>
                  <th>acciones</th>
                </tr>
               <tbody  id="cliente"></tbody>
              </table>
              </div>
  <div class="modal fade" id="editcliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="letra" id="exampleModalLabel">actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
<form id="edit">
   
   <div class="container">
  <div class="row">
    <div class="form-group col-md-6">
      <label for="nit" class="letrados text-muted">nit</label>
      <input type="text" class="form-control letrados" id="nit2" name="nit"   readonly>
      <small id="ingrese cedula solo numeros" class="form-text text-muted letrados">nit</small>
    </div>
    <div class="form-group col-md-6">
      <label for="cedula" class="letrados text-muted">nombres completos</label>
      <input type="text" class="form-control letrados" id="nombres2" name="nombres"  placeholder="ingrese nombres">
      <small id="ingrese nit solo numeros" class="form-text text-muted letrados">solo letras</small>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-6">
      <label for="telefono" class="letrados text-muted">telefono</label>
      <input type="text" class="form-control letrados" id="telefono2" name="telefono"  placeholder="ingrese telefono">
      <small id="ingrese cedula solo numeros" class="form-text text-muted letrados">solo numeros maximo 10 caracteres</small>
    </div>
    <div class="form-group col-md-6">
      <label for="nit o cedula" class="letrados text-muted">direccion</label>
      <input type="text" class="form-control letrados" id="direccion2" name="direccion" placeholder="ingrese direccion">
      <small id="ingrese nit solo numeros" class="form-text text-muted letrados">con nomenclatura y barrio</small>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-6">
      <label for="nit o cedula" class="letrados text-muted">correo</label>
      <input type="email" class="form-control letrados" id="correo2" name="email" placeholder="ingrese correo">
      <small id="ingrese cedula solo numeros" class="form-text text-muted letrados">correo electronico</small>
    </div>
    <div class="form-group col-md-6">
      <label for="contrasena" class="letrados text-muted">contraseña</label>
      <input type="password" class="form-control letrados" id="contrasena2" name="contrasena" placeholder="ingrese contraseña">
      <small id="ingrese nit solo numeros" class="form-text text-muted letrados">ingrese su contraseña para continuar</small>
    </div>
    </div>
    
    
    
    </div>
    <button id="btn2" class="btn btn-primary btn-block">guardar cambios</button>
  </form>
      </div>
    
    </div>
  </div>
</div>   
 </div>

 </div>

 </div>  





      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  