<?php
include('daoInterfaces.php');
include ('../conexion/conexion.php');
include ('../modelo/Familiar.php'); #esto

class DaoFamiliarImpl extends Conexion implements DaoFamiliar{
       
    public function registrar(Familiar $a){ 
        try{
        if ($this->getCnx()!=null) { 
        $codFamiliar=$a->getCodFamiliar();
        $parentezco=$a->getParentezco();
        $documetoF=$a->getDocumentoF();
        $fechaNacimientoF=$a->getFechaNacimientoF();
        $nombreF1=$a->getnombreF1();
        $apellidoF1=$a->getApellidoF1();
        $numeroIdentificacionE=$a->getNumeroIdentificacionE();

        $sql="Insert into familiares values(?,?,?,?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$codFamiliar,$parentezco,$documetoF, $fechaNacimientoF, $nombreF1, $apellidoF1, $numeroIdentificacionE]);        
        } else { 
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'***********************';
    }
                       
    }
  

    public function eliminar(Familiar $a){        
        $codFamiliar = $a->getCodFamiliar();
        $stmt = $this->getCnx()->prepare("DELETE FROM familiares WHERE cod_familiar = ?");
        $stmt->execute([$codFamiliar]);        
    }
    
    //public function listar();
    public function listar(){
        $lista = null;
        try{    
            $stmt = $this->getCnx()->prepare("select * from familiares");
            $lista = array();
            $stmt->execute();
            foreach ($stmt as $key ) {           
                $a = new Familiar(null,null,null,null,null,null,null);
                $a->setCodFamiliar($key['cod_familiar']);
                $a->setParentezco($key['parentezco']);
                $a->setDocumentoF($key['documetof']);
                $a->setFechaNacimientoF($key['fechanacimientof']);
                $a->setNombreF1($key['nombref1']);   
                $a->setApellidoF1($key['apellidof1']);
                $a->setNumeroIdentificacionE($key['numeroidentificacione']);        
                array_push($lista,$a);            
            }        
            //$this->getCnx()->close();
        }catch(PDOException $e){
            $e->getMessage().'error en listar de DaoFamiliarImpl';
        } 
            return $lista;       
        }       
        //public function buscar($campo,$dato);
        

public function buscar($busca){
    $lista = null;
    try {    
        $stmt = $this->getCnx()->prepare("SELECT * FROM familiares WHERE  cod_familiar = ?");
        $stmt->execute([$busca]);
        $lista = array();
        foreach ($stmt as $key ) {           
            $a = new Familiar(null,null,null,null,null,null,null);
            $a->setCodFamiliar($key['cod_familiar']);
            $a->setParentezco($key['parentezco']);
            $a->setDocumentoF($key['documetof']);
            $a->setFechaNacimientoF($key['fechanacimientof']);
            $a->setNombreF1($key['nombref1']);
            $a->setApellidoF1($key['apellidof1']);
            $a->setNumeroIdentificacionE($key['numeroidentificacione']);            
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
public function buscarLis($busca){
    $lista = null;
    try {    
        $stmt = $this->getCnx()->prepare("SELECT * FROM familiares WHERE  numeroidentificacione = ?");
        $stmt->execute([$busca]);
        $lista = array();
        foreach ($stmt as $key ) {           
            $a = new Familiar(null,null,null,null,null,null,null);
            $a->setCodFamiliar($key['cod_familiar']);
            $a->setParentezco($key['parentezco']);
            $a->setDocumentoF($key['documetof']);
            $a->setFechaNacimientoF($key['fechanacimientof']);
            $a->setNombreF1($key['nombref1']);
            $a->setApellidoF1($key['apellidof1']);
            $a->setNumeroIdentificacionE($key['numeroidentificacione']);            
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



public function modificar(Familiar $a){        
    $codFamiliar = $a->getCodFamiliar();
    $parentezco = $a->getParentezco();
    $documentoF = $a->getDocumentoF();
    $fechaNacimientoF = $a->getFechaNacimientoF();
    $nombreF1 = $a->getNombreF1();
    $apellidoF1 = $a->getApellidoF1();
    $numeroIdentificacionE = $a->getNumeroIdentificacionE();
    
    $stmt = $this->getCnx()->prepare("UPDATE familiares " .
        "SET parentezco = '$parentezco', " .
        "documetof = '$documentoF', " .
        "fechanacimientof = '$fechaNacimientoF', " .
        "nombref1 = '$nombreF1', " .
        "apellidof1 = '$apellidoF1' " .
        "WHERE cod_familiar = '$codFamiliar'");
        $stmt->execute();        
}
}
?>