<?php

  /*
    if(isset($_REQUEST['order_ticket'])){

        //**********SET TIME SERVER*********
        date_default_timezone_set("Asia/Jakarta");

        //********connector DB*******
        include "./mysql_connector.php";


        //***********REQUEST VARIABLE******************
        $administrasi_id = $_REQUEST['administrasi_id'];
            print "administrasi_id =".$administrasi_id."\n";

        $date_booking = $_REQUEST['date_booking'] ?? "";
            print "date_booking =".$date_booking."\n";
        $package_id = $_REQUEST['package_id'] ?? "";
            print "package_id =".$package_id."\n";
        $package_price = $_REQUEST['package_price'] ?? "";
            print "package_price =".$package_price."\n";
        $date_checkin = $_REQUEST['date_checkin'] ?? "";
            print "date_checkin =".$date_checkin."\n";
        $package_time = $_REQUEST['package_time'] ?? "";
            print "package_time =".$package_time."\n";
        $promo_id = $_REQUEST['promo_id'] ?? "";
            print "promo_id =".$promo_id."\n";
        $promo_price = $_REQUEST['promo_price'] ?? "";
            print "promo_price =".$promo_price."\n";
        if(isset($_REQUEST['additional_id'])){
            foreach($_REQUEST['additional_id'] as $add_id){$additional_id=$additional_id.$add_id.";";}    
        }   
            print "additional_id =".$additional_id."\n";
        if(isset($_REQUEST['additional_price'])){
            foreach($_REQUEST['additional_price'] as $add_price){$additional_price=$additional_price.$add_price.";";}    
        }   
            print "additional_price =".$additional_price."\n";
        $guest_name = $_REQUEST['guest_name'] ?? "";
            print "guest_name =".$guest_name."\n";
        $guest_email = $_REQUEST['guest_email'] ?? "";
            print "guest_email =".$guest_email."\n";
        $guest_phone = $_REQUEST['guest_phone'] ?? "";
            print "guest_phone =".$guest_phone."\n";
        $guest_amount = $_REQUEST['guest_amount'] ?? "";
            print "guest_amount =".$guest_amount."\n";
        if(isset($_REQUEST['guest_add_name'])){
            foreach($_REQUEST['guest_add_name'] as $add_name){$guest_add_name=$guest_add_name.$add_name.";";}    
        }
            print "guest_add_name =".$guest_add_name."\n";
        if(isset($_REQUEST['guest_add_note'])){
            foreach($_REQUEST['guest_add_note'] as $add_note){$guest_add_note=$guest_add_note.$add_note.";";}    
        }
            print"guest_add_note =".$guest_add_note."\n";
        $agent_name = $_REQUEST['agent_name'] ?? "";
            print "agent_name =".$agent_name."\n";
        $payment_by = $_REQUEST['payment_by'] ?? "";
            print "payment_by =".$payment_by."\n";
        $total_price = $_REQUEST['total_price'] ?? "";
            print "total_price =".$total_price."\n";
        $total_payment = $_REQUEST['total_payment'] ?? "";
            print "total_payment =".$total_payment."\n";
        $captain_id = $_REQUEST['captain_id'] ?? "";
            print "captain_id =".$captain_id."\n";
        $note = $_REQUEST['note'] ?? "";
            print "note =".$note."\n";
        if(isset($_REQUEST['medical_travel_assesment'])){
            foreach($_REQUEST['medical_travel_assesment'] as $add_assesment){$medical_travel_assesment=$medical_travel_assesment.$add_assesment.";";}    
        }
            print "travel_assesment =".$medical_travel_assesment."\n";
        $status_ticket = $_REQUEST['status_ticket'] ?? "";
            print "status_ticket =".$status_ticket."\n";
        $status_admin = $_REQUEST['status_admin'] ?? "";
            print "status_admin =".$status_admin."\n";
        $status_email = $_REQUEST['status_email'] ?? "";
            print "status_email =".$status_email."\n";
        $admin_id = $_REQUEST['admin_id'] ?? "";
            print "admin_id =".$admin_id."\n"; 
        

        //*************CREATE VOUCHER*******************
        $timestamp=strtotime(date("Y-m-d H:i:s"));
        $no_voucher = $timestamp."0".$administrasi_id;

        //*************LOOPING BY AMOUNT OF GUEST********
        for ($i=0;$i<=$guest_amount;$i++){

        //*************************INSERT DB ****************************
          $result_order_insert = mysqli_query($con, "insert into 03_ticket set 
          no_voucher = '".$no_voucher."', 
          date_booking = '".$date_booking."', 
          package_id = '".$package_id."', 
          package_price = '".$package_price."', 
          date_checkin = '".$date_checkin."', 
          package_time = '".$package_time."', 
          promo_id = '".$promo_id."', 
          promo_price = '".$promo_price."', 
          additional_id = '".$additional_id."', 
          additional_price = '".$additional_price."', 
          guest_name = '".$guest_name."', 
          guest_email = '".$guest_email."', 
          guest_phone = '".$guest_phone."', 
          guest_amount = '".$guest_amount."', 
          guest_add_name = '".$guest_add_name."', 
          guest_add_note = '".$guest_add_note."', 
          agent_name = '".$agent_name."', 
          payment_by = '".$payment_by."', 
          total_price = '".$total_price."', 
          total_payment = '".$total_payment."', 
          captain_id = '".$captain_id."', 
          note = '".$note."', 
          medical_travel_assesment = '".$medical_travel_assesment."', 
          status_ticket = '".$status_ticket."', 
          status_admin = '".$status_admin."', 
          status_email = '".$status_email."', 
          admin_id = '".$admin_id."' ;");
          
        }


    }
  */

  
  if(isset($_REQUEST['order_ticket'])){

    $signature = $_REQUEST['signature'];
        //print "signature =".$signature."\n";    

    date_default_timezone_set("Asia/Jakarta");

    //include "./mysql_connector.php";


    //***********REQUEST VARIABLE******************
    $administrasi_id = $_REQUEST['administrasi_id'];
        print "administrasi_id =".$administrasi_id."\n";

        // Membuat nomor voucher unik
        $timestamp = strtotime(date("Y-m-d H:i:s"));
    $no_voucher = $timestamp."0".$administrasi_id;
      print "no-voucher =".$no_voucher."\n";
    

    $date_booking = $_REQUEST['date_booking'] ?? "";
        print "date_booking =".date("Y-m-d")."\n";
    $package_id = $_REQUEST['package_id'] ?? "";
        print "package_id =".$package_id."\n";
    $package_price = $_REQUEST['package_price'] ?? "";
        print "package_price =".$package_price."\n";
    $date_checkin = $_REQUEST['date_checkin'] ?? "";
        print "date_checkin =".$date_checkin."\n";
    $package_time = $_REQUEST['package_time'] ?? "";
        print "package_time =".$package_time."\n";
    $promo_id = $_REQUEST['promo_id'] ?? "";
        print "promo_id =".$promo_id."\n";
    $promo_price = $_REQUEST['promo_price'] ?? "";
        print "promo_price =".$promo_price."\n";
    if(isset($_REQUEST['additional_id'])){
        $additional_id="";
        foreach($_REQUEST['additional_id'] as $add_id){if($add_id!=""){$additional_id=$additional_id.$add_id.";";}}    
    }   
        print "additional_id =".$additional_id."\n";
    if(isset($_REQUEST['additional_req'])){
      $additional_req="";
        foreach($_REQUEST['additional_req'] as $add_req){if($add_req!=""){$additional_req=$additional_req.$add_req.";";}}    
    }   
        print "additional_req =".$additional_req."\n";
    $guest_name = $_REQUEST['guest_name'] ?? "";
        print "guest_name =".$guest_name."\n";
    $guest_email = $_REQUEST['guest_email'] ?? "";
        print "guest_email =".$guest_email."\n";
    $guest_phone = $_REQUEST['guest_phone'] ?? "";
        print "guest_phone =".$guest_phone."\n";
    $guest_amount = $_REQUEST['guest_amount'] ?? "";
        print "guest_amount =".$guest_amount."\n";
    $guest_add_name = $_REQUEST['guest_add_name'];
        if(is_array($guest_add_name)){
            $guest_add_name = implode(";",$guest_add_name);
        }
        print "guest_add_name =".$guest_add_name."\n";
    /* if(isset($_REQUEST['guest_add_note'])){
        $guest_add_note="";
        foreach($_REQUEST['guest_add_note'] as $add_note){if($add_note!=""){$guest_add_note=$guest_add_note.$add_note.";";}}    
    } */
    $guest_add_note = $_REQUEST['guest_add_note'] ?? "";
        if(is_array($guest_add_note)){
            $guest_add_note = implode(";",$guest_add_note);
        }
        print"guest_add_note =".$guest_add_note."\n";
    $agent_name = $_REQUEST['agent_name'] ?? "";
        print "agent_name =".$agent_name."\n";
    $payment_by = $_REQUEST['payment_by'] ?? "";
        print "payment_by =".$payment_by."\n";
    $total_price = $_REQUEST['total_price'] ?? "";
        print "total_price =".$total_price."\n";
    $total_payment = $_REQUEST['total_payment'] ?? "";
        print "total_payment =".$total_payment."\n";
    $captain_id = $_REQUEST['captain_id'] ?? "";
        print "captain_id =".$captain_id."\n";
    $note = $_REQUEST['note'] ?? "";
        print "note =".$note."\n";
    $medical_travel_assesment = $_REQUEST['medical_travel_assesment'] ?? "";
    if (is_array($medical_travel_assesment)) {
        $medical_travel_assesment = implode(';', $medical_travel_assesment);
    }
        print "travel_assesment =".$medical_travel_assesment."\n";
    $status_ticket = $_REQUEST['status_ticket'] ?? "";
        print "status_ticket =".$status_ticket."\n";
    $status_admin = $_REQUEST['status_admin'] ?? "";
        print "status_admin =".$status_admin."\n";
    $status_email = $_REQUEST['status_email'] ?? "";
        print "status_email =".$status_email."\n";
    $admin_id = $_REQUEST['admin_id'] ?? "";
        print "admin_id =".$admin_id."\n"; 



    /*
      try {
          // Menggunakan transaksi jika diperlukan
          mysqli_begin_transaction($con);

          // Proses pengambilan variabel dari request
          $administrasi_id = $_REQUEST['administrasi_id'];
          // ... Ambil variabel lainnya seperti sebelumnya ...

          // Membuat nomor voucher unik
          $timestamp = strtotime(date("Y-m-d H:i:s"));
          $no_voucher = $timestamp."0".$administrasi_id;

          // Loop untuk setiap tamu
          for ($i=0; $i<=$guest_amount; $i++){
              $result_order_insert = mysqli_query($con, "insert into 03_ticket set 
                  no_voucher = '".$no_voucher."', 
                  date_booking = '".$date_booking."', 
                  package_id = '".$package_id."', 
                  package_price = '".$package_price."', 
                  date_checkin = '".$date_checkin."', 
                  package_time = '".$package_time."', 
                  promo_id = '".$promo_id."', 
                  promo_price = '".$promo_price."', 
                  additional_id = '".$additional_id."', 
                  additional_price = '".$additional_price."', 
                  guest_name = '".$guest_name."', 
                  guest_email = '".$guest_email."', 
                  guest_phone = '".$guest_phone."', 
                  guest_amount = '".$guest_amount."', 
                  guest_add_name = '".$guest_add_name."', 
                  guest_add_note = '".$guest_add_note."', 
                  agent_name = '".$agent_name."', 
                  payment_by = '".$payment_by."', 
                  total_price = '".$total_price."', 
                  total_payment = '".$total_payment."', 
                  captain_id = '".$captain_id."', 
                  note = '".$note."', 
                  medical_travel_assesment = '".$medical_travel_assesment."', 
                  status_ticket = '".$status_ticket."', 
                  status_admin = '".$status_admin."', 
                  status_email = '".$status_email."', 
                  admin_id = '".$admin_id."'");

              if (!$result_order_insert) {
                  throw new Exception("Gagal menyimpan data tiket: " . mysqli_error($con));
              }
          }

          // Commit transaksi jika berhasil
          mysqli_commit($con);
          echo "Pemesanan tiket berhasil.";

      } catch (Exception $e) {
          // Rollback transaksi jika terjadi kesalahan
          mysqli_rollback($con);
          echo "Terjadi kesalahan: " . $e->getMessage();
      }
    */
    //file_put_contents('./sign.txt', $signature);




      // Data gambar dalam base64
      $base64_string = $signature;
      // Hapus bagian tidak perlu dari data string (header, dsb)
      $base64_string = str_replace('data:image/png;base64,', '', $base64_string);

      // Decode base64 menjadi data biner
      $image_data = base64_decode($base64_string);

      // Direktori untuk menyimpan gambar
      $upload_dir = './';

      // Nama file yang diinginkan
      $file_name = $no_voucher.'.png';

      // Simpan gambar ke direktori
      $file = $upload_dir . $file_name;
      file_put_contents($file, $image_data);

      // Beritahu jika penyimpanan berhasil atau tidak
      if (file_exists($file)) {
          echo "Gambar berhasil disimpan di: $file";
      } else {
          echo "Gagal menyimpan gambar.";
      }



  }


?>