<?php
  // Impor class PHPMailer
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  // Memuat autoloader PHPMailer (pastikan autoloader ini mengarah ke direktori PHPMailer yang benar)
  if(!class_exists('PHPMailer\PHPMailer\Exception')){
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php'; 
  }
  // Inisialisasi objek PHPMailer
  $mail  = new PHPMailer(true);
  $body  = "<div>TESTING</div>";
  

  try {
    // Konfigurasi SMTP
    $mail->isSMTP(); // Menggunakan SMTP
    $mail->Host = 'smtp.zoho.com'; // Ganti dengan alamat SMTP Anda
    $mail->SMTPAuth = true; // Aktifkan otentikasi SMTP
    $mail->Username = 'no-reply@planethms.com'; // Ganti dengan email Anda
    $mail->Password = '$Planethms2024$'; // Ganti dengan kata sandi email Anda
    $mail->SMTPSecure = 'ssl'; // Gunakan TLS Encryption
    $mail->Port = 465; // Port SMTP

    // Siapkan email
    $mail->setFrom('no-reply@planethms.com', 'PlanetHMS'); // Alamat email dan nama pengirim
    $mail->addAddress($reservation_email); // Alamat email penerima
    $mail->Subject = 'Confirmation booking #'; // Subjek email
    $mail->isHTML(true);
    $mail->Body = $body; // Isi email

    // Kirim email
    $mail->send();

      echo 'Email has been sent successfully';
  } catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";

  }
?>