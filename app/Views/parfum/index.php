<!-- app/Views/parfum/index.php -->
<h1>Daftar Parfum</h1>
<a href="/parfum/create">Tambah Parfum</a>
<table border="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($parfum as $item): ?>
            <tr>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['jenis']; ?></td>
                <td><?= $item['harga']; ?></td>
                <td><?= $item['stok']; ?></td>
                <td>
                    <a href="/parfum/edit/<?= $item['id']; ?>">Edit</a> |
                    <a href="/parfum/delete/<?= $item['id']; ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
