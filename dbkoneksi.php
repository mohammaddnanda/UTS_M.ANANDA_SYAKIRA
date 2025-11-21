<?php
    class BuatKoneksi{
        //Buat Variabel cek Koneksi
        private $cek_koneksi;

        //Buat Function untuk membuat Koneksi Baru
        public function koneksiBaru(){
            require_once 'dbconfig.php';
            $this->cek_koneksi = new mysqli(dblokasi, dbuser, dbpsw, dbnama);
            return $this->cek_koneksi;
        }
    }
?>