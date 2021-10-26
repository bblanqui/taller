<?php

namespace App\Controllers;
use App\Models\Factura;
use ErrorException;

class Facturas extends BaseController
{

    public function all(){
        $cliente = new Factura();
        $datos = $cliente->getall();
        echo json_encode ($datos);
    }

    
	public function deletes($id)
	{
        
    $model = new Factura();
  
     
    
    $cliente = new Factura();
   if($cliente->deletes($id)){
     
     echo json_encode ("1");
   }else{
    echo json_encode ("no se pudo eliminar");
   }
    
  
	
	}

    function crear(){
        // Validar la información desde el servidor 
      
        
        // Instanciar el modelo de MaterialModel
        $model = new Factura();
 


        if(empty($this->request->getVar('nits'))){
            echo json_encode("ni no puede ir vacio seleccione");
           }elseif(!preg_match("/^[[:digit:]]+$/",$this->request->getVar('nits'))){
               echo json_encode("solo numeros");
           }elseif(empty($this->request->getVar('fecha'))){
                    echo json_encode("fecha no puede ir vacio");
           }elseif(empty($this->request->getVar('pagos'))){
            echo json_encode("seleccione un pago");
          }elseif(empty($this->request->getVar('valor'))){
            echo json_encode("valor no puede ir vacio");
          }elseif(!preg_match("/^[[:digit:]]+$/",$this->request->getVar('valor'))){
            echo json_encode("solo numeros een el valor");
          }
          else{

            if(empty($this->request->getVar('saldaos'))){
              $saldo=$this->request->getVar('saldaos');
              $saldo=0;
              $save=  $model->saves([
                'nits' => $this->request->getVar('nits'),
                'fecha' => $this->request->getVar('fecha'),
                'formaPago' => $this->request->getVar('pagos'),
                'saldo' => $saldo,
                'valor' => $this->request->getVar('valor')
            ],$this->request->getVar('nits'));
            }else{
              $save=  $model->saves([
                'nits' => $this->request->getVar('nits'),
                'fecha' => $this->request->getVar('fecha'),
                'formaPago' => $this->request->getVar('pagos'),
                'saldo' => $this->request->getVar('saldaos'),
                'valor' => $this->request->getVar('valor')
            ],$this->request->getVar('nits'));
            }
           
            if($save){

               echo json_encode("ok");
               }
          }
            // Enviar los datos al modelo, es decir, invocar el método para guardar
    
            // redireccionar al método index de MaterialController
        
        }
        
  public function getid($id){
    $model = new Factura();
    
  $cliente=  $model->getid($id);
  echo json_encode($cliente);
  }

  public function buscar($id){
      if($id==""){
          echo json_encode("vacio");
      }
    $model = new Factura();
    $cliente=  $model->buscar($id);
    if($cliente){
        echo json_encode($cliente);
    }else{
        echo json_encode("no");
    }
 
  }


  function update(){
    $model = new Factura();
 


    if(empty($this->request->getVar('nit'))){
        echo json_encode("ni no puede ir vacio");
       }elseif(!preg_match("/^[[:digit:]]+$/",$this->request->getVar('nit'))){
           echo json_encode("solo numeros");
       }elseif(empty($this->request->getVar('nombres'))){
                echo json_encode("nombres no puede ir vacio");
       }elseif(preg_match("/^[[:digit:]]+$/",$this->request->getVar('nombres'))){
        echo json_encode("solo letras en el nombre");
      }elseif(empty($this->request->getVar('telefono'))){
        echo json_encode("telefono no puede ir vacio");
      }elseif(!preg_match("/^[[:digit:]]+$/",$this->request->getVar('telefono'))){
        echo json_encode("solo numeros en el telefono");
      }elseif(empty($this->request->getVar('direccion'))){
        echo json_encode("direccion no puede ir vacio");
      }elseif(empty($this->request->getVar('email'))){
        echo json_encode("correo no puede ir vacio");
      }elseif(!filter_var($this->request->getVar('email'), FILTER_VALIDATE_EMAIL)){
        echo json_encode("correo invalido");
      }elseif(empty($this->request->getVar('contrasena'))){
        echo json_encode("contrasena no puede ir vacia");
      }else{
      

       
        $save=  $model->updates([
            'nombre' => $this->request->getVar('nombres'),
            'telefono' => $this->request->getVar('telefono'),
            'correo' => $this->request->getVar('email'),
            'contrasena' => $this->request->getVar('contrasena'),
            'direccion' => $this->request->getVar('direccion')
        ],$this->request->getVar('nit'));
        if($save){

            echo json_encode("ok");
            }else{
             echo json_encode("existe");
            }
      }
        // Enviar los datos al modelo, e
    
}


}
