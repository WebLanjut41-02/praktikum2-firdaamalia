<table>
<form action="<?=base_url().'index.php/belajar_crud/insert'?>" method="POST">
	<tr>
		<td>Id Paket</td>
		<td>:</td>
		<td><input type="text" name="Id_Paket"></td>
	</tr>
	<tr>
		<td>Tgl Datang</td>
		<td>:</td>
		<td><input type="date" name="Tgl_Datang"></td>
	</tr>
	<tr>
		<td>Sasaran</td>
		<td>:</td>
		<td><input type="text" name="Sasaran"></td>
	</tr>
	<tr>
		<td>Penerima</td>
		<td>:</td>
		<td><input type="text" name="Penerima"></td>
	</tr>
	<tr>
		<td>Isi Paket</td>
		<td>:</td>
		<td><input type="text" name="Isi_Paket"></td>
	</tr>
	<tr>
		<td>Tgl Terima</td>
		<td>:</td>
		<td><input type="date" name="Tgl_Terima"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</form>
</table>