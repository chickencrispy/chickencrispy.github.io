<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Fungsi header
    function Header()
    {
        // Logo
        $this->Image('banyumilir.png', 85, 10, 30); // Adjust position and size as needed
        // Pindah ke posisi tengah
        $this->SetY(60);
        // Pilih font Arial tebal 15
        $this->SetFont('Arial', 'B', 15);
        // Judul
        $this->Cell(0, 10, 'Dolphin & Snorkeling Tour', 0, 0, 'C');
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
    function ChapterBody($body)
    {
        // Pilih font Arial 12
        $this->SetFont('Arial', '', 12);
        // Output teks
        $this->MultiCell(0, 10, $body);
        // Jarak antar baris
        $this->Ln();
    }

    function AddContent($body)
    {
        $this->ChapterBody($body);
    }
}

// Buat instance PDF dengan ukuran halaman F4
$pdf = new PDF('P', 'mm', array(210, 330));

// Tambah halaman dan konten
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 15); // Enable auto page break with a margin of 15 mm

$content = '
To join Dolphin & Snorkeling tour, it\'s important to be in good physical health.

1. If you have any pre-existing health conditions, such as a heart condition or respiratory condition, contact your tour operator before booking to determine whether you can safely do the tour. People who are susceptible to any of the following health conditions should seek medical evaluation. This Medical Tour Participant Questionnaire provides a basis for deciding whether you should seek this evaluation.

2. If you have any concerns about your suitability for snorkeling that are not listed on this form, consult your doctor before doing snorkeling. If you feel ill, avoid dolphin watching and snorkeling.

3. If you think you may have a contagious disease, protect yourself and others by not participating in dolphin watching and snorkeling. This form is intended primarily as an initial medical evaluation for travelers going dolphin watching and snorkeling.

4. If you decide to take your children on a dolphin and snorkeling tour, ensure they are fully briefed and know what they will be doing before entering the water. Children need constant adult supervision on board and in the water.

5. To avoid putting yourself or others at risk, it is important to know how to use and feel comfortable with your equipment; otherwise, you could flood your mask or swallow nasty saltwater. This can be really scary and dangerous if you don\'t know how to handle the situation!

6. Most tour captains require you to be able to swim if you want to do snorkeling. Even if some activity providers let you sign up without knowing how to swim, don\'t rely on guides to save you. You need to be responsible for yourself.

7. Alcohol and ocean activities are not a good mix. Being under the influence can impair your swimming abilities and awareness, turning what should be a beautiful experience into a safety hazard.

Terms and Conditions

Participant Signature: _______________________________

';

$pdf->AddContent($content);

// Decode base64 string menjadi data gambar
$image_data = base64_decode($base64_image);

// Tentukan path dan nama file untuk menyimpan gambar PNG
$png_file = 'signature.png';

// Simpan data gambar ke file PNG
file_put_contents($png_file, $image_data);

// Tambahkan tanda tangan ke dalam dokumen PDF
$pdf->Image($png_file, 10, 10, 50, 20); // Atur posisi dan ukuran gambar sesuai kebutuhan Anda



// Tentukan jalur dan nama file untuk menyimpan PDF
$file_path = 'saved_dolphin_snorkeling_document.pdf';

// Simpan PDF ke file
$pdf->Output('F', $file_path);

// Verifikasi apakah file berhasil disimpan
if (file_exists($file_path)) {
    echo 'PDF has been saved to ' . $file_path;
} else {
    echo 'Failed to save PDF';
}
?>
