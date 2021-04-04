<?php

class AdministradorModel{
    private $database;
    

    public function __construct($database){
        $this->database = $database;
        $this->nombreDataBase="id15928033_jojodatabase";
    }
    
    public function traerAdmins(){
        $bdd= $this->nombreDataBase;
        return $this->database->query("SELECT * FROM `$bdd`.`admins`;");
    }
    public function agregarAdmin($nick,$password){
        $bdd= $this->nombreDataBase;
        $this->database->execute(
        "insert into `$bdd`.`admins`(`nick`,`password`)
        VALUES
        (
        '$nick',
        '$password');
        ");
    }
}