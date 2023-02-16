<?= $this->extend('layouts/v_template'); ?>
<?= $this->section('content'); ?>
<?php
    if(session()->get('isLoggedIn')){ ?>
    <h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="/mahasiswa/post">
		<table style="font-size: 21px;">
			<tr>
				<td>NIM</td>
				<td><input type="number" name="NIM" style="font-size: 20px;" require></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="Nama" style="font-size: 20px;" required></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" name="Umur" style="font-size: 20px;" required></td>
			</tr>
			<tr>
			<td></td>
            </br>
				<td><input type="submit" value="Submit" style="font-size: 20px;"></td>
			</tr>		
		</table>
	</form>
    <br/>
    <br/>
    <a href="/mahasiswa_display">Kembali</a>
<?php
    }else{
        echo "<script>alert('Anda Harus Login Terlebih Dahulu')</script>";
        echo "<script>window.location.href='/login'</script>";
    }
?>

<?= $this->endsection(); ?>