<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        
    </style>
</head>
<body>

    <form action=<?= base_url('user/store')?> method="POST">
    <?php if(session()->getFlashdata('errors')):?>
    <?=session()->getFlashdata('errors')?>
    <?php endif; ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" value="<?= old('nama')?>" >
                </td>
            </tr>

            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input type="text" name="npm" id="npm" value="<?= old('npm')?>">
                </td>                
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <select name="kelas" id="kelas" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">
                        <?php foreach ($kelas as $item): ?>
                            <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
