<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Input</title>
</head>
<body>
    <h1>Penambahan Karyawan Baru</h1>
    <div class="formInput">
        <form action="submit" method="POST" class="form">
            @csrf
            <div class="pertama">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" placeholder="Nama Lengkap">
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" placeholder="Alamat">
                <label for="NoKtp">Nomor KTP :</label>
                <input type="text" name="NoKtp" placeholder="Nomor KTP">
            </div>
            <div class="kedua">
                <h3>Pendidikan</h3>
                <table class="pendidikan">
                    <tr>
                        <td>Nama Sekolah</td>
                        <td>Jurusan</td>
                        <td>Tahun Masuk</td>
                        <td>Tahun Lulus</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-tabel"></td>
                        <td><input type="text" class="input-tabel"></td>
                        <td><input type="text" class="input-tabel"></td>
                        <td><input type="text" class="input-tabel"></td>
                    </tr>
                </table>
            </div>
            <div class="ketiga">
                <h3>Pengalaman Kerja</h3>
                <table class="pengalaman">
                    <tr>
                        <td>Perusahaan</td>
                        <td>Jabatan</td>
                        <td>Tahun</td>
                        <td>Keterangan</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="input-tabel"></td>
                        <td><input type="text" class="input-tabel"></td>
                        <td><input type="text" class="input-tabel"></td>
                        <td><input type="text" class="input-tabel"></td>
                    </tr>
                </table>
            </div>
            <button type="submit" class="btn-simpan">simpan</button>
        </form>
    </div>
</body>
</html>