<?php
    class crudApp
    {
        private $conn;

        public function __construct()
        {
            #database host, database user, database password, database name.
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'crud_operation';

            $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$this->conn)
            {
                die ("Database Connection Error!!");
            }

        }

    }




?>
