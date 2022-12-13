<?php
error_reporting(1);
include "client-pelanggan.php";

if($_POST['aksi'] == 'tambah'){
    $data = array("id_pelanggan"=>$_POST['id_pelanggan'],
                  "id_hp"=>$_POST['id_hp'],
                  "nik"=>$_POST['nik'],
                  "nama"=>$_POST['nama'],
                  "alamat"=>$_POST['alamat'],
                  "no_hp"=>$_POST['no_hp'],
                  "aksi"=>$_POST['aksi']);
    $abc -> tambah_pelanggan($data);
    header('location:pelanggan.php');              
} else if ($_POST['aksi']=='ubah'){
    $data = array("id_pelanggan"=>$_POST['id_pelanggan'],
                  "id_hp"=>$_POST['id_hp'],
                  "nik"=>$_POST['nik'],
                  "nama"=>$_POST['nama'],
                  "alamat"=>$_POST['alamat'],
                  "no_hp"=>$_POST['no_hp'],
                  "aksi"=>$_POST['aksi']);
    $abc -> ubah_pelanggan($data);
    header('location:pelanggan.php');               
} else if ($_GET['aksi']=='hapus'){
    $data = array("id_pelanggan"=>$_GET['id_pelanggan'],
                  "aksi"=>$_GET['aksi']);
    $abc -> hapus_pelanggan($data);         
    header('location:pelanggan.php');
}  
unset($abc,$data);
?>