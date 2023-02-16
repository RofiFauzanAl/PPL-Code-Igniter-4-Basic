<?= $this->extend('layouts/v_template'); ?>
<?= $this->section('content'); ?>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div style="width: 300px; border-radius: 5px;">
        <ul style="background-color: green; color: white; padding: 10px;">
            <li><?= session()->getFlashdata('pesan') ?></li>
        </ul>
    </div>
<?php endif; ?>
    <h1>Form Data Pegawai</h1>
    </br>
    <form action="/form_pegawai/post" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="NIM" style="font-size: 15px;" maxlength="9" required></td>
            </tr>
            <tr></tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" style="font-size: 15px;" required></td>
            </tr>
            <tr></tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="Gender" value="Pria" required>Pria</td>
                <td><input type="radio" name="Gender" value="Wanita" required>Wanita</td>
            </tr>
            <tr></tr>
            <tr>
                <td>Telp</td>
                <td><input type="number" name="Telp" style="font-size: 15px;" required></td>
            </tr>
            <tr></tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="Email" style="font-size: 15px;" required></td>
            </tr>
            <tr></tr>
            <tr>
                <td>Pendidikan</td>
                <td>
                    <select name="Pendidikan" style="font-size: 15px;" required>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
                <td><button><a href="/mahasiswa_display">Kembali</a></button></td>
            </tr>
        </table>
    </form>

<?= $this->endsection(); ?>