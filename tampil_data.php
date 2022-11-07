<?php
include "user.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tampilan Data</title>
</head>

<body>
    <h1 class="text-center mt-4 fw-bold">Tampilan Data</h1>

    <div class="container">

        <button class="btn btn-primary w-100 mb-4">
            <a href="tambah_data.php" class="text-white text-decoration-none">Tambah Data</a>
        </button>

        <table class="table table-dark text-center align-items-center table-md">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($user->tampildata() as $row) : ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['addres']; ?></td>
                        <td><?php echo $row['nohp']; ?></td>
                        <td>
                            <button class="btn btn-danger">
                                <a href="edit_data.php?id=<?php echo $row['username']; ?>" class="text-decoration-none text-white">Edit User</a>
                            </button>
                            ||
                            <button class="btn btn-warning">
                                <a href="hapus_user?id=<?php echo $row['username']; ?>" class="text-decoration-none text-white">Hapus User</a>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Js File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>