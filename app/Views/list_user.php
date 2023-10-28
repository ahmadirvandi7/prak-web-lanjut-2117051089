<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

<div class="container-box">

    <a class="btn btn-primary custom-button-add" href="<?= base_url('/user/create')?>">Tambah Data</a>
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
        <tbody>
            <?php $nomor = 1; ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $nomor ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        <form action="<?= base_url('user/' . $user['id']) ?>" method="get" style="display: inline;">
                            <button type="submit" class="custom-button detail-button">Detail</button>
                        </form>
                        <form action="<?= base_url('user/' . $user['id'] . '/edit') ?>" method="get" style="display: inline;">
                            <button type="submit" class="custom-button edit-button">Edit</button>
                        </form>
                        <form action="<?= base_url('user/' . $user['id']) ?>" method="post" style="display: inline;">
                            <input type="hidden" name="_method" value="DELETE">
                            <?= csrf_field() ?>
                            <button type="submit" class="custom-button delete-button">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $nomor++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection()?>
