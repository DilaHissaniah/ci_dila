<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>FORM TAMBAH DATA PROFILE</H1>
    <form action="<?= base_url('Admin/tampil_data_siswa')?>"method="post">
<table>
    <tr>
        <td><label>Nisn</label></td>
        <td>:</td>
        <td><input type="text" name="nisn"></td> 
    </tr>
    <tr>
        <td><label>Nis</label></td>
        <td>:</td>
        <td><input type="text" name="nis"></td> 
    </tr>
    <tr>
        <td><label>nama lengkap siswa</label></td>
        <td>:</td>
        <td><input type="text" name="nama_lengkap_siswa"></td> 
    </tr>
    <tr>
        <td><label>tempat lahir siswa</label></td>
        <td>:</td>
        <td><input type="text" name="tempat_lahir_siswa"></td> 
    </tr>
    <tr>
        <td><label>tanggal lahir siswa</label></td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir_siswa"></td> 
    </tr>
    <tr>
        <td><label>siswa nohp</label></td>
        <td>:</td>
        <td><input type="text" name="siswa_nohp"></td> 
    </tr>
    <tr>
        <td><label>program id</label></td>
        <td>:</td>
        <td><input type="text" name="program_id"></td> 
    </tr>
<table>
    <button name="simpan">simpan</button>
<form>
</body>
</html>