<?php
include_once('DbConnection.php');
class User extends DbConnection{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function check_login($username, $password){
        $sql = "SELECT * FROM users WHERE  username = '$username' AND password = '$password'";
        $query = $this-> connection->query($sql);
        if($query->num_rows>0){
            
        }
    }
}
?>