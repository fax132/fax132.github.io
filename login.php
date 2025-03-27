<?php
// Cek apakah form dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simulasi data user (biasanya diambil dari database)
    $user_email = "user@example.com";
    $user_password = "12345"; // Ini hanya contoh, password asli harus di-hash

    // Cek apakah email dan password sesuai
    if ($email == $user_email && $password == $user_password) {
        echo "Login berhasil! Selamat datang, " . htmlspecialchars($email);
    } else {
        echo "Email atau password salah!";
    }
} else {
    echo "Akses ditolak!";
}
?>