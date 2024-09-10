<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "project_pabudi");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$peruntukan = $_POST['peruntukan'];
$tanggal = $_POST['tanggal'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$jumlah_uang = $_POST['jumlah_uang'];
$semester = $_POST['semester'];
$angkatan = $_POST['angkatan'];
$cara_bayar = $_POST['cara_bayar'];

// Insert data into the database
$sql = "INSERT INTO pembayaran (tanggal, nama_mahasiswa, jumlah_uang, peruntukan, semester, angkatan, cara_bayar) 
        VALUES ('$tanggal', '$nama_mahasiswa', '$jumlah_uang', '$peruntukan', '$semester', '$angkatan', '$cara_bayar')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();
?>
