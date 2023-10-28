<!DOCTYPE html>
<html lang="en">
<head>


<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="peminjaman.php">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_buku.php">Data Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_peminjam.php">Data Peminjam</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="search_dataBuku.php" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-image: url('assets/img/bg1.jpg'); */
            background-image: url(/assets/img/bg1.jpg);
            background-size: cover; /* Menyesuaikan ukuran gambar dengan jendela browser */
            background-position: center; /* Pusatkan gambar di tengah */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            margin-top: 100px; 
        }

        .profile-card {
            background-color: #fff; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            border-radius: 10px; 
            padding: 20px;
            text-align: center;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            background-color: #ddd; 
            border-radius: 50%; 
            margin: 0 auto;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 36px; 
            color: #555; 
            overflow: hidden; 
        }

        .profile-picture img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        .profile-info {
            font-size: 18px;
            color: #333; 
            margin-bottom: 10px;
        }

        .profile-info span {
            font-weight: bold;
            color: #555; 
        }
    </style>   
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"> 
</head>


<body>
    <div class="profile-card">
        <div class="profile-picture">
            <img src="<?= $user['foto']?? base_url('/assets/img/kucing.png') ?>" alt="Foto Profil">
        </div>
        <div class="profile-info">
            <?= $user['nama']?>
        </div>
        <div class="profile-info">
            <?= $user['npm']?>
        </div>
        <div class="profile-info">
            <?= $user['nama_kelas']?>
        </div>  
    </div>
</body>
</html>