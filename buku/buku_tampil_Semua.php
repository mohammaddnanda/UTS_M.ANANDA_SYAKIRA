<?php
    require_once 'dbsql_buku.php';

    $db = new DbSQL_buku();

    $hasilJson = array("isError" => FALSE);
    $sqlStatement = $db->tampilSemuabuku();
    $hasilJson['isError']   = False;
    $hasilJson['message']   = 'Tampil Semua buku..';
    $hasilJson['data']      = $sqlStatement;
    echo json_encode($hasilJson);
?>