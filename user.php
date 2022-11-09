<?php
include "koneksi.php";

class user extends koneksi
{
    private $username,
        $nama,
        $password,
        $addres,
        $nohp,
        $query,
        $data,
        $jumlahData,
        $hasil;

    public function tampildata()
    {

        $this->query = mysqli_query($this->connect, "SELECT * FROM user");

        $this->jumlahData = mysqli_num_rows($this->query);

        if ($this->jumlahData > 0) {
            while ($this->data = mysqli_fetch_assoc($this->query)) {
                $this->hasil[] = $this->data;
            }
        } else {
            $this->hasil = "data tidak ada";
        }
        return $this->hasil;
    }

    public function TampilEdit($username)
    {
        $this->query = mysqli_query($this->connect, "SELECT * FROM user WHERE username = '$username' ");
        $this->data = mysqli_fetch_assoc($this->query);
        $this->hasil[] = $this->data;
        return $this->hasil;
    }

    public function HapusUser($username)
    {
        $this->query = mysqli_query($this->connect, "DELETE FROM user WHERE username = '$username' ");
    }


    public function Login($username, $password)
    {
        if ($this->username === null) {
            return "silahkan register dahulu";
        } elseif ($this->username === $username and $this->password = $password) {
            return "Anda berhasil login";
        } else {
            return "Username atau password salah";
        }
    }
    public function Logout()
    {
        $this->username = null;
        $this->nama = null;
        $this->password = null;
        $this->addres = null;
        $this->nohp = null;
    }
    public function Daftar($name = null, $user = null, $pass = null, $addres = null, $nohp = null)
    {
        $this->username = $user;
        $this->nama = $name;
        $this->password = $pass;
        $this->addres = $addres;
        $this->nohp = $nohp;

        $this->query = mysqli_query($this->connect, "INSERT INTO `user`(`nama`, `username`, `password`,
        `addres`, `nohp`) VALUES ('$this->nama','$this->username',
        '$this->password','$this->addres','$this->nohp')");

        if ($this->query == true) {
            header("location: tampil_data.php");
        } else {
            echo "error data saving";
        }
    }

    public function update($name = null, $user = null, $pass = null, $addres = null, $nohp = null)
    {
        $this->nama = $name;
        $this->username = $user;
        $this->password = $pass;
        $this->addres = $addres;
        $this->nohp = $nohp;

        $this->query = mysqli_query($this->connect, "UPDATE `user` SET  
        `nama` = '$this->nama',
        `username` = '$this->username', 
        `password` = '$this->password', 
        `nohp` = '$this->nohp',
        `addres` = '$this->addres'
         WHERE `username` = '$this->username' ");

        if ($this->query == true) {
            header("location: tampil_data.php");
        }
    }
}

$user  = new user("localhost", "root", "", "pbo");
