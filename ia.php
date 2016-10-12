<?php
class ia
{
   // Declaración de propiedades
   public $columna =0;
   public $fila =1;

  // declaracion e metodos
   public function getColumna(){
    return $this->columna;
  }
   public function getFila(){
    return $this->fila;
  }
  //setters
  public function setcolumna($col){
  $this->columna=$col;
 }
  public function setfila($fil){
  $this->fila=$fil;
 }
  //random
  public function randomPos(){
     $this->columna=rand (0,3);
     $this->fila=rand (0,3);
 }
}
 ?>
