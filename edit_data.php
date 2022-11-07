<?php
include "user.php";

if (isset($_POST['update'])) {
    $user->update($_POST['nama'], $_POST['username'], $_POST['password'], $_POST['addres'], $_POST['nohp']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Edit data</title>
</head>

<body>
    <h1 class="text-center mt-3 fw-bold">Edit Data</h1>
    <!-- Form Input Data -->
    <div class="container">
        <form action="" method="POST">

            <?php foreach ($user->TampilEdit($_GET['id']) as $r) : ?>

                <div class="mb-1">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r['nama']; ?>">
                </div>
                <div class="mb-1">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username Anda" value="<?php echo $r['username']; ?>">
                </div>
                <div class="mb-1">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda" value="<?php echo $r['password']; ?>">
                </div>
                <div class="mb-1">
                    <label for="addres" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="addres" name="addres" placeholder="Masukan Alamat Anda" value="<?php echo $r['addres']; ?>">
                </div>
                <div class="mb-1">
                    <label for="nohp" class="form-label">No Hp</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukan No Hp Anda" value="<?php echo $r['nohp']; ?>">
                </div>

            <?php endforeach; ?>

            <button type="submit" class="btn btn-primary w-100 mt-4 mb-5" name="update">Update</button>
        </form>
    </div>

    <!-- Script Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>