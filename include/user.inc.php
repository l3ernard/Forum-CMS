<?php
class UserManager extends DBConn{

    public function insert_user($username, $password, $email){
    if(!$username || !$password || !$email){

    exit('Bad input');
    }
    $options = [
    'cost' => 12,
    ];

    $password = password_hash($password, PASSWORD_BCRYPT, $options);

    $this->username = $username;
    $this->password = $password;
    $this->email = $email;



    $sql = "INSERT INTO users(username, password, email) values ('$this->username', '$this->password', '$this->email')";
    $result = $this->connect()->query($sql);
    echo'Added user succesfully.';
    }


    public function user_login($login_user, $login_pass, $remember)  // login user with username and password
    {
        $result = '';

        $clean_user = filter_var($login_user, FILTER_SANITIZE_STRING);



        $query = "SELECT * FROM users WHERE username='$clean_user'";
        $login_result = $this->connect()->query($query);
        $user_data = $login_result->fetch_assoc();

        if(empty($user_data)){ // check for correct username, if its wrong no data.
            $result='Username or password is incorrect!';
        } else if(!password_verify($login_pass, $user_data['password'])){  //check password
            $result='Username or password is incorrect!';
        } else {
            $userID = $user_data['username'];
            $session_key = sha1(rand(100000,999999));
            $last_login = time();

            $_SESSION['login'] = true;
            $_SESSION['userid'] = $userID;
            $_SESSION['session_key'] = $session_key;

            $login_query = "UPDATE users SET session_key = '$session_key', last_login = '$last_login' WHERE username='$userID'";
            if($this->connect()->query($login_query) === true){
                $result = 'Login success.' . 'Welcome ' . $user_data['username'] . '!';
            }
        }
    return $result;
    }

    public function user_info(){  // retrieve logged in user information(name, mail, level) with this function
    $_username = '';
    $_email = '';
    $_level = '';

    if($_SESSION['login']){
    $userID = filter_var($_SESSION['userid'], FILTER_SANITIZE_STRING);
    $session_key = filter_var($_SESSION['session_key'], FILTER_SANITIZE_STRING);
    $query = "SELECT * FROM users WHERE username='$userID' AND session_key='$session_key'";
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