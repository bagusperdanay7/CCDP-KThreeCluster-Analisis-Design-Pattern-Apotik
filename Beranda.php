<?php

include_once('LoginInterface.php');

class Beranda implements LoginInterface
{
    public function request()
    {
        $practice = <<<REQUEST
        <!DOCTYPE html>
        <html>
            <head>
            <meta charset="UTF-8">
            <link rel='stylesheet' type='text/css' href='Master.css' />
            </head>
            <body>
                <header>Selamat Datang<br>
                    <h1>Halo Admin, Selamat Datang</h1>
            </body>
        </html>
    REQUEST;
        echo $practice;
    }
}
