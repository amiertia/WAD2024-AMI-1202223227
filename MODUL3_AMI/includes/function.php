<?php

include("dbconnection.php");

// buatkan function addStudent()
function addStudent()
{
    // variabel global
    global $conn;

    // Silakan buat variabel di bawah dengan data yang diambil dari form
    $stuname = $_POST ["stuname"];
    $stuclass = $_POST ["stuclass"];
    $stuangkatan = $_POST ["stuangangkatan"];
    $stuid = $_POST ["stuid"];


    // Periksa apakah NIM sudah ada
    $ret = mysqli_query($conn, "SELECT tb_student FROM WHERE nim= '$stuid'");

    if (mysqli_num_rows($ret) == 0) {
        // Masukkan data ke tabel tb_student
        $query = "INSERT INTO tb_student (Student Name, NIM, Jurusan, Angkatan) VALUES ($stuname, $stuid, $stuclass, $stuangkatan)';
        $result = mysqli_query($conn, $query);

        /**
         * Buatlah logika untuk Memeriksa hasil dari operasi penambahan data mahasiswa.
    
         * 
         * Jika operasi berhasil, menampilkan pesan bahwa mahasiswa telah ditambahkan
         * dan mengarahkan pengguna ke halaman 'add-students.php'.
         * Jika operasi gagal, menampilkan pesan kesalahan.
         * Jika NIM sudah ada, menampilkan pesan bahwa NIM sudah ada.
         */
         }
        if ($result) {
        header('Location: addStudent.php');
    } else {
        echo '
        <script>
            alert('Data failed');
            document.location.href = addStudent.php;
        </script>
        exit;
        ';
        
    }
}



function editStudent($id) {
    global $conn;

    // Ambil input dari form dan simpan dalam variabel

    $stuname = $_POST ["stuname"];
    $stuid = $_POST ["stuid"];
    $stuclass = $_POST ["stuclass"];
    $stuangkatan = $_POST ["stuangangkatan"];

    // Isi query dibawah untuk update data mahasiswa berdasarkan ID
    $query = "UPDATE tb_student addStudent SET
        $stuid = 'studid' 
        WHERE id = '&stuid';"
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Student data has been updated.")</script>';
        echo "<script>window.location.href ='manage-students.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}


?>