<?php
    require_once 'dbsql_buku.php';

    $db = new DbSQL_buku();

    $hasilJson = array("sukses" => TRUE);
    if (isset($_POST['id_buku'])){

        $id_buku         = $_POST['id_buku'];


        $sqlStatement = $db->bukuHapus(id_buku: $id_buku);
        if ($sqlStatement == 1){
            $hasilJson['sukses']       = TRUE;
            $hasilJson['pesan']         = 'Proses Hapus buku Sukses..';
            echo json_encode($hasilJson);
        }else{
            $hasilJson['sukses']       = FALSE;
            $hasilJson['pesan']       = 'Hapus buku Gagal..';
            echo json_encode($hasilJson);
        }
    }else{
        $hasilJson['sukses']       = FALSE;
        $hasilJson['pesan']       = 'Anda belum melengkapi data..';
        echo json_encode($hasilJson);
    }
?>