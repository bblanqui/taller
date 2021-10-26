<div class="container" id="container">
 <div class="row">
 <div class="col-md-6 mt-2">
 <a href="http://localhost/taller/" class="breadcrumb-item active letrados " style="cursor:pointer;"><i class="fas fa-long-arrow-alt-left"  style="font-size: 25px;"></i></a>
     <h3 class=" d-flex justify-content-center" style=" color: #eb0f08; font-family:cursive;">informacion de facturas</h3>
     <hr style="  background-color:#eb0f08;   border: 5px;  height: 4px; ">

<form id="formularios">
  
 <div class="container">
<div class="row">
  <div class="form-group col-md-6">
    <label for="nit" class="letrados text-muted">nit</label>
  <select name="nits" id="nitss" class="form-control" style="border-color: blue; border-radius: 3px;    background-color: gainsboro;">
  
  
</select>
    <small id="ingrese cnum eros" class="form-text text-muted letrados">solo numeros</small>
  </div>
  <div class="form-group col-md-6">
    <label for="cedula" class="letrados text-muted">fecha</label>
    <input type="date" class="form-control letrados" id="fecha" name="fecha"   style="border-color: blue; border-radius: 3px;    background-color: gainsboro;">
    <small id="ingrese o numeros" class="form-text text-muted letrados">solo fecha</small>
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6">
    <label for="telefono" class="letrados text-muted">forma de pago</label>
    <select name="pagos" id="pagos" class="form-control" style="border-color: blue; border-radius: 3px;    background-color: gainsboro;" name="pagos">
    <option value="1" selected>efectivo</option>
    <option value="2">targeta de credito</option>
 </select>
    <small id="ingrese c" class="form-text text-muted letrados">seleccione forma de pago</small>
  </div>
  <div class="form-group col-md-6">
    <label for="nit o cedula" class="letrados text-muted">valor</label>
    <input type="text" class="form-control letrados" id="valor" name="valor" placeholder="valor" style="border-color: blue; border-radius: 3px;    background-color: gainsboro;">
    <small id="ingrese nit solo" class="form-text text-muted letrados">ingrese valor solo enteros</small>
  </div>
  </div>
  <div class="row">
  <div class="form-group col-md-6" id="saldoss">
    <label for="correo" class="letrados text-muted">saldo</label>
    
    <small id="ingrese correo valido" class="form-text text-muted letrados">saldo disponible</small>
  </div>

  <div class="form-group col-md-6" id="saldaos">
  
  </div>
  
  </div>
  
  
  
  </div>
  <button style="   background-color:  #eb0f08;   border-radius: 5px; font-family:cursive;" class="btn btn-primary btn-block">registrar</button>
</form>
   
 </div>
 <div class="col-md-6">

 <a class="nav-link d-flex justify-content-center letratres"  style="font-size: 20px; cursor:pointer;  font-family:cursive;">Informacion de clientes <input name="inputs" type="text"  placeholder="buscar"  class="form-control letrados" style="background-color: gainsboro; border-radius: 3px;  width: 30%;  margin-left:50px;" id="inputss"> <i class="fas fa-search icono" style="font-size: 25px;" id="buscarf"></i></a>
 
 <div class="card-body">
                <table class="display table-bordered table-hover " style="width:100%">

                <tr>
                  <th>id</th>
                  <th>nit</th>
                  <th>fecha</th>
                  <th>forma de pago</th>
                  <th>valor</th>
                  <th>saldo</th>
                  <th>acciones</th>
                </tr>
               <tbody  id="factura"></tbody>
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
    <button  style="   background-color:  #eb0f08;   border-radius: 5px; font-family:cursive;" class="btn btn-primary btn-block">guardar cambios</button>
  </form>
      </div>
    
    </div>
  </div>
</div>   
 </div>

 </div>

 </div>  


 <script>

listar()
function listar (){

$.ajax({

 url:"./Facturas/all",
 type:"GET",
 success: function(response){

  let cliente = JSON.parse(response)
  let template=''
  let templatedos=''
  

  cliente.forEach(item => {
   
    
      if(item.formaPago == 1){
       texto="efectivo"
      }else{
        texto="targeta de credito"
      }
  
   template +=`<tr><td>
${item.id}</td>
<td>${item.nits}</td>
<td>${item.fecha}</td>
<td>${texto}</td>
<td>${item.valor}</td>
<td>${item.saldo}</td>
<td> <a data-id="${item.nits}" data-nombre="${item.nits}" id="deletef"> <i class="fas fa-trash-alt icono"></i></a> <a data-target="#editcliente" data-toggle="modal" id="editar" data-id="${item.nits}" data-nombre="${item.nits}"> <i class="fas fa-user-edit icono"></i></a>  </td>




</tr>

`


  });


  $("#factura").html(template)
 
 }





})

}



 </script>

 <script>


