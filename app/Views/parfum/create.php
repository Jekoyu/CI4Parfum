<!-- app/Views/parfum/create.php -->
<h1>Tambah Parfum</h1>
<form action="/parfum/store" method="post">
    <?= csrf_field(); ?>
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?= old('nama'); ?>" required><br>
    <label for="jenis">Jenis</label>
    <input type="text" name="jenis" value="<?= old('jenis'); ?>" required><br>
    <label for="harga">Harga</label>
    <input type="text" name="harga" value="<?= old('harga'); ?>" required><br>
    <label for="stok">Stok</label>
    <input type="text" name="stok" value="<?= old('stok'); ?>" required><br>
    <button type="submit">Simpan</button>
</form>
