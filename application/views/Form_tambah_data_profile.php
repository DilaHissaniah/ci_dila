<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
<h1>FORM TAMBAH DATA PROFILE</H1>
    <form action="<?= base_url('Admin/action_tambah_data_profile')?>"method="post">
<table>
    <tr>
        <td><label>Nama Depan</label></td>
        <td>:</td>
        <td><input type="text" name="nama_depan"></td> 
    </tr>
    <tr>
        <td><label>Nama Belakang</label></td>
        <td>:</td>
        <td><input type="text" name="nama_belakang"></td> 
    </tr>
    <tr>
        <td><label>tempat lahir</label></td>
        <td>:</td>
        <td><input type="text" name="tempat_lahir"></td> 
    </tr>
    <tr>
        <td><label>tanggal_lahir</label></td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir"></td> 
    </tr>
    
    <tr>
        <td><label>jenis_kelamin</label></td>
        <td>:</td>
        <td>
        <input type="radio" name="jenis_kelamin"value="L">laki_laki
        <input type="radio" name="jenis_kelamin"value="p">perempuan
         
    </tr>
        
    <tr>
        <td><label>alamat</label></td>
        <td>:</td>
        <td><textarea name="alamat" id="" cols="30" rows="3"></textarea></td>
    </tr>
    <tr>
        <td><label>Jenjang pendidikan</label></td>
        <td>:</td>
       <td><select name="jenjang_pendidikan"id="">
           <option value="SMK">SMK Sederajat</option>
           <option value="D3">D3</option>
           <option value="S1">S1</option>
           <option value="S2">S2</option>
        </select></td>
        
    </tr>
    
<table>
    <button name="simpan">simpan</button>
    <button a href="tampil_data_profile"name="kembali" class=" btn btn_success">kembali</button>
<form>
</body>
</html>