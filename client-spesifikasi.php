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
    public function tampil_semua_spesifikasi(){
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

    public function tampil_spesifikasi($id_spesifikasi){
        $id_spesifikasi = $this->filter($id_spesifikasi);
        $client = curl_init($this->url."?aksi=tampil&id_spesifikasi=".$id_spesifikasi);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_spesifikasi, $client, $response, $data);
    }
    
    public function tambah_spesifikasi($data){
        $data = '{
            "id_spesifikasi":"'.$data['id_spesifikasi'].'",
            "ram_rom":"'.$data['ram_rom'].'",
            "os":"'.$data['os'].'",
            "baterai":"'.$data['baterai'].'",
            "resolusi":"'.$data['resolusi'].'",
            "kamera":"'.$data['kamera'].'",
            "jaringan":"'.$data['jaringan'].'",
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

    public function ubah_spesifikasi($data){
        $data='{"id_spesifikasi":"'.$data['id_spesifikasi'].'",
            "ram_rom":"'.$data['ram_rom'].'",
            "os":"'.$data['os'].'",
            "baterai":"'.$data['baterai'].'",
            "resolusi":"'.$data['resolusi'].'",
            "kamera":"'.$data['kamera'].'",
            "jaringan":"'.$data['jaringan'].'",
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



    public function hapus_spesifikasi($data){
        $id_spesifikasi = $this->filter($data['id_spesifikasi']);
        $data='{"id_spesifikasi":"'.$id_spesifikasi.'",
                "aksi":"'.$data['aksi'].'"
                }';
        $c = curl_init();
        curl_setopt($c,CURLOPT_URL,$this->url);
        curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($c,CURLOPT_POST,true);
        curl_setopt($c,CURLOPT_POSTFIELDS,$data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_spesifikasi,$data,$c,$response); 
    }
    public function __destruct(){
        unset($this->options,$this->api);
    }

}

$url = 'http://localhost/tokohp/server/server_spesifikasi.php';
$abc = new Client($url);
