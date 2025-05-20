<?php

namespace App\Paraiso\controller;

class FrontController
{

    private $dir;
    private $controller;
    private $url;


    public function __construct()
    {
        if (isset($_GET["url"])) {

            $this->url = $_REQUEST["url"];
            $this->dir = 'app/controller/';
            $this->controller = 'Controller.php';
            $this->getURL();
        } else {
            die("<script>location='?url=catalogo'</script>");
        }
    }

    private function getURL()
    {
        if (file_exists($this->dir . $this->url . $this->controller)) {
            require_once($this->dir . $this->url . $this->controller);
        } else {
            echo "Error";
        }
    }
}
