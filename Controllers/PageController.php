<?php

class PageController{

    public function Home()
    {
        require_once "./Views/Home.php";
    }

    public function Social()
    {
        echo "Estoy en social";
    }
    
    public function Users()
    {
        require_once "./Views/Users.php";
    }
}



?>