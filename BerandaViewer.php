<?php
include_once("LoginProxy.php");

class BerandaViewer
{
    private $proxy;
    private $username;
    private $password;

    public function __construct()
    {
        $this->tableMaster = "proxiLogin";
        $universalConnect = new UniversalConnect();
        $this->hookup = $universalConnect->doConnect();
        $this->username = $this->hookup->real_escape_string(trim($_POST['username']));
        $this->password = $this->hookup->real_escape_string(trim($_POST['password']));
        $this->getInterface($this->proxy = new LoginProxy());
    }

    private function getInterface(LoginProxy $proxy)
    {
        $proxy->login($this->username, $this->password);
    }
}

$worker = new BerandaViewer();
