
<?php

class App{

    private  $Controller;
    private  $Method;

    public function __construct()
    {   
        $this->Match_Router();
        
    }

    public function Match_Router(){
        $url= explode("/",_URL);

        $this->Controller=$url[1];
        $this->Method=$url[2];

        $this->Controller= $this->Controller . "Controller";

        require_once (__DIR__."/../Controllers/$this->Controller.php");
        
    }

    public function Run(){
        $controller= new $this->Controller();
        $method=$this->Method;

        $controller->$method();
    }


    
}

?>
