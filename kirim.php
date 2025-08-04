<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "alyasama226@gmail.com"; // email tujuan
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // format isi email 
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";

    // header lengkap
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim";
    } else {
        echo "Gagal mengirim pesan.";
    }
}
?>