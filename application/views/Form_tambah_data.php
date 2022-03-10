<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Biodata</title>
</head>
<body>
    <h1>FORM TAMBAH BIODATA</H1>
    <form action="<?= base_url('Admin/action_tambah_data')?>"method="post">
<table>
    <tr>
        <td><label>nama lengkap</label></td>
        <td>:</td>
        <td><input type="text" name="namaa"></td>
        
    </tr>

    <tr>
        <td><label>Alamat</label></td>
        <td>:</td>
         <td><textarea name="alamatt" id="" cols="30" rows="3"></textarea></td>
         
    </tr>

    <tr>
        <td><label>No_hp</label></td>
        <td>:</td>
        <td><input type="text" name="no_hp"></td>
        
    </tr>

    <tr>
        <td><label>Email</label></td>
        <td>:</td>
        <td><input type="email" name="emaill"></td>
        
    </tr>

    <tr>
        <td><label>Sekolah</label></td>
        <td>:</td>
        <td><input type="text" name="sekolahh"></td>
         
    </tr>

    <tr>
        <td><label>Tempat Lahir</label></td>
        <td>:</td>
        <td><input type="text" name="tmpt_lhr"></td>
         
    </tr>

    <tr>
        <td><label>Tanggal Lahir</label></td>
        <td>:</td>
        <td><input type="date" name="tgl_lhr"></td>
         
    </tr>

    <tr>
        <td><label>Jenis Kelamin</label></td>
        <td>:</td>
       <td><select name="jenis_kelamin"id="">
           <option value="L">laki-laki</option>
           <option value="p">perempuan</option>
        </select></td>
        
    </tr>

    <tr>
        <td><label>Hobi</label></td>
        <td>:</td>
        <td>
            <input type="checkbox" name="hobi"value="membaca">membaca
            <input type="checkbox" name="hobi"value="menulis">menulis
            <input type="checkbox" name="hobi"value="menyanyi">menyanyi
            <input type="checkbox" name="hobi"value="berenang">berenang
        </td>
         
    </tr>

    <tr>
        <td><label>Status</label></td>
        <td>:</td>
        <td>
        <input type="radio" name="status"value="pelajar">pelajar
        <input type="radio" name="status"value="menikah">menikah
         
    </tr>
    <tr>
        <td><label>Upload foto</label></td>
        <td>:</td>
        <td><input type="file" name="foto"></td>
         
    </tr>
</table>
    <button name="simpan">simpan</button>
</form>
</body>
</html>
