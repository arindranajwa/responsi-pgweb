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

// Ambil semua data dari tabel
$sql = "SELECT * FROM responsi";
$result = $conn->query($sql);

// Array untuk menyimpan data marker
$markers = [];

// Jika ada data yang ditemukan
if ($result->num_rows > 0) {
    echo "<table border='1px'><tr>
    <th>Id</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jam Buka</th>
    <th>Rating</th>
    <th>Longitude</th>
    <th>Latitude</th>
    <th>Delete</th>
    <th>Edit</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["Nama"] . "</td>
        <td>" . $row["Alamat"] . "</td>
        <td>" . $row["Jam_Buka"] . "</td>
        <td>" . $row["Rating"] . "</td>
        <td>" . $row["Longitude"] . "</td>
        <td>" . $row["Latitude"] . "</td>
        <td><a href='delete.php?id=" . $row["id"] . "' onclick=\"return confirm('Yakin hapus data ini?');\">Delete</a></td>
        <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>
        </tr>";

        // Simpan data untuk marker (pastikan tipe data Latitude dan Longitude sebagai float)
        $markers[] = [
            "Nama" => $row["Nama"],
            "Alamat" => $row["Alamat"],
            "Jam_Buka" => $row["Jam_Buka"],
            "Rating" => $row["Rating"],
            "Longitude" => (float)$row["Longitude"],
            "Latitude" => (float)$row["Latitude"],
        ];
    }
    echo "</table>";
} else {
    echo "Tidak ada data ditemukan.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Persebaran Cafe</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <style>
        #map {
            width: 100%;
            height: 400px;
            margin-bottom: 20px;
            border: 2px solid #006464;
            border-radius: 0px;
        }

        body {
            background-color: #d7e8df;
            font-family: 'Times New Roman', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #007373;
            margin: 20px;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            border-radius: 3px;
            overflow: hidden;
            box-shadow: 0;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007171;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Peta Persebaran Cafe</h1>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([-7.418441397220469, 111.027292908913], 13); // Default koordinat: Yogyakarta

        // Tile layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Ambil data marker dari PHP
        var markers = <?php echo json_encode($markers, JSON_NUMERIC_CHECK); ?>;

        // Variabel untuk bounds (mencakup semua marker)
        var bounds = L.latLngBounds();

        // Tambahkan marker ke peta
        markers.forEach(function(marker) {
            var latLng = [marker.Latitude, marker.Longitude];
            L.marker(latLng)
                .addTo(map)
                .bindPopup("<b>" + marker.Nama + "</b><br>" + marker.Alamat + "<br>Rating: " + marker.Rating);
            bounds.extend(latLng);
        });

        // Menyesuaikan peta agar sesuai dengan semua marker
        if (markers.length > 0) {
            map.fitBounds(bounds);
        }
    </script>
</body>

</html>
