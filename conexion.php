<?php

class conexion{
    private $host;
    private $userName;
    private $password;
    private $db;    
    protected $connection;
    protected $configFile = "conf.csv";

    public function getConnection(){   
        return $this->connection;
    }

    public function connect(){
        $configFile = fopen($this->configFile, "r") or die("Unable to open file!");
        if (feof($configFile)){
            $connData = fgetcsv($configFile);
            $this->host = $connectionData[0];
            $this->userName = $connectionData[1];
            $this->password = $connectionData[2];
            $this->db = $connectionData[3];
            $this->connection = new mysqli($this->host, $this->userName, $this->password, $this->db);
        }
    }

}
?>