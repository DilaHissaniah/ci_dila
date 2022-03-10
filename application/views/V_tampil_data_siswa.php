<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><a href="<?= base_url('Siswa/tambah_data_siswa')?>">input data</a></center>
<center><table border="1"></center>
        <thread>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama Lengkap siswa</th>
                <th>Tempat Lahir siswa</th>
                <th>Tgl lahir siswa</th>
                <th>siswa nohp</th>
                <th>Program id</th>
                <th colspan="2">action</th>
            </tr>
        </thread>
<tbody>
    <?php $no = 1; foreach ($siswa as $sw){?>
        <tr>
                <td><?=$no?></td>
                <td><?=$sw->siswa_nisn?></td>
                <td><?=$sw->siswa_nis?></td>
                <td><?=$sw->siswa_nama_lengkap?></td>
                <td><?=$sw->siswa_tempat_lahir?></td>
                <td><?=$sw->siswa_tgl_lahir?></td>
                <td><?=$sw->siswa_nohp?></td>
                <td><?=$sw->program_id?></td>
                <td><a href="<?php  base_url("edit_data_profile")?>">edit</a></td>
                <td><a href="<?php  base_url("hapus_data_profile")?>">hapus</a></td>
        </tr>
        <?php $no++;}?>
    
    
</tbody>
</table>
</html>