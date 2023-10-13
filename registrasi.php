<?php
    include 'koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["regUsername"]) && isset($_POST["regPassword"])) {
            $username = $_POST["regUsername"];
            $password = $_POST["regPassword"];

            $encrypt_password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (username, password) VALUES ('$username', ' $encrypt_password')";

            if($koneksi->query($query) === TRUE) {
                echo "<script>window.location.href = 'index.php';</script>";
                echo "<script>window.location.href='index.php';</script>";
            } else {
                echo "Error " . $query . "<br>" . $koneksi->error;
            }
        }
    }