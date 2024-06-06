<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Fungsi header
    function Header()
    {
        // Pilih font Arial tebal 15
        $this->SetFont('Arial', 'B', 15);
        // Pindah ke posisi tengah
        $this->Cell(80);
        // Judul
        $this->Cell(30, 10, 'Title', 1, 0, 'C');
        // Pindah baris
        $this->Ln(20);
    }

    // Fungsi footer
    function Footer()
    {
        // Pindah ke 1,5 cm dari bawah
        $this->SetY(-15);
        // Pilih font Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Nomor halaman
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    // Fungsi untuk menambahkan halaman dengan konten HTML sederhana
    function ChapterTitle($num, $label)
    {
        // Pilih font Arial 12
        $this->SetFont('Arial', '', 12);
        // Latar belakang warna
        $this->SetFillColor(200, 220, 255);
        // Judul bab
        $this->Cell(0, 10, "Chapter $num : $label", 0, 1, 'L', true);
        // Jarak antar baris
        $this->Ln(4);
    }

    function ChapterBody($body)
    {
        // Pilih font Arial 12
        $this->SetFont('Arial', '', 12);
        // Output teks
        $this->MultiCell(0, 10, $body);
        // Jarak antar baris
        $this->Ln();
    }
}

// Buat instance PDF
$pdf = new PDF();

// Tambah halaman
$pdf->AddPage();

// Set judul bab
$pdf->ChapterTitle(1, 'Hello, World!');

// Set konten bab
$pdf->ChapterBody('This is a PDF document generated without using any external libraries specifically for HTML to PDF conversion. It uses FPDF which is a PHP class for generating PDF files.');

// Tentukan jalur dan nama file untuk menyimpan PDF
$file_path = 'saved_document.pdf';

// Simpan PDF ke file
$pdf->Output('F', $file_path);

// Verifikasi apakah file berhasil disimpan
if (file_exists($file_path)) {
    echo 'PDF has been saved to ' . $file_path;
} else {
    echo 'Failed to save PDF';
}
?>
