<?php
include "header.php";
?>

<div class="container">
    <h2>Form data mahasiswa</h2>
    <form action="hasil.php" method="post"> </form>

    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>NIM</label>
    <input type="text" name="nim" required>

    <label>Program studi</label>
    <select name="prodi" required>
        <option value="">Pilih Program Studi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
    </select>

    <label>Semester</label> 
    <select name="semester">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select>

    <label>Email</label>
    <input type="email" name="email" required>

    <br>

    <button type="submit">simpan</button>

</form>
</div>

<?php
include "footer.php";
?>