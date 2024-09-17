<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "project_unsur");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no = $_POST['no'];
    $tanggal = $_POST['tanggal'];
    $uraian = $_POST['uraian'];
    $rincian = $_POST['rincian'];
    $kode_akun = $_POST['kode_akun'];
    $pengeluaran = $_POST['pengeluaran'];

    $sql = "INSERT INTO pengeluaran (no, tanggal, uraian, rincian, kode_akun, pengeluaran)
            VALUES ('$no', '$tanggal', '$uraian', '$rincian', '$kode_akun', '$pengeluaran')";

    if ($conn->query($sql) === TRUE) {
        echo "Pengeluaran berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Mendapatkan data pengeluaran untuk ditampilkan di tabel history
$sql = "SELECT * FROM pengeluaran ORDER BY tanggal DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pengeluaran Pembayaran Mahasiswa</title>
</head>
<body>

<h2>Form Pengeluaran Pembayaran Mahasiswa</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    No: <input type="text" name="no" required><br><br>
    Tanggal: <input type="date" name="tanggal" required><br><br>
    Uraian: <input type="text" name="uraian" required><br><br>
    Rincian: <textarea name="rincian" required></textarea><br><br>
    Kode Akun: <input type="text" name="kode_akun" required><br><br>
    Pengeluaran: <input type="number" step="0.01" name="pengeluaran" required><br><br>
    <input type="submit" value="Submit">
</form>

<h2>History Pengeluaran</h2>
<table border="1">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Uraian</th>
        <th>Rincian</th>
        <th>Kode Akun</th>
        <th>Pengeluaran</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["no"] . "</td>";
            echo "<td>" . $row["tanggal"] . "</td>";
            echo "<td>" . $row["uraian"] . "</td>";
            echo "<td>" . $row["rincian"] . "</td>";
            echo "<td>" . $row["kode_akun"] . "</td>";
            echo "<td>" . $row["pengeluaran"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No data found</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
