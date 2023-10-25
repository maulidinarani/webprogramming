<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widrh=device-widrh, initial-scale=1.0">
    <title>Data Registarasi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<?php
$nama= $_GET['nama'];
$alamat= $_GET['alamat'];
$tmplahir= $_GET['tempat'];
$tgllahir= $_GET['tanggal'];
$jk= $_GET['jenis'];
$pendidikan= $_GET['pendidikan'];
?>

<div class="container">
<div class="row">
<div class="col-20 col-sm-20">
<h2 class=" alert alert-primary text-center">Data Registarasi</h2>
<form action="formt3.php" method="GET" enctype="">
<table class="table table-bordered table-striped" border="5" cellspacing="5" cellpadding="5";>
		<thead>
			<tr>
				<td>Nama</td>
				<td><?php echo $nama; ?> </td>				
			</tr>
		</thead>
		<tbody>
			<tr>
                <td>Alamat</td>
				<td><?php echo $alamat; ?> </td>
			</tr>
			<tr>
                <td>Tempat Lahir</td>
				<td><?php echo $tmplahir; ?> </td>
			</tr>
			<tr>
                <td>Tanggal Lahir</td>
				<td><?php echo $tgllahir; ?> </td>
			</tr>
			<tr>
                <td>Jenis Kelamin</td>
				<td><?php echo $jk; ?> </td>
			</tr>
			<tr>
                <td>Pendidikan</td>
				<td><?php echo $pendidikan; ?> </td>
			</tr>
			
			
		</tbody>
	</table>

<tr>
    <td colspan="5"><a href="forminputt3.php">Back To Home</a>
    </td>
</tr>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>