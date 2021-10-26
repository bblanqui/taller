<?php
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;


class Factura extends Model {

    protected $table = 'facturas';
    protected $allowedFields = ['nits','fecha', 'formaPago', 'valor'];

    public function getall (){

      
        return  $this->findAll();
     
        }

        function deletes ($nit){

            return $this->where('nits', $nit)->delete();
        }
   public function saves($data)
   {
    
  
    return $this->db->table($this->table)->insert($data);
        
    
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
    if($this->where('nits', $nit)->findAll()){  
        return $this->where('nits', $nit)->findAll();
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