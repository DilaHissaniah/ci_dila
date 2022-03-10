<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
<h1>FORM UPDATE DATA PROFILE</H1>
    <form action="<?= base_url('Admin/action_update_data_profile')?>"method="post">
<table>
    <tr>
        <td>Nama Depan</td>
        <td>:</td>
        <td>
        <input type="hidden" name="id"value="<?=$profile['id']?>"> 
        <input type="text" name="nama_depan"class="form_control"value="<?=$profile['nama_depan']?>">
        </td>
    </tr>
    <tr>
        <td>Nama Belakang</td>
        <td>:</td>
        <td>
        <input type="text" name="nama_belakang"class="form_control"value="<?=$profile['nama_belakang']?>">
    </td>
    </tr>
    <tr>
        <td>tempat lahir</td>
        <td>:</td>
        <td>
        <input type="date" name="tempat_lahir"class="form_control"value="<?=$profile['tempat_lahir']?>">
    </td>
    </tr>
    <tr>
        <td>tanggal_lahir</td>
        <td>:</td>
        <td>
        <input type="text" name="tanggal_lahir"class="form_control"value="<?=$profile['tanggal_lahir']?>">
    </td>
    </tr>
    <tr>
        <td>jenis_kelamin</td>
        <td>:</td>
        <td>
        <input type="radio" name="jenis_kelamin"value="L">L
        <input type="radio" name="jenis_kelamin"value="P">p
        </td>
    </tr>
        
    <tr>
        <td>alamat</td>
        <td>:</td>
        <td><textarea name="alamat" id="" cols="30" rows="3"></textarea></td>
    </tr>
    <tr>
        <td>Jenjang pendidikan</td>
        <td>:</td>
       <td><select name="jenjang_pendidikan"id="">
           <option value="SMK">SMK Sederajat</option>
           <option value="D3">D3</option>
           <option value="S1">S1</option>
           <option value="S2">S2</option>
        </select>
    </td>
    </tr>
    <tr>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3"class="text-center">
            <button type="submit"class="btn btn-primary">simpan</button>
            <a href=""class="btn btn-primary">kembali</a>

        </td>
    </tr>
<table>
<form>
</body>
</html>