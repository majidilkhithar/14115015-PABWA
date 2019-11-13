<?php
class DbConnection{
    private $host = 'localhost';
    private $username ='root';
    private $password ='';
    private $database ='coba';
    protected $connection;
    public function __construct()
    {
        if(!isset($this->connection)){
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if(!$this->connection){
                echo 'Cannot Connect To Database Server';
                exit;
            }
        }
        return $this->connection;
    }
}
?>