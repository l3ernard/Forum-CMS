<?php
class DBConn{
    private $db_servername;
    private $db_username;
    private $db_password;
    private $db_name;


    protected function connect(){
        $this->db_servername = "localhost";
        $this->db_username = "root";
        $this->db_password = "";
        $this->db_name = "forum-cms";


        $conn = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        return $conn;
    }
}

class AddUser extends DBConn{

    public function insert_user($username, $password,$email){
        if(!$username || !$password || !$email){

            exit('Bad input');
        }
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;

        $sql = "INSERT INTO users(username, password, email) values ('$this->username', '$this->password', '$this->password')";
        $result = $this->connect()->query($sql);

    }


}
