<?php
include('daoInterfaces.php');
include ('../conexion/conexion.php');
include ('../modelo/Entidad.php'); #esto

class DaoEntidadImpl extends Conexion implements DaoEntidad{
       
    public function registrar(Entidad $a){ 
        try{
        if ($this->getCnx()!=null) { 
        $nit=$a->getNit();
        $telefonoEn=$a->getTelefonoEn();
        $razon_social=$a->getRazon_social();
        $correoEn=$a->getCorreoEn();

        $sql="Insert into entidad values(?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$nit,$telefonoEn,$razon_social, $correoEn]);        
        } else { 
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'***********************';
    }
                       
    }

      //Eliminarrrrrrr//
public function eliminar(Entidad $a){        
    $nit = $a->getNit();
    $stmt = $this->getCnx()->prepare("DELETE FROM entidad WHERE nit = ?");
    $stmt->execute([$nit]);        
}

//listar();
public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("select * from entidad");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) {           
            $a = new Entidad(null,null,null,null);
            $a->setNit($key['nit']);
            $a->setTelefonoEn($key['telefonoen']);
            $a->setRazon_social($key['razon_social']);
            $a->setCorreoEn($key['correoen']);  
            array_push($lista,$a);  
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoEntidadImpl';
    } 
        return $lista;       
    }       
    public function buscar($busca){
      $lista = null;
      try {    
          $stmt = $this->getCnx()->prepare("SELECT * FROM entidad WHERE nit = ?");
          $stmt->execute([$busca]);
          $lista = array();
          foreach ($stmt as $key ) {           
              $a = new Entidad(null,null,null,null);
              $a->setNit($key['nit']);
              $a->setRazon_social($key['razon_social']);
              $a->setTelefonoEn($key['telefonoen']);
              $a->setCorreoEn($key['correoen']);  
              array_push($lista,$a);  
          }
          // Cerrar la conexión
          //$this->getCnx()->close();
      } catch(PDOException $e) {
          // Manejar el error de alguna manera (por ejemplo, registrar en un archivo de registro)
          echo "Error: " . $e->getMessage();
      }
      return $lista;       
  }
  //public function buscar($camp

public function modificar(Entidad $a){        
  $nit=$a->getNit();
  $razon_social=$a->getRazon_social();
  $telefonoE=$a->getTelefonoEn();
  $correoE=$a->getCorreoEn();
 

  $stmt=$this->getCnx()->prepare("UPDATE entidad " .
  "SET razon_social = '$razon_social'," .
  "telefonoen = '$telefonoE'," .
  "correoen = '$correoE'" .
  "WHERE nit = '$nit'");
  $stmt->execute();        
}
}
?>