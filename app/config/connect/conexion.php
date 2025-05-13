<?php

namespace App\Examen\Config\Connect;

use PDO;
use PDOException;

abstract class conexion
{
    private $conex;

    public function __construct()
    {
        $this->getConnection();
    }

    protected function getConnection(): PDO {

        try {
            $this->conex = new PDO("mysql: host=localhost; dbname=estudiantes_db", "root", "");
            
            $this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        } catch (PDOException $e) {

            die('ERROR DE CONEXIÓN' . $e->getMessage());
        }

        return $this->conex;
    }
}
