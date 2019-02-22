<table>
<form action="<?=base_url().'index.php/belajar_crud/update'?>" method="POST">
	<tr>
		<td>Id Paket</td>
		<td>:</td>
		<td><input type="hidden" name="nim" value="<?=$r['Id_Paket']?>"><?=$r['Id_Paket']?></td>
	</tr>
	<tr>
		<td>Tgl Datang</td>
		<td>:</td>
		<td><input type="text" name="Tgl_Datang" value="<?=$r['Tgl_Datang']?>"></td>
	</tr>
	<tr>
		<td>Sasaran</td>
		<td>:</td>
		<td><input type="text" name="Sasaran" value="<?=$r['Sasaran']?>"></td>
	</tr>
	<tr>
		<td>Penerima</td>
		<td>:</td>
		<td><input type="text" name="Penerima" value="<?=$r['Penerima']?>"></td>
	</tr>
	<tr>
		<td>Isi Paket</td>
		<td>:</td>
		<td><input type="text" name="Isi_Paket" value="<?=$r['Isi_Paket']?>"></td>
	</tr>
	<tr>
		<td>Tgl Terima</td>
		<td>:</td>
		<td><input type="text" name="Tgl_Terima" value="<?=$r['Tgl_Terima']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</form>
</table>