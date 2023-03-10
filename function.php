<?php
    class crudApp{
        private $conn;

        public function __construct(){
            #database host, database user, database password, database name.
            $dbHost = 'localhost';
            $dbUser = 'root';
            $dbPass = '' ;
            $dbName = 'CRUD-Operation';

            $this->conn=mysqli_connect($dbHost, $dbUser, $dbPass, $dbName )

        }

    }




?>