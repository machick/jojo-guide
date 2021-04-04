<?php
include_once("helper/MysqlDatabase.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");


include_once("controller/AdministradorController.php");
include_once("controller/HomeController.php");

include_once("model/AdministradorModel.php");

include_once('third-party/mustache/src/Mustache/Autoloader.php');
include_once("Router.php");

class Configuration{
    
    private function getDatabase(){
        $config = $this->getConfig();
        return new MysqlDatabase(
            $config["servername"],
            $config["username"],
            $config["password"],
            $config["dbname"]
        );
    }
    private function getConfig(){
        return parse_ini_file("config/config.ini");
    }
    public function getAdministradorModel(){
        $database = $this->getDatabase();
        return new AdministradorModel($database);
    }
    public function getRender(){
        return new Render('view/partial');
    }    
    public function getAdministradorController(){
        $AdministradorModel=$this->getAdministradorModel();
        return new AdministradorController($AdministradorModel,$this->getRender());
    }
    public function getHomeController(){
        return new HomeController($this->getRender());
    }
    public function getRouter(){
        return new Router($this);
    }

    public function getUrlHelper(){
        return new UrlHelper();
    }
}