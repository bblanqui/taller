<footer class="main-footer">
    <!-- To the right -->
  
    <!-- Default to the left -->
    <strong class="letrados"> Copyright &copy; 2014-2021 <a  class="letrados"href="https://adminlte.io">Computec</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="<?= base_url()?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/public/dist/js/adminlte.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- validate -->
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  function cargarcontenido(contenedor,contenido){
    $("."+contenedor).load(contenido)

  }
</script>
<script >




$.ajax({

  url:"./home/all",
  type:"GET",
  success: function(response){

   let cliente = JSON.parse(response)
   let template=''

   cliente.forEach(item => {
    template +=`<tr><td>
${item.nombre}</td>
<td>
${item.telefono}</td>

<td>
${item.direccion}</td>

<td>
${item.correo}</td>
<td> <a data-id="${item.id}" data-nombre="${item.nombre}" id="delete"> <i class="fas fa-trash-alt icono"></i></a> <a data-target="#editcliente" data-toggle="modal" id="editar" data-id="${item.id}" data-nombre="${item.nombre}"> <i class="fas fa-user-edit icono"></i></a>  </td>




</tr>
`
   });
   $("#cliente").html(template)
  }





})

</script>
<script src="<?php echo base_url()?>/public/dist/js/validformulario.js"></script>
<script src="<?php echo base_url()?>/public/dist/js/traductor.js"></script>
<script src="<?php echo base_url()?>/public/dist/js/deletecliente.js"></script>
<script src="<?php echo base_url()?>/public/dist/js/validedit.js"></script>
<script src="<?php echo base_url()?>/public/dist/js/crearcliente.js"></script>
<script src="<?php echo base_url()?>/public/dist/js/buscarcliente.js"></script>
<script src="<?php echo base_url()?>/public/dist/js/factura.js"></script>
</body>
</html>
