<?php 
    include_once('connection.php');

    if (!isset($_GET['prodi']))
        return;

    $prodi = $_GET['prodi'];

    $query = "
        SELECT * FROM mahasiswa
        WHERE program_studi='".$prodi."'";
    $res = mysqli_query($conn, $query);

    $resData = [];
    while ($mhs = mysqli_fetch_array($res)) {
        $resData[] = $mhs;
    }

    header('Content-type: application/json');
    echo json_encode($resData);
?>
