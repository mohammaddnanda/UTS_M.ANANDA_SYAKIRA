<?php
    require_once 'dbsql_buku.php';

    $db = new DbSQL_buku();

    $hasilJson = array("sukses" => TRUE);
    if (isset($_POST['judul_buku'])){

        $judul_buku          = $_POST['judul_buku'];
        $pengarang           = $_POST['pengarang'];
        $tahun_terbit        = $_POST['tahun_terbit'];
        $kategori            = $_POST['kategori'];

        $sqlStatement = $db->bukuTambah($judul_buku, pengarang: $pengarang, tahun_terbit: $tahun_terbit, kategori: $kategori);
        if ($sqlStatement == 1){
            $hasilJson['sukses']       = TRUE;
            $hasilJson['pesan']         = 'Proses Tambah buku Sukses..';
            echo json_encode($hasilJson);
        }else{
            $hasilJson['sukses']       = FALSE;
            $hasilJson['pesan']        = 'Tambah buku Gagal..';
            echo json_encode($hasilJson);
        }
    }else{
        $hasilJson['sukses']       = FALSE;
        $hasilJson['pesan']        = 'Anda belum melengkapi data..';
        echo json_encode($hasilJson);
    }
?>