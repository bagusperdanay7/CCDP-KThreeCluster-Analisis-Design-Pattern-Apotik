<?php
include_once('UniversalConnect.php');

class CreateTable
{
    private $tableMaster;
    private $hookup;

    public function __construct()
    {
        $univConnect = new UniversalConnect();
        $this->tableMaster = 'proxyLogin';
        $this->hookup = $univConnect->doConnect();

        $dropdb = "DROP TABLE IF EXISTS $this->tableMaster";

        if ($this->hookup->query($dropdb) === true) {
            printf("Tabel telah dihapus!. <br/>", $this->tableMaster);
        }

        $sql = "CREATE TABLE $this->tableMaster (username VARCHAR(20), password VARCHAR(64))";

        if ($this->hookup->query($sql) === true) {
            echo "Tabel $this->tableMaster telah dibuat! <br/>";
        }

        $this->hookup->close();
    }
}

$worker = new CreateTable();
