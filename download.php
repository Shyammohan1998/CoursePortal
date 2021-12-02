<?php
// Downloads files
include 'DBconnection.php';
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "select * from `study_materials` where `id`=$id;";
    $res = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($res);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "update `study_materials` set `downloads`=$newCount where `id`=$id;";
        mysqli_query($conn, $updateQuery);
        exit;
    }
}

if (isset($_GET['file'])) {
    $id = $_GET['file'];

    $filepath = 'uploads/' . $id;

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $id));
        readfile('uploads/' . $id);

        exit;
    }
}


