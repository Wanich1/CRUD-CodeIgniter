<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<table border="1px solid black">
		<tr>
			<th>No</th>
			<th>Nik</th>
			<th>Nama</th>
			<th>Tempat Lahir</th>
			<th>Tgl Lahir</th>
			<th>Alamat</th>
		</tr>
		<?php $no=1; ?>
		<?php foreach($data_penduduk as $brg) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg['nik'] ?></td>
			<td><?php echo $brg['nama'] ?></td>
			<td><?php echo $brg['tempat_lahir'] ?></td>
			<td><?php echo $brg['tgl_lahir'] ?></td>
			<td><?php echo $brg['alamat'] ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
	<br>
	<br>
	<table>
	<form method="post" action="penduduk/tambah_penduduk">
		<tr><td> <label for="">NIK : </label></td>
		<td><input type="text" name="nik" ></td>
		</tr>
		<tr>
		<td><label for="">Nama : </label></td>
		<td><input type="text" name="nama" ></td>
		</tr>
		<tr></tr>
		<td><label for="">Tempat Lahir : </label></td>
		<td><input type="text" name="tempat_lahir" ></td>
		</tr>
		<tr>
		<td><label for="">Tanggal Lahir : </label></td>
		<td><input type="text" name="tgl_lahir" ></td>
		</tr>
		<tr>
		<td><label for="">Alamat : </label></td>
		<td><input type="text" name="alamat" ></td>
		</tr>
		<tr>
		<td><button type="submit">Tambah</button></td>
		</tr>
	</form>
	</table>
<?php print_r($data_penduduk); ?>
</body>
</html>
