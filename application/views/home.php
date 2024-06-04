<html>
<head>
    <title>HALAMAN UTAMA WEBSITE</title>
</head>

<body>
    <h1>SELAMAT DATANG DI TUTORIAL CI 3</h1>
    <h3>(Data Mahasiswa)</h3>

    <a href="<?= base_url() ?>welcome/formInput"><button>Tambah Mahasiswa</button></a>

    <table>
        <tr>
            <td><b>No</b></td>
            <td><b>NIM</b></td>
            <td><b>Nama Mahasiswa</b></td>
            <td><b>Jurusan</b></td>
        </tr>
        <?php $i=0;
        foreach ($mahasiswas as $mahasiswa):
        ?>
            <tr>
                <td><?= $i+=1?></td>
                <td><?= $mahasiswa['NIM']?></td>
                <td><?= $mahasiswa['NamaMahasiswa']?></td>
                <td><?= $mahasiswa['Jurusan']?></td>
                <td>
                    <a href="<?= base_url() ?>welcome/formEdit/<?= $mahasiswa['NIM']?>">Edit</a>
                    <a href="<?= base_url() ?>welcome/delete/<?= $mahasiswa['NIM']?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini???')">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>