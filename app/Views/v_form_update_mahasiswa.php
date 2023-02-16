<?= $this->extend('layouts/v_template'); ?>
<?= $this->section('content'); ?>
    <h3>Update</h3>
	<form method="post" action="/mahasiswa_display/form_update/update/<?= $data['NIM']?>">
		<table style="font-size: 21px;">
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="Nama" style="font-size: 20px;"  value="<?= old('Nama')  ?? $data['Nama'] ?>" required></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" name="Umur" style="font-size: 20px;" value="<?= old('Umur')  ?? $data['Umur'] ?>" required></td>
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
<?= $this->endsection(); ?>