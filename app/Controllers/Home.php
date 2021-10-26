<?php

namespace App\Controllers;
use App\Models\Cliente;
use App\Models\Factura;
use ErrorException;

class Home extends BaseController
{
    
   



    public function index()
    {
        echo view('plantilla/header');
        echo view('index');
        echo view('plantilla/footer');
       
      
        
    }

    public function all(){
        $cliente = new Cliente();
        $datos = $cliente->getall();
        echo json_encode ($datos);
    }

    
	public function deletes($nit)
	{

    $fmodelo = new Factura();
  
    if($fmodelo->buscar($nit)){
      echo json_encode($fmodelo->buscar($nit));
        return;
    }else{
      $cliente = new Cliente();
      $cliente->deletes($nit);
      echo json_encode("1");
    }
        
    
    
  
	
	}

    function crear(){
        // Validar la información desde el servidor 
        

        
        // Instanciar el modelo de MaterialModel
        $model = new Cliente();
 


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
          }elseif(empty($this->request->getVar('correo'))){
            echo json_encode("correo no puede ir vacio");
          }elseif(!filter_var($this->request->getVar('correo'), FILTER_VALIDATE_EMAIL)){
            echo json_encode("correo invalido");
          }elseif(empty($this->request->getVar('contrasena'))){
            echo json_encode("contrasena no puede ir vacia");
          }else{
          
            
           
            $save=  $model->saves([
                'id' => rand(0, 1000),
                'nit' => $this->request->getVar('nit'),
                'nombre' => $this->request->getVar('nombres'),
                'telefono' => $this->request->getVar('telefono'),
                'correo' => $this->request->getVar('correo'),
                'contrasena' => $this->request->getVar('contrasena'),
                'direccion' => $this->request->getVar('direccion')
            ],$this->request->getVar('nit'));
            if($save){
              $fmodelo = new Factura();

            $fmodelo->saves([
              'nits' => $this->request->getVar('nit'),
              'fecha' => date(time()),
              'formaPago' => 1,
              'valor' => 0,
              'saldo' => 500000,
          ]);

               echo json_encode("ok");
               }else{
                echo json_encode("existe");
               }
          }
            // Enviar los datos al modelo, es decir, invocar el método para guardar
    
            // redireccionar al método index de MaterialController
        
        }
        
  public function getid($id){
    $model = new Cliente();
    
  $cliente=  $model->getid($id);
  echo json_encode($cliente);
  }

  public function buscar($id){
      if($id==""){
          echo json_encode("vacio");
      }
    $model = new Cliente();
    $cliente=  $model->buscar($id);
    if($cliente){
        echo json_encode($cliente);
    }else{
        echo json_encode("no");
    }
 
  }


  function update(){
    $model = new Cliente();
 


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
