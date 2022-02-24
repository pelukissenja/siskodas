<?php
    class Login
    {
        private $db;

        public function __construct($db_conn = NULL)
        {
            $this->db = $db_conn;

            session_start();
        }
        function login($email, $pass)
        {
            try {
                $sql = "SELECT * FROM register WHERE email = ?";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(1, $email);
                $stmt->execute();
                $stmt->fetch();
                if($stmt->rowcount() > 0){
                    foreach($stmt as $data){
                        if(password_verify($pass, $data['password'])){
                            $_SESSION['user_id'] = $data['id_register'];
                            header('location : ../pages/main.php');
                            return true;
                        }else{
                            echo 'Password Salah!';
                            return false;
                        }
                    }
                }else{
                    echo 'Username tidak ditemukan!';
                    return false;
                }
            } catch (PDOException $th) {
                echo $th->getmessage();
                return false;
            }
        }
        
        //check login user
        function isLogin()
        {
            if(!isset($_SESSION['user_id'])){
                header('location: ../pages/login.php');
            }
        }

        //tarik data user
        function getUser()
        {
            // $db   = Config::connect();
            if(!$user->isLogin()){
                return false;
            }else{
                try {
                    $sql = "SELECT * FROM register WHERE id_register = ?";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindparam(1, $_SESSION['user_id']);
                    $stmt->execute();
                    $x = $stmt->rowcount();
                    if($x > 0){
                        foreach($stmt as $data){
                            $hasil[] = $data;
                        }
                        return $hasil;
                    }
                } catch (PDOException $th) {
                    echo $th->getmessage();
                    return false;
                }
            }
        }

        //logout
        function logout()
        {
            session_destroy();
            unset($_SESSION['user_id']);
            return true;
        }
    }
?>