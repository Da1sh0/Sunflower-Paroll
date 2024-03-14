<?php 
interface DaoEmpleado{
    public function registrar(Empleado $a);
    public function modificar(Empleado $a);
    public function eliminar(Empleado $a);
    public function listar();
}
interface DaoEntidad{
    public function registrar(Entidad $a);
  #  public function modificar(Entidad $a);
    public function eliminar(Entidad $a);
    public function listar();
}
interface DaoFamiliar{
    public function registrar(Familiar $a);
    public function modificar(Familiar $a);
    public function eliminar(Familiar $a);
    public function listar();
}
?>