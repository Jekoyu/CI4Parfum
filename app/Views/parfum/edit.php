<!-- app/Views/parfum/edit.php -->
<h1>Edit Parfum</h1>
<form action="/parfum/update/<?= $parfum['id']; ?>" method="post">
    <?= csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?= old('nama', $parfum['nama']); ?>" required><br>
    <label for="jenis">Jenis</label>
    <input type="text" name="jenis" value="<?= old('jenis', $parfum['jenis']); ?>" required><br>
    <label for="harga">Harga</label>
    <input type="text" name="harga" value="<?= old('harga', $parfum['harga']); ?>" required><br>
    <label for="stok">Stok</label>
    <input type="text" name="stok" value="<?= old('stok', $parfum['stok']); ?>" required><br>
    <button type="submit">Update</button>
</form>
