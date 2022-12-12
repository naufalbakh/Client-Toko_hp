<?php
error_reporting(1);
include "client-spesifikasi.php";

if($_POST['aksi'] == 'tambah'){
    $data = array("id_spesifikasi"=>$_POST['id_spesifikasi'],
                  "ram_rom"=>$_POST['ram_rom'],
                  "os"=>$_POST['os'],
                  "baterai"=>$_POST['baterai'],
                  "resolusi"=>$_POST['resolusi'],
                  "kamera"=>$_POST['kamera'],
                  "jaringan"=>$_POST['jaringan'],
                  "aksi"=>$_POST['aksi']);
    $abc -> tambah_spesifikasi($data);
    header('location:index.php?page=daftar-data');              
} else if ($_POST['aksi']=='ubah'){
    $data = array("id_spesifikasi"=>$_POST['id_spesifikasi'],
                  "ram_rom"=>$_POST['ram_rom'],
                  "os"=>$_POST['os'],
                  "baterai"=>$_POST['baterai'],
                  "resolusi"=>$_POST['resolusi'],
                  "kamera"=>$_POST['kamera'],
                  "jaringan"=>$_POST['jaringan'],
                  "aksi"=>$_POST['aksi']);
    $abc -> ubah_spesifikasi($data);
    header('location:index.php?page=daftar-data');               
} else if ($_GET['aksi']=='hapus'){
    $data = array("id_spesifikasi"=>$_GET['id_spesifikasi'],
                  "aksi"=>$_GET['aksi']);
    $abc -> hapus_spesifikasi($data);         
    header('location:index.php?page=daftar-data');
}  
unset($abc,$data);
