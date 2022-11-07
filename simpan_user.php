<?php
include "user.php";

if (isset($_POST['submit'])) {
    $user->Daftar($_POST['nama'], $_POST['username'], $_POST['password'], $_POST['addres'], $_POST['nohp']);
} else {
    echo "gagal";
}
