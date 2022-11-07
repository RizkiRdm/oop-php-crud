<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Tambah data</title>
</head>

<body>
    <h1 class="text-center mt-3 fw-bold">Tambah Data</h1>
    <!-- Form Input Data -->
    <div class="container">
        <form action="simpan_user.php" method="POST">
            <div class="mb-1">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">
            </div>
            <div class="mb-1">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username Anda">
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda">
            </div>
            <div class="mb-1">
                <label for="addres" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="addres" name="addres" placeholder="Masukan Alamat Anda">
            </div>
            <div class="mb-1">
                <label for="nohp" class="form-label">No Hp</label>
                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukan No Hp Anda">
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-4 mb-5" name="submit">Tambah</button>
        </form>
    </div>
    <!-- Script Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>