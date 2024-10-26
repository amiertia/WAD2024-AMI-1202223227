<?php
//silahkan jawab disini (menangkap data dari form)

    $exercise= $_POST["exercise"];
    
// ========== Cek jika waktu_berolahraga berikan pesan error


//silahkan jawab disini (logika pola makan berdasarkan lama olahraga)
if ($exercise > 15) {
    $hasil = "kamu boleh makan nasi sebanyak 5 sendok makan ";
} elseif ($exercise <= 15 && $exercise > 0 ) {
    $hasil = "kamu tidak boleh makan nasi";
} else  {
    $hasil = "kamu dianjurkan untuk tidak makan malam dan melakukan olahraga ringan di malam hari selama 5 menit";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pola Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3>Hasil Pola Makan Anda</h3>
            <p class="alert alert-info">
                <!-- silahkan jawab disini (menampilkan hasil logika berdasarkan kondisi olahraga) -->
                    <?php
                        echo "<div class='alert alert-success'>: $hasil</div>";
                    
                    ?>
                    <!-- Hasil pesan error ditampilkan di sini -->
                    <?php
                    if (!empty($error)) {
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                    ?>
            </p>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>