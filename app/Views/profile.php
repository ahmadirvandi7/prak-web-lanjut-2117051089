<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(/assets/img/bg1.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .profile-container {
            margin-top: 10px;
        }

        .profile-card {
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 60px;
            text-align: center;
        }

        .profile-picture {
            width: 200px;
            height: 200px;
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
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/user/">List User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kelas/">List Kelas</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="search_dataBuku.php" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="profile-container">
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
    </div>
</body>
</html>
