<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background-color: #f4f4f4; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
    <div class="profile-card">
        <div class="profile-picture">
            <i class="fas fa-user"></i> 
        </div>
        <div class="profile-info">
            <span>Nama:</span> <?= $nama ?>
        </div>
        <div class="profile-info">
            <span>Kelas:</span> <?= $kelas ?>
        </div>
        <div class="profile-info">
            <span>NPM:</span> <?= $npm ?>
        </div>
    </div>
</body>
</html>
