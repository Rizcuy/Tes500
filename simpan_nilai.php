<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_quiz';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama     = $conn->real_escape_string($_POST['nama']);
    $kategori = $conn->real_escape_string($_POST['kategori']);
    $skor     = intval($_POST['skor']);

    $sql = "INSERT INTO nilai_quiz (nama_pengunjung, kategori_quiz, skor) VALUES ('$nama', '$kategori', '$skor')";

    if ($conn->query($sql) === TRUE) {
        echo "Sukses menyimpan nilai";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
