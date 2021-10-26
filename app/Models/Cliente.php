<?php
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;


class Cliente extends Model {

    protected $table = 'cliente';
    protected $allowedFields = ['id','nombre','correo', 'password', 'nit', 'telefono', 'direccion'];

    public function getall (){

      
        return  $this->findAll();
     
        }

        function deletes ($nit){

            return $this->where('nit', $nit)->delete();
         
        }

   public function saves($data, $nit)
   {
    
    $niss=$this->where('nit',$nit)->findAll();
    if($niss){
        
       // $datos= $this->db->table($this->table)->insert($data);
       return false;
    }else{
        $datos= $this->db->table($this->table)->insert($data);
        return $datos;
    }
    //if ($niss == ""){
       //
       // 
   // }else{
     
  //  }
   }

   public function getid($nit){
    
    return $this->find($nit);
}

public function buscar($nit){
    if($this->where('nit', $nit)->findAll()){
        return $this->where('nit', $nit)->findAll();
    }else{
        return false;
    }
   
}

public function updates($data,$nit){
    $query = $this->db->table($this->table)->update($data,array('nit'=>$nit));
    return $query;
}
}
?>