listas()
    function listas (){

$.ajax({

 url:"./home/all",
 type:"GET",
 success: function(response){

  let cliente = JSON.parse(response)
  let template=''
  

  cliente.forEach(item => {
     
   template +=` <option value="${item.nit}" id="selectt">${item.nombre}</option>`
  });
 

  $("#nitss").html(template)



  $(document).on('change', '#nitss', function (e){

  
let elemento = $(this);
 
 id= elemento.val()
 fetch(`Facturas/buscar/${id}`,{
          method:"POST",
          body:id
  
         }).then(res =>{
             if (res.ok == true){
               return res.json()
           
             }else{
           
               return  Promise.reject(res)
             }
         }).then(res=>{
        
        if(res=="no"){
  
          Swal.fire(
            `el cliente esta registrado pero sin saldo ni factura`,
            `se habilito la opcion de añadir saldo `,
           
        'success'
        )

        $("#saldaos").html(`<label for="telefono" class="letrados text-muted">monto a asignar</label>
    <input name="saldaos" id="saldaosid" class="form-control" style="border-color: blue; border-radius: 3px;    background-color: gainsboro;">
    </input>
    <small id="ingrese c" class="form-text text-muted letrados">ingrese saldo</small>`)
    $("#saldoss").html('')
    let template=''
    let templatedos=''
  
        }else{
          console.log(res)
          let template=''
          let templatedos=''
          $("#saldaos").html('')
        

  res.forEach(item => {
   
    console.log(item)
      if(item.formaPago == 1){
       texto="efectivo"
      }else{
        texto="targeta de credito"
      }
  
   template +=`<tr><td>
${item.id}</td>
<td>${item.nits}</td>
<td>${item.fecha}</td>
<td>${texto}</td>
<td>${item.valor}</td>
<td>${item.saldo}</td>
<td> <a data-id="${item.nits}" data-nombre="${item.nits}" id="deletef"> <i class="fas fa-trash-alt icono"></i></a> <a data-target="#editcliente" data-toggle="modal" id="editar" data-id="${item.nits}" data-nombre="${item.nits}"> <i class="fas fa-user-edit icono"></i></a>  </td>




</tr>

`


  });


  $("#factura").html(template)


      valor=[]

       suma=0
       for(var i=0; i<res.length; i++){
           valor.push(parseInt(res[i].valor))
           
       }
       
      valor.forEach(itemss=>{
       suma +=itemss
     
      })
      
       sumas= parseInt(res[0].saldo) -suma
     

       if(sumas == 0){
        Swal.fire(
            `el cliente con cedula ${res[0].nits}`,
            `esta a paz y salvo`,
           
        'success'
        )
       }
       
        $("#saldoss").html(`<label for="correo" class="letrados text-muted">saldo</label>: <span style="font-family:cursive; color:red;">$${sumas}</span>`)
  
        }
         })

 console.log(id)
  })

 }





})
}

 </script>

 <script>



      
     $(document).on('click', '#deletef', function (e){
        let elemento = $(this)[0];
        console.log(this) 
       id= elemento.getAttribute("data-id")
       nombre = elemento.getAttribute("data-nombre")
      
      
      e.preventDefault()
        
fetch(`Facturas/buscar/${id}`,{
         method:"POST",
         body:id
 
        }).then(res =>{
            if (res.ok == true){
              return res.json()
          
            }else{
          
              return  Promise.reject(res)
            }
        }).then(res=>{
       
       if(res=="no"){
 
        console.log(res)
   
       }else{
         console.log(res)
 
       }
 
       valor=[]

       suma=0
    for(var i=0; i<res.length; i++){
          valor.push(parseInt(res[i].valor))
    
        }

      valor.forEach(itemss=>{
       suma +=itemss

})

   sumas= parseInt(res[0].saldo) -suma

   })

       
      
       
      
        Swal.fire({
        title: `desea eliminar el cliente ${nombre}?`,
        text: "deseas revertir los cambios!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si deseo eliminar',
        cancelButtonText:"no deseo eliminar"
      }).then((result) => {
        if (result.isConfirmed) {

          if(sumas <= 0){
            fetch (`Facturas/deletes/${id}`,{
      
      method:'POST',
      body:id
      
      }).then((res)=> {
      
      
      
      if (res.ok == true){
       return res.json()
      
      
      }else{
      
      return  Promise.reject(res)
      }}).then(data=>{
      
       if(data === "1"){
        Swal.fire(
            'eliminado!',
            'cliente eliminado correctamete',
            'success'
          )
          listar()
       }
      
      })

          }else{
     
        Swal.fire(
            'no se pudo eliminar!',
            `cliente con saldo de $${sumas}`,
            'error'
          )
          //setTimeout(function(){ window.location.replace("./home"); }, 2000);
          listar()
          
         
       }
        
      
          
        }
      
      })
      
      })
      
      

 </script>





<script>
formularios.addEventListener('submit', (e)=>{

  id=$("#nitss").val()
      
      
      e.preventDefault()

    let datosformulario2 = new FormData(formularios);


    fetch("./Facturas/crear",{
        method:'POST',
        body:datosformulario2



    }).then(res=>{

    if (res.ok==true){
        
        return res.json()
        
    }else{

        return  Promise.reject(res)
    }





    }).then(data =>{
      console.log(data)
     if(data == "ok"){
      Swal.fire(
      'agregado!',
      'factura agregada correctamete',
      'success'
    )
   

      
    formularios.reset()
    listar()
            
fetch(`Facturas/buscar/${id}`,{
         method:"POST",
         body:id
 
        }).then(res =>{
            if (res.ok == true){
              return res.json()
          
            }else{
          
              return  Promise.reject(res)
            }
        }).then(res=>{
       
       if(res=="no"){
 
        console.log(res)
   
       }else{
         console.log(res)
 
       }
 
       valor=[]

       suma=0
    for(var i=0; i<res.length; i++){
          valor.push(parseInt(res[i].valor))
    
        }

      valor.forEach(itemss=>{
       suma +=itemss

})

   sumas= parseInt(res[0].saldo) -suma
   $("#saldoss").html(`<label for="correo" class="letrados text-muted">saldo</label>: <span style="font-family:cursive; color:red;">$${sumas}</span>`)
   })
     }else{

      console.log(data)
     }

     



    }).catch((error)=>{

       console.log(error)


    })



    

})




 </script>


<script >
  $("#formularios").validate({


rules: {
  nits:{
    required:true

  },
  fecha:{
    required:true
    


  },
  pagos:{
    required:true
    

  },
  valor:{
    required:true,
    number:true
    


  },
  saldaos:{
   number:true
    


  }
}



})

</script>