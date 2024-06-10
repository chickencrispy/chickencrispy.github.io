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
  $body  = "<div style='width:100%;min-height:100vh;padding:1rem;background-color:#F7F7F7;box-sizing:border-box;'>";
  $body .= "<div style='width:720px;margin:auto;text-align:center;margin-bottom:1rem;'><img src='https://planetholidayhotel.com/wp-content/uploads/2023/01/New-Logo-PHH-1024x1024.png' style='height:64px;'></div>";
  $body .= "<div style='width:720px;margin:auto;'>";
  $body .= "<div style='padding:2rem;margin-bottom:1rem;background:#fff;border-radius:0.5rem;'>
              <div style='text-align:center;margin-bottom:3rem;'>
                <h2 style='margin:0;color:#22c55e;'>Your booking is now confirmed!</h2>
              </div>
              <div style='display:block;font-size:15px;line-height:20px;color:#475569;'>
                <p>Hi, ".$guestname_data.".</p>
                <p>For reference, your booking ID is ".$voucher_data.". To view, cancel, or modify your booking, use our easy self service.</p>
                <div style='margin-top:2rem;text-align:center;'>
                  <a href='http://localhost/user/?pg=8.8.1&details=".$encrypted_voucher."' style='margin:auto;padding:0.75rem 2rem;background:#3b82f6;color:#ffffff;text-decoration:none;border-radius:0.5rem;'>View Details</a>
                </div>
              </div>
            </div>";
  $body .= "<div style='padding:2rem;margin-bottom:1rem;background:#fff;border-radius:0.5rem;'>";
  $body .= "<h4 style='margin:0;margin-bottom:1rem;'>Booking Information</h4>
            <div style='display:flex'>
              <img src='__property_main_image__' style='width:33%;border-radius:0.5rem'>
              <div style='width:67%;padding-left:1rem;color:#475569;'>
                <h4 style='margin:0;margin-bottom:0.25rem;'>".ucwords($property_name_data)."</h4>
                <div style='font-size:13px;'>
                  <div style='color:#94a3b8;'>".ucwords($property_city_data).", ".ucwords($property_country_data)."</div>
                  <p style='margin-bottom:0.5rem;line-height:1.1rem;'>
                    ".ucwords($property_address_data)." <br>
                    ".ucwords($property_phone_data)."
                  </p>
                  <a href='".$property_map_data."'>Directions</a>
                </div>
              </div>
            </div>";

          
  $body .= "<table style='margin-top:2rem;width:100%;font-size:14px;border-collapse:collapse;color:#475569;'>
            <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
              <td style='padding:0.5rem 0;color:#64748b'>Reservation</td>
              <td align='right'>".$roomqty_data." room(s), ".$lengthstay_data." night(s)</td>
            </tr>
            <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
              <td style='padding:0.5rem 0;color:#64748b'>Room Type</td>
              <td align='right'>".implode(',',array_unique($roomtype_data))."</td>
            </tr>
            <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
              <td style='padding:0.5rem 0;color:#64748b'>Check In</td>
              <td align='right'>".date("D d F Y",strtotime($checkin_data))." (After ".$checkinpolicy_data.")</td>
            </tr>
            <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
              <td style='padding:0.5rem 0;color:#64748b'>Check Out</td>
              <td align='right'>".date("D d F Y",strtotime($checkout_data))." (Before ".$checkoutpolicy_data.")</td>
            </tr>
            <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
              <td style='padding:0.5rem 0;color:#64748b'>Guest Name</td>
              <td align='right'>".ucwords($guestname_data)."</td>
            </tr>
            <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
              <td style='padding:0.5rem 0;color:#64748b'>Breakfast</td>
              <td align='right'>".$breakfast_data_1."</td>
            </tr>";


if(isset($extras_name_data)){
    $body .="
              <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
                <td style='padding:0.5rem 0;color:#64748b'>Extras</td>
                <td align='right'>".implode(",",$extras_name_data)."</td>
              </tr>";
}

if(isset($promotion_data_1[0])){
    $body .="
              <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
              <td style='padding:0.5rem 0;color:#64748b'>Promotion</td>
              <td align='right'>".implode(", ",$promotion_data_1)."</td>
            </tr>
              <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
                <td style='padding:0.5rem 0;color:#64748b'>Special Request</td>
                <td align='right'>".$specialrequest_data."</td>
              </tr>
            </table>
            <p style='font-size:13px;color:#475569;'>All special requests are subject to availability upon arrival.</p>
          </div>";
}

    $body .= "<div style='padding:2rem;margin-bottom:1rem;background:#fff;border-radius:0.5rem;'>
            <h4 style='margin:0;margin-bottom:1rem;'>Payment Details</h4>
            <div style='color:#475569;'>
              <p>Your booking is confirm and to be paid at property.</p>
              
              <table style='margin-top:1rem;width:100%;font-size:14px;border-collapse:collapse;'>
                <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
                  <td style='padding:0.5rem 0;color:#64748b'>".$roomqty_data." room(s), ".$lengthstay_data." night(s)</td>
                  <td style='font-weight:bold;' align='right'>IDR ".number_format($roomtotal_data,0,".",",")."</td>
                </tr>";

if(isset($extras_name_data)){
  for($i=0;$i<=count($extras_name_data)-1;$i++){
    $body .="   <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
                      <td style='padding:0.5rem 0;color:#64748b'>".ucwords($extras_name_data[$i])." (".$extras_allotment_data[$i].") "."</td>
                      <td style='font-weight:bold;' align='right'>IDR ".number_format($extras_total_data[$i],0,".",",")."</td>
                    </tr>";
  }
}

for($i=0;$i<=count($additional_name_data)-1;$i++){
  if(($additional_name_data[$i] != "")&&($price_additional[$i] != 0)){
    $body .= "      <tr style='border-width:0;border-bottom-width:1px;border-style:solid;border-color:#cbd5e1;'>
                            <td style='padding:0.5rem 0;color:#64748b'>".$additional_name_data[$i]." (".$additional_data[$i].")"."</td>
                            <td style='font-weight:bold;' align='right'>IDR ".number_format($price_additional[$i],0,".",",")."</td>
                          </tr>";

  }
}

  $body .= "      <tr>
                  <td style='padding:0.5rem 0;color:#64748b'>GRAND TOTAL</td>
                  <td style='font-size:16px;font-weight:bold;' align='right'>IDR ".number_format($total_price_data,0,".",",")."</td>
                </tr>
              </table>
            </div>
          </div>";

  $body .= "<div style='display:flex;'>
            <div style='display:flex;margin:auto;'>
              <div style='font-size:13px;color:#64748b;margin:4px 5px 0 0;'>Powered by</div>
              <img src='https://planethms.com/wp-content/uploads/2024/02/planethms-siteicon-dr.png' height='24px'>
              <div style='font-size:13px;color:#64748b;margin:4px 0 0 5px;'>planet<b>hms</b></div>
            </div>
          </div>
        </div>
      </div>";




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
    $mail->addAddress($reservation_email, ucwords($guestname_data)); // Alamat email penerima
    $mail->Subject = $property_name_data.' Confirmation booking #'.$voucher_data; // Subjek email
    $mail->isHTML(true);
    $mail->Body = $body; // Isi email

    // Kirim email
    $mail->send();

      //************UPDATE RESERVATON*********
      $result_status_reservation = mysqli_query($con, "update 09_reservation set d22='1' where d4 like'".$voucher_data."' ;");

    echo 'Email has been sent successfully';
  } catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";

  }
?>