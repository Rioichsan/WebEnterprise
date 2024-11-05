<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Biodata</title>
    <style>
        /*ukuran font untuk judul */
        h1 {
            font-size: 35px; /* Ubah ukuran font sesuai kebutuhan */
            text-align: center;
        }
        /*ukuran font dan jarak antar paragraf */
        p {
            font-size: 18px; /*ukuran font */
            line-height: 1.15; /* Jarak antar baris */
            margin-bottom: 20px; /* Jarak antar paragraf */
        }
    </style>
</head>
<body>
    <div class="biodata">
        <h1>BIODATA MAHASISWA</h1>
        <p><strong>Nama :</strong> <?php echo $data['name']; ?></p>
        <p><strong>Umur :</strong> <?php echo $data['age_ttl']; ?> Tahun</p>
        <p><strong>NIM :</strong> <?php echo $data['NIM']; ?></p>
        <p><strong>Alamat :</strong> <?php echo $data['Alamat']; ?></p>
        <p><strong>Alamat :</strong> <?php echo $data['no_hp']; ?></p>
        <p><strong>Email :</strong> <?php echo $data['Email']; ?></p>
    </div>
</body>
</html>
