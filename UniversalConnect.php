<?php
include_once('ConnectInterface.php');

class UniversalConnect implements ConnectInterface
{
    private static $server = ConnectInterface::HOST;
    private static $username = ConnectInterface::USERNAME;
    private static $password = ConnectInterface::PASSWORD;
    private static $dbname = ConnectInterface::DBNAME;
    private static $hookup;

    public function doConnect()
    {
        self::$hookup = mysqli_connect(self::$server, self::$username, self::$password, self::$dbname);

        if (self::$hookup) {
            // echo "Successfully connected to MySQL server using TCP! <br/>";
        } elseif (mysqli_connect_error(self::$hookup)) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error() . " <br/>";
        }

        return self::$hookup;
    }
}
