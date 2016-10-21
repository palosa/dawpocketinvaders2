<?php
Class ia
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
    if ($col>3) {
     $this->col=3;

   }elseif ($col<0) {
       $this->columna=0;

      }else{
         $this->columna=$col;
 }
}
  public function setfila($fil){
   if ($fil>3) {
     $this->fila=3;

       $this->fila=0;
     }else{
         $this->fila=$fil;
 }
}
  //random
  public function randomPos(){
     $this->columna=rand (0,3);
     $this->fila=rand (0,3);
 }
}
 ?>
