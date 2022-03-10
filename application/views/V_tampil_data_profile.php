<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMPIL PROFILE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body><p align=center>**TABEL PROFILE**</p>
<center><button class="btn btn-dark"><a href="<?= base_url('Admin/tambah_data_profile')?>"class="badge badge-success">Tambah Data Profile </a></button></center>
<table border="1"align= center class="table table-success container table-bordered">
        <thread>
            <tr class="table table-dark container">
                <th>No</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Tempat Lahir</th>
                <th>tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Jenjang Pendidikan</th>
                <th colspan="2">aksi</th>
            </tr>
        </thread>
<tbody>
    <?php $no = 1; foreach ($profile as $p){?>
        <tr>
                <td><?=$no?></td>
                <td><?=$p->nama_depan?></td>
                <td><?=$p->nama_belakang?></td>
                <td><?=$p->tempat_lahir?></td>
                <td><?=$p->tanggal_lahir?></td>
                <td><?=$p->jenis_kelamin?></td>
                <td><?=$p->alamat?></td>
                <td><?=$p->jenjang_pendidikan?></td>
                <td><a href="<?= base_url('Admin/update_data/'.$p->id)?>"class="badge badge-success"><i class="fa fa-edit"></i>edit</a></td>
                <td><a href="<?=  base_url('Admin/hapus_data/'.$p->id)?>"class="badge badge-success"><i class="fa fa-edit"></i>hapus</a></td>
        </tr>
          
        <?php $no++;}?>
    
    
</tbody>
</table>
</html>