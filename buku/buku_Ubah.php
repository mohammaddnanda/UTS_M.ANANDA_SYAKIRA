<?php
    require_once 'dbsql_buku.php';

    $db = new DbSQL_buku();

    $hasilJson = array("sukses" => TRUE);
    if (isset($_POST['judul_buku'])){
        $id_buku             = $_POST['id_buku'];
        $judul_buku          = $_POST['judul_buku'];
        $pengarang           = $_POST['pengarang'];
        $tahun_terbit        = $_POST['tahun_terbit'];
        $kategori            = $_POST['kategori'];

        $sqlStatement = $db->bukuUbah($id_buku, $judul_buku, $pengarang, $tahun_terbit, $kategori);
        if ($sqlStatement == 1){
            $hasilJson['sukses']        = TRUE;
            $hasilJson['pesan']         = 'Proses Ubah buku Sukses..';
            echo json_encode($hasilJson);
        }else{
            $hasilJson['sukses']       = FALSE;
            $hasilJson['pesan']        = 'Ubah buku Gagal..';
            echo json_encode($hasilJson);
        }
    }else{
        $hasilJson['sukses']       = FALSE;
        $hasilJson['pesan']        = 'ID Tidak diketahui..';
        echo json_encode($hasilJson);
    }
?>