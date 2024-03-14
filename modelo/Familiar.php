<?php
class Familiar {
    private $codFamiliar;
    private $parentezco;
    private $documentoF;
    private $fechaNacimientoF;
    private $nombreF1;
    private $apellidoF1;
    private $numeroIdentificacionE;

    public function __construct($codFamiliar, $parentezco, $documentoF, $fechaNacimientoF, $nombreF1, $apellidoF1, $numeroIdentificacionE) {
        $this->codFamiliar = $codFamiliar;
        $this->parentezco = $parentezco;
        $this->documentoF = $documentoF;
        $this->fechaNacimientoF = $fechaNacimientoF;
        $this->nombreF1 = $nombreF1;
        $this->apellidoF1 = $apellidoF1;
        $this->numeroIdentificacionE = $numeroIdentificacionE;
    }
    public function getCodFamiliar() {
        return $this->codFamiliar;
    }

    public function setCodFamiliar($codFamiliar) {
        $this->codFamiliar = $codFamiliar;
    }

    public function getParentezco() {
        return $this->parentezco;
    }

    public function setParentezco($parentezco) {
        $this->parentezco = $parentezco;
    }

    public function getDocumentoF() {
        return $this->documentoF;
    }

    public function setDocumentoF($documentoF) {
        $this->documentoF = $documentoF;
    }

    public function getFechaNacimientoF() {
        return $this->fechaNacimientoF;
    }

    public function setFechaNacimientoF($fechaNacimientoF) {
        $this->fechaNacimientoF = $fechaNacimientoF;
    }

    public function getNombreF1() {
        return $this->nombreF1;
    }
    
    public function setNombreF1($nombreF1) {
        $this->nombreF1 = $nombreF1;
    }

    public function getApellidoF1() {
        return $this->apellidoF1;
    }
    public function setApellidoF1($apellidoF1) {
        $this->apellidoF1 = $apellidoF1;
    }

    public function getNumeroIdentificacionE() {
        return $this->numeroIdentificacionE;
    }

    public function setNumeroIdentificacionE($numeroIdentificacionE) {
        $this->numeroIdentificacionE = $numeroIdentificacionE;
    }
}
?>