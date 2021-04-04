<?php


class AdministradorController
{
    
    private $render;

    public function __construct($AdministradorModel,$render){
        $this->AdministradorModel= $AdministradorModel;
        $this->render = $render;
    }

    public function execute(){
        $data["saludo"] = "este tendra que ser un administrador pro player";
        echo $this->render->render("view/administrador.php", $data);
    }
    public function login(){
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        if ($usuario=="machick" && $password=="jojo1998") {  
            $data["admins"]=$this->AdministradorModel->traerAdmins();          
            echo $this->render->render("view/administrador-logeado.php",$data);
        }else{
            $data["mensajeError"]="usuario y/o contraseña incorrectos";
            echo $this->render->render("view/administrador.php",$data);
        }
    }

}