<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <h2 class="mb-4">📚 Daftar Data Buku</h2>
        
        <div class="text-end mb-3">
            
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
                <i class="bi bi-plus-circle-fill"></i> Tambah Data
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Filosofi Teras</td>
                        <td>Henry Manampiring</td>
                        <td>2018</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning me-2">
                                Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">2</th>
                        <td>Atomic Habits</td>
                        <td>James Clear</td>
                        <td>2018</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-warning me-2">
                                Edit
                            </button>
                            <button class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </td>
                    </tr>

                    </tbody>
            </table>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>