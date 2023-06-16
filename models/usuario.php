<?php
class usuario{
    private $CodUsu;
    private $NomUsu;
    private $ApeUsu;
    private $CorreoUsu;
    private $ClaveUsu;
    private $RolUsu;
    private $ImagenUsu;
    
    // Variable para conexion a la base de datos
    private $db;
    
    // Creo el constructor para dar acceso a la DB
    public function __construct(){
        $this->db = database::connect();
    }
    
    // Todos los getter
    
    function getCodUsu(){
        return $this->CodUsu;
    }
    
    function getNomUsu(){
        return $this->NomUsu;
    }
    
    function getApeUsu(){
        return $this->ApeUsu;
    }
    
    function getCorreoUsu(){
        return $this->CorreoUsu;
    }
    
    function getClaveUsu(){
        return $this->ClaveUsu;
    }
    
    function getRolUsu(){
        return $this->RolUsu;
    }
    
    function getImagenUsu(){
        return $this->ImagenUsu;
    }
    
    // Todos los setter
    
    function setCodUsu($CodUsu){
        $this->CodUsu = $CodUsu;
    }
    
    function setNomUsu($NomUsu){
        $this->NomUsu = $this->db->real_escape_string($NomUsu);
    }
    
    function setApeUsu($ApeUsu){
        $this->ApeUsu = $this->db->real_escape_string($ApeUsu);
    }
    
    function setCorreoUsu($CorreoUsu){
        $this->CorreoUsu = $this->db->real_escape_string($CorreoUsu);
    }
    
    function setClaveUsu($ClaveUsu){
        $this->ClaveUsu = password_hash($this->db->real_escape_string($ClaveUsu),PASSWORD_BCRYPT,['cost' => 4]);
    }
    
    function setRolUsu($RolUsu){
        $this->RolUsu = $RolUsu;
    }
    
    function setImagenUsu($ImagenUsu){
        $this->ImagenUsu = $ImagenUsu;
    }    
    // Creo metodo para guardar
    public function save(){
        $sql = "INSERT INTO USUARIOS VALUES(NULL,'{$this->getNomUsu()}','{$this->getApeUsu()}','{$this->getCorreoUsu()}','{$this->getClaveUsu()}','user',NULL);";
        echo $sql;
        $save = $this->db->query($sql);
        
        $result = false;
        if ($save){
            $result = true;
        }
        return $result;
    }        
}

?>