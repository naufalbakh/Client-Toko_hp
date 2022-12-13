<?php
error_reporting(1);
include "Client-hp.php";

if($_POST['aksi'] == 'tambah'){
    $data = array("id_hp"=>$_POST['id_hp'],
                  "id_spesifikasi"=>$_POST['id_spesifikasi'],
                  "namahp"=>$_POST['namahp'],
                  "merek"=>$_POST['merek'],
                  "harga"=>$_POST['harga'],
                  "aksi"=>$_POST['aksi']);
    $abc -> tambah_data($data);
    header('location:hp.php');              
} else if ($_POST['aksi']=='ubah'){
    $data = array("id_hp"=>$_POST['id_hp'],
                  "id_spesifikasi"=>$_POST['id_spesifikasi'],
                  "namahp"=>$_POST['namahp'],
                  "merek"=>$_POST['merek'],
                  "harga"=>$_POST['harga'],
                  "aksi"=>$_POST['aksi']);
    $abc -> ubah_data($data);
    header('location:hp.php');               
} else if ($_GET['aksi']=='hapus'){
    $data = array("id_hp"=>$_GET['id_hp'],
                  "aksi"=>$_GET['aksi']);
    $abc -> hapus_data($data);         
    header('location:hp.php');
}  
unset($abc,$data);
?>