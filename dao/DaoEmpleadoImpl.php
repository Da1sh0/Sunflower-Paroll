<?php
include('daoInterfaces.php');
include ('../conexion/conexion.php');
include ('../modelo/Empleado.php'); #esto

class DaoEmpleadoImpl extends Conexion implements DaoEmpleado{
       
    public function registrar(Empleado $a){ 
        try{
        if ($this->getCnx()!=null) { 
        $numeroIdentificacionE=$a->getNumeroIdentificacionE();
        $nombre1=$a->getNombre1();
        $apellido1=$a->getApellido1();
        $estado_civilE=$a->getEstadoCivilE();  
        $tipodocE=$a->getTipodocE();
        $correoE=$a->getCorreoE();
        $generoE=$a->getGeneroE();
        $celularE=$a->getCelularE();
        $fecha_nacimiento=$a->getFechaNacimiento();
        $fechaExpdocu=$a->getFechaExpDocu();
        $nit=$a->getNit();
        $sql="Insert into empleado values(?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$numeroIdentificacionE,$nombre1,$apellido1,$estado_civilE, $tipodocE, $correoE,$celularE, $generoE,$fecha_nacimiento, $fechaExpdocu,$nit ]);        
        } else { 
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'***********************';
    }                  
    }
  public function modificar(Empleado $a){        
        $numeroIdentificacionE=$a->getNumeroIdentificacionE();
        $nombre1=$a->getNombre1();
        $apellido1=$a->getApellido1();
        $estado_civilE=$a->getEstadoCivilE();
        $tipodocE=$a->getTipodocE();
        $correoE=$a->getCorreoE();
        $generoE=$a->getGeneroE();
        $celularE=$a->getCelularE();
        $fecha_nacimiento=$a->getFechaNacimiento();
        $fechaExpdocu=$a->getFechaExpDocu();
        $nit=$a->getNit();
        $stmt=$this->getCnx()->prepare("UPDATE empleado " .
        "SET nombre1 = '$nombre1'," .
        "apellido1 = '$apellido1'," .
        "estado_civile = '$estado_civilE'," .
        "tipodoce = '$tipodocE'," .
        "correoE = '$correoE'," .
        "generoe = '$generoE'," .
        "celulare = '$celularE'," .
        "fecha_nacimiento = '$fecha_nacimiento'," .
        "fechaexpdocu = '$fechaExpdocu'," .
        "nit = '$nit' " .
        "WHERE numeroidentificacione = '$numeroIdentificacionE'");
        $stmt->execute();        
    }
  //Eliminarrrrrrr//
public function eliminar(Empleado $a){        
    $numeroIdentificacionE = $a->getNumeroIdentificacionE();
    $stmt = $this->getCnx()->prepare("DELETE FROM empleado WHERE numeroidentificacione = ?");
    $stmt->execute([$numeroIdentificacionE]);        
}

//listar();
public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("select * from empleado");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) {           
            $a = new Empleado(null,null,null,null, null,null,null,null, null,null,null);
            $a->setNumeroIdentificacionE($key['numeroidentificacione']);
            $a->setNombre1($key['nombre1']);
            $a->setApellido1($key['apellido1']);
            $a->setEstadoCivilE($key['estado_civile']);  
            $a->setTipodocE($key['tipodoce']);
            $a->setCorreoE($key['correoe']);
            $a->setGeneroE($key['generoe']);
            $a->setCelularE($key['celulare']);
            $a->setFechaNacimiento($key['fecha_nacimiento']);
            $a->setFechaExpDocu($key['fechaexpdocu']);
            $a->setNit($key['nit']);
            array_push($lista,$a);  
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoEmpleadoImpl';
    } 
        return $lista;       
    }       
    //public function buscar($campo,$dato);

    public function buscar($busca){
        $lista = null;
        try {    
            $stmt = $this->getCnx()->prepare("SELECT * FROM empleado WHERE numeroidentificacione = ?");
            $stmt->execute([$busca]);
            $lista = array();
            foreach ($stmt as $key ) {           
                $a = new Empleado(null,null,null,null, null,null,null,null, null,null,null);
                $a->setNumeroIdentificacionE($key['numeroidentificacione']);
                $a->setNombre1($key['nombre1']);
                $a->setApellido1($key['apellido1']);
                $a->setEstadoCivilE($key['estado_civile']);  
                $a->setTipodocE($key['tipodoce']);
                $a->setCorreoE($key['correoe']);
                $a->setGeneroE($key['generoe']);
                $a->setCelularE($key['celulare']);
                $a->setFechaNacimiento($key['fecha_nacimiento']);
                $a->setFechaExpDocu($key['fechaexpdocu']);
                $a->setNit($key['nit']);
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
    //public function buscar($campo,$dato);
    }
?>