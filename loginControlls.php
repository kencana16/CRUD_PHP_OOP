<?php

class login {
            
    var $cn02670;
    var $tbl= "loginuser";
    public function __construct(){
            $host='192.168.10.253';
            $user='a221802670';
            $pass='a';
            $dbase='a221802670';
        
            try {
                $this->cn02670 = new PDO("mysql:host=$host;dbname=$dbase", $user, $pass);
                // atur mode pemberitahuan kesalahan
                $this->cn02670->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
            catch(PDOException $e)
                {
                echo "Terdapat kegagalan koneksi karena : " . $e->getMessage();
                }
            return $this->cn02670;	
        }		

            public function cekLogin($username,$password){
                  $sql="select * from $this->tbl where username='$username' and password='$password' ";
                  
                  $smtp = $this->cn02670->prepare($sql);
                  $smtp->execute();
                  
                  if($smtp->rowCount() > 0){
                        $_SESSION['susername'] = $username;
                        header("location:admin.php");
                  }else{
                        echo "login GAGAL....<br/> <a href='login.php'>ulangi</a>";
                  }
            }
            
            public function logout(){
                  session_start();
                  session_unset();
                  
                  session_destroy();
                  
                  header("location:login.php");
            }
      }
      $login = new login;

      
      ?>