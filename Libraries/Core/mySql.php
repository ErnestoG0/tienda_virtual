<?php
  class mySql extends conexion
  {
    private $conexion;
    private $strquery;
    private $arrVAlues;

    function __construct(){
      $this->conexion = new Conexion();
      $this->conexion->conect();
    }

    public function insert(string $query,array $arrValues){
      $this->$strquery = $querry;
      this->$arrVAlues = $arrValues;
      $insert = $this->conexion->prepare($this->strquery);
      $resInsert = $insert->execute($this->arrVAlues);
      if($resInsert){
        $lastinsert = $this->conexion->lastInsertId();
      }else{
        $lastinsert = 0;
      }
      return $lastinsert;
    }
    public function select(string $query){
      $this->$strquery = $query;
      $result = $this->conexion->prepare($this->strquery);
      $result->execute();
      $data = $result->fetch(PDO::FETCH_ASSOC);
      return $data;
    }
    public function select_all(string $query){
      $this->$strquery = $query;
      $result = $this->conexion->prepare($this->strquery);
      $result->execute();
      $data = $result->fetchall(PDO::FETCH_ASSOC);
      return $data;
    }
    public function update(string $query,array $arrValues){
      $this->$strquery = $querry;
      this->$arrVAlues = $arrValues;
      $update = $this->conexion->prepare($this->strquery);
      $resExecute = $update->execute($this->arrVAlues);
      return $resExecute;
    }
    public function delete(string $query){
      $this->strquery = $query;
      $result = $this->conexion->prepare($this->strquery);
      $result->execute();
      return = $result;
    }
  }

 ?>
