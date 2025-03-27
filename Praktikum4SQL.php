<?php
$conn = new mysqli('localhost', 'root', '', 'db_perpustakaan');

if ($conn->connect_error) {
    die("Koneksi gagal bang: " . $conn->connect_error);
}

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Data Buku</h2>

    <table>
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id_buku']}</td>
                            <td>{$row['judul']}</td>
                            <td>{$row['pengarang']}</td>
                            <td>{$row['tahun_terbit']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

<?php
$conn->close();
?>
