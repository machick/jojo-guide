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
        /* MODIFICAR SESSIONES Y ADMINISTRADOR */ 
        isset($_POST["usuario"])?$usuario=$_POST["usuario"]:$usuario=$_SESSION["usuario_logeado"];
        isset($_POST["usuario"])?$password=$_POST["password"]:$password=$_SESSION["password_logeado"];        
        
            // function console_log( $data ){
            //     echo '<script>';
            //     echo 'console.log('. json_encode( $data ) .')';
            //     echo '</script>';
            // } 
            // $myvar =$usuario;
            // console_log( $myvar );        
        if ($usuario=="machick" && $password=="jojo1998"){              
            $_SESSION["usuario_logeado"]="machick";
            $_SESSION["password_logeado"]="jojo1998";
            $data["admins"]=$this->AdministradorModel->traerAdmins();          
            echo $this->render->render("view/administrador-logeado.php",$data);
        }else{
            $data["mensajeError"]="usuario y/o contraseña incorrectos";
            echo $this->render->render("view/administrador.php",$data);
        }
    }
    public function agregarAdmin(){
        $usuario=$_POST["nombreNuevoAdmin"];
        $password=$_POST["passwordNuevoAdmin"];
        $this->AdministradorModel->agregarAdmin($usuario,$password);
        header("Location:/Administrador/login");
    }
    public function editarAdmin(){
        $id=$_POST["idEditar"];
        $usuario=$_POST["nombreAdmin"];
        $password=$_POST["passwordAdmin"];
        $this->AdministradorModel->editarAdmin($id,$usuario,$password);
        header("Location:/Administrador/login");
    }
    public function eliminarAdmin(){
        
        $usuario=$_POST["idAdmin"];
        $this->AdministradorModel->eliminarAdminById($usuario);
        header("Location:/Administrador/login");
    }
    public function logout(){
        session_destroy();
        header("Location:/");
    }

}