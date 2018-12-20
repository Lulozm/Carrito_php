<?php
//Establece los datos para conectar con el servidor DatoServidor.php

class DatoServidor{
    
    private $sv='localhost';
    private $us='id2120987_root';
    private $pa='12345678';
    private $db="id2120987_munelucos_store";
    
    public function getSv(){
        return $this->sv;
    } 
    
    public function getUs(){
        return $this->us;
    }
    
    public function getPa(){
        return $this->pa;
    }
    
    public function getDb(){
        return $this->db;
    } 
}
?>