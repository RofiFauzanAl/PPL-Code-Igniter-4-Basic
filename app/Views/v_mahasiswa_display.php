<?= $this->extend('layouts/v_template') ;?>
<?= $this->section('content') ;?>
<?php
    if(session()->get('isLoggedIn')){ ?>
    <form method="post" action="/mahasiswa_display/search" style="padding: 10px;">
        <input type="text" name="keyword" placeholder="Search" style="font-size: medium;">
        <button type="submit">Search</button>
    </form>
    <br/>
    <a href="/mahasiswa_display">Reset</a>
    
<h2 style="font-size: 30px;">Data Mahasiswa</h2>
    <br/>
    <br/>
    <table class="table" border="1" style="font-size: 20px;">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($mahasiswa as $data) {
            ?>
                <tr>
                    <td><?= $data['NIM'] ?></td>
                    <td><?= $data['Nama'] ?></td>
                    <td><?= $data['Umur'] ?></td>
                    <td><a href="/mahasiswa_display/detail/<?= $data['NIM'] ?>">Detail</a>
                        <a href="/mahasiswa_display/delete/<?= $data['NIM'] ?>">Hapus</a>
                        <a href="/mahasiswa_display/form_update/<?= $data['NIM'] ?>">Update</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
        </br>
    <button><a href="/mahasiswa_display/create">Tambah Data</a></button>

<?php
    }else{
        echo "<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
        echo "<script>window.location.href='/login'</script>";
    }
?>

<?= $this->endsection() ;?>