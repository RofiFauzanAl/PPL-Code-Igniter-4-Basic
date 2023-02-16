<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?? "Code Igniter 4" ?> </title>
</head>
<body>
    <header>
        <center>
            <h1 style="border: 1px solid black">Header</h1>
            <nav style="display: flex; padding-bottom: 10px;">
                <a href="/" style="padding-right: 5px;">Home</a>
                <a href="/info" style="padding-right: 5px;">Info</a>
                <?php 
                    if(session()->get('isLoggedIn'))
                    {
                        echo '<a href="/mahasiswa_display" style="padding-right: 5px;">Mahasiswa</a>';
                        echo '<a href="/form_pegawai">Form Pegawai</a>';
                    }
                ?>
                <!-- <a href="/mahasiswa_display" style="padding-right: 5px;">Mahasiswa</a> -->
                
                <!-- <a href="/login" style="padding-left: 86%;">Login</a> -->
                <?php
                    if(session()->get('isLoggedIn'))
                    {
                        echo '<a href="/logout" style="padding-left: 70%;">Logout</a>';
                    }
                    else
                    {
                        echo '<a href="/login" style="padding-left: 85%;">Login</a>';
                    }
                ?>
            </nav>
        </center>
    </header>
    <main style="height: 68vh; border:1px solid black;">
        <center>
            <?= $this->renderSection('content') ?>
        </center>
    </main>
    </br>
    <footer>
        <center style="border:1px solid black;">
            <h3>Footer</h3>
            <h3>&copy; Rofi Fauzan A (211511029) - D3 Teknik Informatika</h3>
        </center>
    </footer>
</body>
</html>