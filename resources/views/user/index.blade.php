<!doctype html>
<html lang="en">

<head>
    
    <title>Laravel 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container py-5">
            <h1>
                Data Pengguna
            </h1>
            <div class='d-flex justify-content-end mb-3'>
                <a name="" class="btn btn-primary" href="add.php" role="button">Add</a>
            </div>
            <div class="table-responsive">
                
                <table class="table table-bordered align-middle text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>

                        
                            <tr >
                                <td>1</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href='#' type="button" class="btn btn-primary">Detail</a>
                                        <a href='#' type="button" class="btn btn-warning">Edit</a>
                                        <a href='#' type="button" class="btn btn-danger">Hapus</a>
                                    </div>
                               </td>

                                <td style="text-align: center;"><i class="fa-solid fa-user-lock"></i></td>
                                <td>Syamsiyyatul</td>
                                <td>syamsiyyatul@gmail.com</td>
                                <td>085201545345</td>
                                <td>Admin</td> 
                            </tr>

                            <tr >
                                <td>2</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href='#' type="button" class="btn btn-primary">Detail</a>
                                        <a href='#' type="button" class="btn btn-warning">Edit</a>
                                        <a href='#' type="button" class="btn btn-danger">Hapus</a>
                                    </div>
                               </td>

                                <td style="text-align: center;"><i class="fa-solid fa-user"></i></td>
                                <td>Adam</td>
                                <td>adam@gmail.com</td>
                                <td>085201545555</td>
                                <td>Staff</td> 
                            </tr>

                            <tr >

                                <td>3</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href='#' type="button" class="btn btn-primary">Detail</a>
                                        <a href='#' type="button" class="btn btn-warning">Edit</a>
                                        <a href='#' type="button" class="btn btn-danger">Hapus</a>
                                    </div>
                               </td>

                                <td style="text-align: center;"><i class="fa-solid fa-user"></i></td>
                                <td>Dito</td>
                                <td>dito123@gmail.com</td>
                                <td>085200767655</td>
                                <td>Staff</td> 
                            </tr>
                        
                    </tbody>
                </table>
            </div>

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