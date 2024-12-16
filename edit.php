<?php
// Konfigurasi koneksi MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pgweb";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek apakah ada `id` yang diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data berdasarkan id
    $sql = "SELECT * FROM responsi WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $marker = $result->fetch_assoc();

    if (!$marker) {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}

// Proses pengeditan data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $jambuka = $_POST['Jam_Buka'];
    $rating = $_POST['Rating'];
    $langitude = $_POST['Latitude'];
    $longitude = $_POST['Longitude'];

    // Query untuk mengupdate data
    $sql = "UPDATE responsi SET Nama = ?, Alamat = ?, Jam_Buka = ?, Rating = ?, Latitude = ?, Longitude = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssdii", $nama, $alamat, $jambuka, $rating, $langitude, $longitude, $id);

    if ($stmt->execute()) {
        echo "Data berhasil diperbarui.";
        header("Location: najwa.php"); // Ganti dengan nama file yang sesuai
        exit;
    } else {
        echo "Gagal memperbarui data: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!-- Form untuk mengedit data -->
<form method="post">
    <label for="Nama">Nama:</label>
    <input type="text" name="Nama" value="<?php echo htmlspecialchars($marker['Nama']); ?>" required><br>

    <label for="Alamat">Alamat:</label>
    <input type="text" name="Alamat" value="<?php echo htmlspecialchars($marker['Alamat']); ?>" required><br>

    <label for="Jam_Buka">Jam Buka:</label>
    <input type="number" name="Jam_Buka" value="<?php echo htmlspecialchars($marker['Jam_Buka']); ?>" required><br>

    <label for="Rating">Rating:</label>
    <input type="number" name="Rating" value="<?php echo htmlspecialchars($marker['Rating']); ?>" required><br>

    <label for="Latitude"> Latitude:</label>
    <input type="number" name="Latitude" value="<?php echo htmlspecialchars($marker['Latitude']); ?>" required><br>

    <label for="Longitude"> Longitude:</label>
    <input type="number" name="Longitude" value="<?php echo htmlspecialchars($marker['Longitude']); ?>" required><br>

    <input type="submit" value="Update">
</form>