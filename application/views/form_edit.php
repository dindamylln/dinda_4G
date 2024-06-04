<html>
<head>
    <title>Halaman Form Edit</title>
</head>

<body>
    <h3>Form Edit Data</h3>
    <form action="" method="post">
    <table>
        <?php foreach ($mahasiswas as $mahasiswa):?>
            <tr>
            <td>
                <input type="hidden" name="NIM" value="<?=$mahasiswa['NIM'] ?>">  
            </td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td><input type="Text" name="NamaMahasiswa" value="<?=$mahasiswa['NamaMahasiswa'] ?>"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="Text" name="Jurusan" value="<?=$mahasiswa['Jurusan'] ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="SIMPAN" name="tombolEdit"></td>
        </tr>
        <?php endforeach;?>
    </table>
    </form>
</body>
</html>