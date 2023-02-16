<?= $this->extend('layouts/v_template'); ?>
<?= $this->section('content'); ?>
    <h1> <?= $title ?> </h1>
    <ul style="font-size: 25px; list-style:none;">
        <li>NIM : <?=$mahasiswa['NIM']?></li>
        <li>Nama : <?=$mahasiswa['Nama']?></li>
        <li>Umur : <?=$mahasiswa['Umur']?></li>
    </ul>
    <a href="/mahasiswa_display" style="font-size: 22px;">Kembali</a>
<?= $this->endsection(); ?>
