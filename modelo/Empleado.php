<?php
class Empleado {
    private $numeroIdentificacionE;
    private $nombre1;
    private $apellido1;
    private $estado_civilE;
    private $tipodocE;
    private $correoE;
    private $generoE;
    private $celularE;
    private $fecha_nacimiento;
    private $fechaexpdocu;
    private $nit;

    public function __construct($numeroIdentificacionE, $nombre1, $apellido1, $estado_civilE, $tipodocE, $correoE, $generoE, $celularE, $fecha_nacimiento, $fechaexpdocu,$nit)
    {
        $this->numeroIdentificacionE = $numeroIdentificacionE;
        $this->nombre1 = $nombre1;
        $this->apellido1 = $apellido1;
        $this->estado_civilE = $estado_civilE;
        $this->tipodocE = $tipodocE;
        $this->correoE = $correoE;
        $this->generoE = $generoE;
        $this->celularE = $celularE;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->fechaexpdocu = $fechaexpdocu;
        $this->nit = $nit;
    }

    public function getNumeroIdentificacionE()
    {
        return $this->numeroIdentificacionE;
    }

    public function setNumeroIdentificacionE($numeroIdentificacionE)
    {
        $this->numeroIdentificacionE = $numeroIdentificacionE;
    }

    public function getNombre1()
    {
        return $this->nombre1;
    }

    public function setNombre1($nombre1)
    {
        $this->nombre1 = $nombre1;
    }

    public function getApellido1()
    {
        return $this->apellido1;
    }

    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    public function getEstadoCivilE()
    {
        return $this->estado_civilE;
    }

    public function setEstadoCivilE($estado_civilE)
    {
        $this->estado_civilE = $estado_civilE;
    }

    public function getTipodocE()
    {
        return $this->tipodocE;
    }

    public function setTipodocE($tipodocE)
    {
        $this->tipodocE = $tipodocE;
    }

    public function getCorreoE()
    {
        return $this->correoE;
    }

    public function setCorreoE($correoE)
    {
        $this->correoE = $correoE;
    }

    public function getGeneroE()
    {
        return $this->generoE;
    }

    public function setGeneroE($generoE)
    {
        $this->generoE = $generoE;
    }

    public function getCelularE()
    {
        return $this->celularE;
    }

    public function setCelularE($celularE)
    {
        $this->celularE = $celularE;
    }

    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function getFechaExpDocu()
    {
        return $this->fechaexpdocu;
    }

    public function setFechaExpDocu($fechaexpdocu)
    {
        $this->fechaexpdocu = $fechaexpdocu;
    }
    public function setNit($nit)
    {
        $this->nit = $nit;
    }
    public function getNit()
    {
        return $this->nit;
    }
}
?>