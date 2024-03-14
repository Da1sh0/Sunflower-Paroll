<?php
class Entidad {
    private $nit;
    private $telefonoEn;
    private $razon_social;
    private $correoEn;

    public function __construct($nit, $razon_social,$telefonoEn,  $correoEn) {
        $this->nit = $nit;
        $this->razon_social = $razon_social;
        $this->telefonoEn = $telefonoEn;
        $this->correoEn = $correoEn;
    }

    public function getNit() {
        return $this->nit;
    }

    public function setNit($nit) {
        $this->nit = $nit;
    }

    public function getTelefonoEn() {
        return $this->telefonoEn;
    }

    public function setTelefonoEn($telefonoEn) {
        $this->telefonoEn = $telefonoEn;
    }

    public function getRazon_social() {
        return $this->razon_social;
    }


    public function setRazon_social($razon_social) {
        $this->razon_social = $razon_social;
    }

    public function getCorreoEn() {
        return $this->correoEn;
    }
    
    public function setCorreoEn($correoEn) {
        $this->correoEn = $correoEn;
    }
}
?>