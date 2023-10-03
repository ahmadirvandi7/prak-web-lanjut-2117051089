<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

<div  class="container-box">
<table class="custom-table">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody >
        <?php
        foreach ($users as $user){
        ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
                <button type="button" class="custom-button detail-button">Detail</button>
                <button type="button" class="custom-button edit-button">Edit</button>
                <button type="button" class="custom-button delete-button">Hapus</button>
            </td>
        </tr>

        <?php
        }
        ?>
    </tbody>
</table>
</div>
<?= $this->endSection()?>