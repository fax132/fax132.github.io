<?php
// Cek apakah parameter 'file' ada
if (isset($_GET['file'])) {
    $file = "files/" . basename($_GET['file']); // Ambil nama file dengan keamanan

    // Cek apakah file ada
    if (file_exists($file)) {
        // Set header untuk download
        header('Content-Description: File Transfer');
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));

        // Baca file dan kirim ke user
        readfile($file);
        exit;
    } else {
        echo "File tidak ditemukan!";
    }
} else {
    echo "Akses tidak valid!";
}
?>