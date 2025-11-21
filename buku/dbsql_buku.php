<?php
    class DbSQL_buku{
        // Variabel Koneksi
        private $cek_koneksi;

        function __construct(){
            require_once '../dbkoneksi.php';
            $db = new BuatKoneksi();
            $this->cek_koneksi = $db->koneksiBaru();
        }

        // SQL Tampil SEMUA DATA
        public function tampilSemuabuku(){
            $sql = $this->cek_koneksi->query("SELECT * FROM tb_buku ORDER BY judul_buku ASC");

            $tampil = array();
            while ($item = $sql->fetch_assoc()){
                $tampil[] = $item;
            }

            return $tampil;
        }

        // SQL Input/Tambah Data buku
        public function bukuTambah($judul_buku,$pengarang,$tahun_terbit,$kategori){
            $sql = $this->cek_koneksi->prepare("INSERT INTO tb_buku (judul_buku,pengarang,tahun_terbit,kategori) VALUES ('".$judul_buku."','".$pengarang."','".$tahun_terbit."','".$kategori."',)");

            $hasil = $sql->execute();
            return $hasil;
        }

        // SQL Ubah Data buku
        public function bukuUbah($id_buku,$judul_buku,$pengarang,$tahun_terbit,$kategori){
            $sql = $this->cek_koneksi->prepare("UPDATE tb_buku SET judul_buku = '".$judul_buku."', pengarang ='".$pengarang."', tahun_terbit ='".$tahun_terbit."', kategori ='".$kategori."' WHERE id = '".$id_buku."'");


            $hasil = $sql->execute();
            return $hasil;
        }

        // SQL Hapus Data buku
        public function bukuHapus($id_buku){
            $sql = $this->cek_koneksi->prepare("DELETE FROM tb_buku WHERE id = '".$id_buku."'");
            
            $hasil = $sql->execute();
            return $hasil;
        }   
    }

    

