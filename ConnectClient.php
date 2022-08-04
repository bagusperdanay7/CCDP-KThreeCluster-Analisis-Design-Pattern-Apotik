<?php
include_once('UniversalConnect.php');

class ConnectClient
{
    private $hookup;

    public function __construct()
    {
        // Satu baris untuk operasi koneksi
        $univConnect = new UniversalConnect();
        $this->hookup = $univConnect->doConnect();
    }
}

$worker = new ConnectClient();
