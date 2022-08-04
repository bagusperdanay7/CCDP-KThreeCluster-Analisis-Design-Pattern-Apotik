<?php

include_once('UniversalConnect.php');
class HashRegister
{
    public function __construct()
    {
        $this->tableMaster = "proxyLogin";
        $univConnect = new UniversalConnect();

        $this->hookup = $univConnect->doConnect();
        $username = $this->hookup->real_escape_string(trim($_POST['username']));
        $password = $this->hookup->real_escape_string(trim($_POST['password']));

        $sql = "INSERT INTO $this->tableMaster (username, password) VALUES ('$username', md5('$password'))";

        if ($this->hookup->query($sql)) {
            echo "Daftar berhasil; <br/>";
        } else {
            printf("Invalid query: %s <br/> Whole query: %s <br/>", $this->hookup->error, $sql);
            exit();
        }

        $this->hookup->close();
        header('Location: Index.php');
        echo "<h1>Berhasil</h1>";
    }
}

$worker = new HashRegister();
