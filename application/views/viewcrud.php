
<table border="1">
	<tr>
		<th>no</th>
		<th>Id_Paket</th>
		<th>Tgl_Datang</th>
		<th>Sasaran</th>
		<th>Penerima</th>
		<th>Isi_Paket</th>
		<th>Tgl_Terima</th>
		<th>Aksi</th>
	</tr>
	<?php
	$no=1;
	foreach($data as $r) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r['Id_Paket'] ?></td>
		<td><?php echo $r['Tgl_Datang'] ?></td>
		<td><?php echo $r['Sasaran'] ?></td>
		<td><?php echo $r['Penerima'] ?></td>
		<td><?php echo $r['Isi_Paket'] ?></td>
		<td><?php echo $r['Tgl_Terima'] ?></td>
		<td><a href="<?=base_url().'index.php/belajar_crud/update/'.$r['Id_Paket']?>">Ubah</a> || <a href="<?=base_url().'index.php/belajar_crud/delete/'.$r['Id_Paket']?>">Hapus</a></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br><br>

<a href="<?=base_url().'index.php/belajar_crud/insert'?>">Tambah Data</a>

