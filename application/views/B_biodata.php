<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biodata</title>
</head>
<body>
    <center><h1>SELAMAT DATANG DI BIODATA</h1></center>
    <center><a href="<?= base_url('Admin/tambah_data')?>">input data</a></center>
<table border="1" width="50%" align="center">
    <tr>
        <td>Nama</td>        
        <td>:</td>        
        <td><?= $nama ?></td>  
    </tr>  
    <tr>
        <td>Alamat</td>      
        <td>:</td>      
        <td><?= $alamat ?></td>  
    </tr> 
    <tr>
        <td>No_hp</td>       
        <td>:</td>       
        <td><?= $no_hp ?></td>  
    </tr>  
    <tr>
        <td>Email</td>       
        <td>:</td>       
        <td><?= $email ?></td>  
    </tr>  
    <tr>
        <td>Sekolah</td>     
        <td>:</td>     
        <td><?= $sekolah ?></td>  
    </tr>  

    <tr>
        <td>tempat_lahir</td>     
        <td>:</td>     
        <td><?= $tempat_lahir?></td>  
    </tr>  

    <tr>
        <td>tanggal_lahir</td>     
        <td>:</td>     
        <td><?= $tempat_lahir ?></td>  
    </tr> 

    <tr>
        <td>jenis_kelamin</td>     
        <td>:</td>     
        <td><?= $jenis_kelamin ?></td>  
    </tr>   
    <tr>
        <td>hobi</td>     
        <td>:</td>     
        <td><?= $hobi ?></td>  
    </tr>   
    <tr>
        <td>status</td>     
        <td>:</td>     
        <td><?= $status ?></td>  
    </tr>   
    <tr>
        <td>upload foto</td>     
        <td>:</td>     
        <td><?= $upload_foto ?></td>  
    </tr>   
    <button name="input"></button>
</table>

</body>
</html>