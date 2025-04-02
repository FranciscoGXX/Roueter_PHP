
<?php

class App{

    private string $Controller;
    private string $Method;

    public function __construct()
    {   
        $this->Controller="";
        $this->Method="";
        $this->Match_Router();
        
    }

    public function Match_Router(){
        $url= explode("/",_URL);

        $this->Controller=$url[1];
        $this->Method[2];

        $this->Controller= $this->Controller . "Controller";

        require_once (__DIR__."/../Controllers/$this->Controller.php");


        var_dump($url);
        
    }

    public function Run(){
        $controller= new $this->Controller();
        $method= $this->Method;

        $controller->$method();
    }


    
}

?>
