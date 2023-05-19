<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        
        <div class="container">
            <h1>Tambah Pengguna</h1>
            <form action="./backend/add.php" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="nama">
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Role</label>
                            <select class="form-control" aria-label="Role" name="role">
                            
                            </select>
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="col">
                            <label for="" class="form-label">Telp</label>
                            <input type="text" class="form-control" placeholder="Telp" name="phone">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat Lengkap</label>
                    <textarea type="text" class="form-control" placeholder="Alamat Lengkap" name="address"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Unggah Foto</label>
                    <input type="file" class="form-control" name="photo"></textarea>
                </div>
                <div>
                    <button class='btn btn-primary' type='submit'>Simpan</button>
                    <button class='btn btn-secondary' type='reset'>Reset</button>

                </div>
            </form>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>