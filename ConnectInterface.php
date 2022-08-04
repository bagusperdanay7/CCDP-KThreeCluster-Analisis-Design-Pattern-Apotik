<?php
interface ConnectInterface
{
    const HOST = "localhost";
    const USERNAME = "root";
    const PASSWORD = "";
    const DBNAME = "apotek";

    public function doConnect();
}
