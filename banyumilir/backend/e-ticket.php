<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Fungsi header
    function Header()
    {
        $this->SetFont('Arial', 'B', 16);
        $this->SetTextColor(0, 102, 204); // Warna biru
        $this->SetX(70);
        $this->Cell(0, 10, 'E-Ticket', 0, 1, 'L'); // Geser judul ke kiri dengan parameter 'L'
        $this->Ln(5);
    }

    // Fungsi footer
    function Footer()
    {
        // Pindah ke 1,5 cm dari bawah
        $this->SetY(-15);
        // Pilih font Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Nomor halaman
        //$this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    // Fungsi untuk menambahkan garis di pinggir halaman
    function AddBorder()
    {
        $this->SetLineWidth(0.5);
        $this->Rect(2, 2, 199.2, 78.55); // Menggambar persegi panjang dari titik (2, 2) dengan lebar 199.2mm dan tinggi 78.55mm
    }

    // Fungsi untuk menampilkan informasi boarding pass
    function AddBoardingPass($flightDetails)
    {
        $this->SetFont('Arial', '', 10); // Ukuran font dikurangi untuk menyesuaikan konten ke halaman
        $this->SetTextColor(0, 0, 0); // Warna hitam

        // Tampilkan informasi boarding pass        
        $this->SetFont('Arial', 'B', 16); // 
        $this->Cell(38, 8, '#'.$flightDetails['Voucher Number'], 0, 1, 'L');
        $this->Ln(5);

        $this->SetFont('Arial', '', 10); // Kembalikan ke font biasa untuk informasi berikutnya
        $this->Cell(38, 8, 'Booked Name', 0, 0, 'L');
        $this->Cell(0, 8, $flightDetails['Passenger Name'], 0, 1, 'L');
        $this->Cell(38, 8, 'Package', 0, 0, 'L');
        $this->Cell(0, 8, $flightDetails['Package'], 0, 1, 'L');
        $this->Cell(38, 8, 'Slot', 0, 0, 'L');
        $this->Cell(0, 8, $flightDetails['Amount'].' Pax', 0, 1, 'L');

        
        // Posisi 'Booking Date' di sudut bawah kiri
        $this->SetX(10); // Atur posisi X
        $this->SetY(68); // Atur posisi Y
        $this->Cell(38, 8, 'Booking Date', 0, 0, 'L');
        $this->SetFont('Arial', '', 14); // 
        $this->SetTextColor(255, 0, 0); // Warna merah
        $this->Cell(0, 8, date(' F d, Y',strtotime($flightDetails['Booking Date'])). ' | '. $flightDetails['Booking Time'], 0, 1, 'L');

        // Tambahkan gambar PNG
        $image_file = 'logo.png'; // Ganti dengan nama dan lokasi file gambar PNG Anda
        list($width, $height) = getimagesize($image_file); // Ambil dimensi asli gambar

        // Hitung ulang skala gambar agar sesuai dengan area yang ditentukan
        $max_width = 40; // Lebar maksimum gambar dalam mm
        $max_height = 40; // Tinggi maksimum gambar dalam mm
        $aspect_ratio = $width / $height;

        if ($aspect_ratio > 1) { // Gambar lebih lebar dari tinggi
            $new_width = $max_width;
            $new_height = $new_width / $aspect_ratio;
        } else { // Gambar lebih tinggi dari lebar atau persegi
            $new_height = $max_height;
            $new_width = $new_height * $aspect_ratio;
        }

        // Tentukan posisi gambar pada halaman PDF
        $x = 150; // Posisi x pada halaman PDF
        $y = 25; // Posisi y pada halaman PDF

        // Tampilkan gambar pada posisi yang sudah dihitung dengan skala yang sesuai
        $this->Image($image_file, $x, $y, $new_width, $new_height, 'PNG');

        // Tambahkan garis putus-putus vertikal
        $this->SetLineWidth(0.2);
        $this->SetDash(1, 1); // Mengatur garis putus-putus (1 mm panjang garis, 1 mm panjang spasi)
        $this->Line(145, 5, 145, 77.55); // Menggambar garis putus-putus dari titik (145, 5) ke (145, 77.55)
        $this->SetDash(); // Kembali ke garis penuh
    }

    // Fungsi untuk mengatur garis putus-putus
    function SetDash($black=null, $white=null)
    {
        if($black !== null)
            $s = sprintf('[%.3F %.3F] 0 d', $black*$this->k, $white*$this->k);
        else
            $s = '[] 0 d';
        $this->_out($s);
    }
}

// Data contoh untuk boarding pass
$flightDetails = [
    'Passenger Name' => 'John Doe',
    'Voucher Number' => '149872827211',
    'Package' => 'Snorkeling & Diving',
    'Amount' => '8',
    'Booking Date' => '2024-07-10',
    'Booking Time' => '10:00 AM',
];

// Buat instance PDF dengan ukuran halaman 203.2mm x 82.55mm
$pdf = new PDF('L', 'mm', array(203.2, 82.55));

// Tambah halaman dan konten
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 5); // Enable auto page break with a margin of 5 mm
$pdf->AddBorder();
$pdf->AddBoardingPass($flightDetails);

// Tentukan jalur dan nama file untuk menyimpan PDF
$file_path = 'boarding_pass.pdf';

// Simpan PDF ke file
$pdf->Output('F', $file_path);

// Verifikasi apakah file berhasil disimpan
if (file_exists($file_path)) {
    echo 'PDF has been saved to ' . $file_path;
} else {
    echo 'Failed to save PDF';
}
?>
