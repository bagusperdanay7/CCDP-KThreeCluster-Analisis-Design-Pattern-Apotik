<?php
include_once("LoginInterface.php");
include_once("Beranda.php");
include_once("UniversalConnect.php");

class LoginProxy implements LoginInterface
{
    private $tableMaster;
    private $hookup;
    private $logGood;
    private $realSubject;

    public function login($current_username, $current_password)
    {
        // hash the password
        $username = $current_username;
        $password = md5($current_password);
        $this->logGood = false;

        // Connect to table proxyLog
        $this->tableMaster = "proxyLogin";
        $universalConnect = new UniversalConnect();
        $this->hookup = $universalConnect->doConnect();

        // Membuat statement MySQL
        $passwordCheckerSql = "SELECT password FROM $this->tableMaster WHERE username = '$username'";

        if ($result = $this->hookup->query($passwordCheckerSql)) {
            $row = $result->fetch_assoc();
            if ($row['password'] === $password) {
                $this->logGood = true;
            }
            $result->close();
        } else {
            printf("Gagal: %s <br/>", $this->hookup->error);
            exit();
        }

        $this->hookup->close();

        if ($this->logGood) {
            $this->request();
        } else {
            echo "Username atau password salah!";
            header('Location: Index.php');
        }
    }

    public function request()
    {
        $this->realSubject = new Beranda();
        $this->realSubject->request();
    }
}
