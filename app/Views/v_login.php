<?= $this->extend('layouts/v_template');?>
<?= $this->section('content');?>
<?php
    if(session()->get('isLoggedIn')){
    echo "<script>alert('Anda Sudah Login')</script>";
    echo "<h1>Anda Sudah Login</h1>";
    }else{ ?>
        </br>
        </br>
        <div style="position:absolute; left:40%; display:flex; width:100%;">
            <form action="login/auth" method="post" style="border: 1px solid black; max-width:25%; padding: 5px;">
                <label for="username">Username : </label>
                <input type="text" id="username" name="username" required>
                <br><br>
                <label for="password">Password : </label>
                <input type="text" id="password" name="password" required>
                <br><br>
                <input type="submit" value="login" name="login">
            </form>
        </div>
<?php
    }
?>

<?= $this->endsection();?>