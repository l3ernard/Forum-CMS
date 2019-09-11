<?php
class DBConn{
    private $db_servername;
    private $db_username;
    private $db_password;
    private $db_name;


    protected function connect(){
        $this->db_servername = "localhost"; //
        $this->db_username = "root";
        $this->db_password = "";
        $this->db_name = "forum-cms";


        $conn = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        return $conn;
    }
}

class UserManager extends DBConn{

    public function insert_user($username, $password, $email){
        if(!$username || !$password || !$email){

            exit('Bad input');
        }
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;

        $sql = "INSERT INTO users(username, password, email) values ('$this->username', '$this->password', '$this->email')";
        $result = $this->connect()->query($sql);
        echo'Added user succesfully.';
    }


    public function user_login($login_user, $login_pass)  // login user with username and password (add email soon)
    {
        $result = '';

        $clean_user = filter_var($login_user, FILTER_SANITIZE_STRING);
        $clean_pass = filter_var($login_pass, FILTER_SANITIZE_STRING);

        $query = "SELECT * FROM users WHERE username='$clean_user' AND password='$clean_pass'";
        $login_result = $this->connect()->query($query);
        $user_data = $login_result->fetch_array();
        $count_row = $login_result->num_rows;
        if($count_row == 1)
        {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user_data['id'];
            $result = 'Login success.' . 'Welcome ' . $user_data['username'] . '!';
        }
        else{
            $result = 'Username or password incorrect!';
        }

        return $result;
    }

    public function user_info(){  // retrieve logged in user information(name, mail, level) with this function
        $_username = '';
        $_email = '';
        $_level = '';

        if($_SESSION['login']){
            $id = filter_var($_SESSION['id'], FILTER_SANITIZE_NUMBER_INT);
            $query = "SELECT * FROM users WHERE id='$id'";
            $info_result = $this->connect()->query($query);
            $user_info = $info_result->fetch_array();

            $_username = $user_info['username'];
            $_email = $user_info['email'];
            $_level = $user_info['level'];
        }

        return array("username"=>$_username, "email"=>$_email, "level"=>$_level);
    }

    public function user_logout(){
        $_SESSION['login'] = false;
        session_destroy();
    }

}

