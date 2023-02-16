<?= $this->extend('layouts/v_template');?>
<?= $this->section('content');?>
<h1>Ini adalah Info</h1>
    <?php
        if(session()->get('isLoggedIn'))
        {
            echo '<h2>Nama saya Rofi Fauzan</h2>';
        }else{
            echo '<h2>Anda belum login</h2>';
        }
    ?>
<?= $this->endsection();?>