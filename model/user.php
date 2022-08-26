<?php

class User
{
    public $id;
    public $name;
    public $username;
    public $password;
    private $db;

    public function __construct(){
        $this->db=Database::connection();
    }

    public function save() {
        $insert_user="INSERT INTO user 
        VALUES ('','$this->name','$this->username','$this->password')"; 
        $execute_insert = $this->db->query($insert_user);

        $result=false;
        if ($execute_insert) {
            $result = true;
        }
        return $result;
    }

    public function login() {
        $username = $this->username;
        $password = $this->password;

        $find_user="SELECT * FROM user WHERE user='$username' and password = '$password'"; 
        $execute_select = $this->db->query($find_user);
       
        $result=false;
        if($execute_select && $execute_select->num_rows == 1){
            $usuario = $execute_select->fetch_object();
            $result = $usuario;
  
        }
       
        return $result;
    }
}
