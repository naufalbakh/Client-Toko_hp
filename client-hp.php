<?php
error_reporting(1);
class Client{
    private $url;

    public function __construct($url){
        $this->url=$url;
        unset($url);
    }
    public function filter($data){
        $data = preg_replace('/[^a-zA-Z0-9]/','',$data);
        return $data;
        unset($data);
    }
    public function tampil_semua_hp(){
        $client = curl_init($this->url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        // mengembalikan data
        return $data;
        // menghapus variabel dari memory
        unset($data, $client, $response);
    }

    public function tampil_hp($id_hp){
        $id_hp = $this->filter($id_hp);
        $client = curl_init($this->url."?aksi=tampil&id_hp=".$id_hp);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_hp, $client, $response, $data);
    }
    public function tambah_hp($data){
        $data = '{
            "id_hp":"'.$data['id_hp'].'",
            "id_spesifikasi":"'.$data['id_spesifikasi'].'",
            "namahp":"'.$data['namahp'].'",
            "merek":"'.$data['merek'].'",
            "harga":"'.$data['harga'].'",
            "aksi":"'.$data['aksi'].'"
        }';   
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function ubah_hp($data){
        $data='{"id_hp":"'.$data['id_hp'].'",
            "id_spesifikasi":"'.$data['id_spesifikasi'].'",
            "namahp":"'.$data['namahp'].'",
            "merek":"'.$data['merek'].'",
            "harga":"'.$data['harga'].'",
            "aksi":"'.$data['aksi'].'"                
               }';
        $c = curl_init();
        curl_setopt($c,CURLOPT_URL,$this->url);
        curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($c,CURLOPT_POST,true);
        curl_setopt($c,CURLOPT_POSTFIELDS,$data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data,$c,$response); 
    }



    public function hapus_hp($data){
        $id_hp = $this->filter($data['id_hp']);
        $data='{"id_hp":"'.$id_hp.'",
                "aksi":"'.$data['aksi'].'"
                }';
        $c = curl_init();
        curl_setopt($c,CURLOPT_URL,$this->url);
        curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($c,CURLOPT_POST,true);
        curl_setopt($c,CURLOPT_POSTFIELDS,$data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_hp,$data,$c,$response); 
    }
    public function __destruct(){
        unset($this->options,$this->api);
    }

}

$url = 'http://192.168.1.6/tokohp/server/server_hp.php';
$abc = new Client($url);
