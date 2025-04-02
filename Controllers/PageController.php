<?php

class PageController{

    public function Home()
    {
        require_once "./Views/Home.php";
    }

    public function Social()
    {
        require_once "./Views/Social.php";
    }
    
    public function Users()
    {
        require_once "./Views/Users.php";
    }
}



?>