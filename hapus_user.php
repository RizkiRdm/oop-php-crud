<?php
include "user.php";

$user->HapusUser($_GET['id']);

header("location: tampil_data.php");
