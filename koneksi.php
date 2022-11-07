<?php
class koneksi
{
    private $server,
        $user,
        $password,
        $database;
    protected    $connect;

    public function __construct($server = null, $user = null, $pass = null, $db = null)
    {
        $this->server = $server;
        $this->user = $user;
        $this->password = $pass;
        $this->database = $db;
        $this->connect = mysqli_connect($this->server, $this->user, $this->password, $this->database);
    }
}
