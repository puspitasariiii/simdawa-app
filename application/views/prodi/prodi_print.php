<?php
$pdf = new FPDF("P", "cm", "A4");
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Program Studi");
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(19, 1, "KEMAHASISWAAN UNISKA BANJARMASIN", 0, 1, "C");
$pdf->SetFont("Arial", "", 11);
$pdf->Cell(19, 1, "Alamat: Jalan Adhyaksa No.3 Kel. Sungai Miai Kec. Banjarmasin Utara", 0, 1, "C");
$pdf->Line(1, 3, 20, 3);
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(19, 1, "Laporan Data Program Studi", 0, 1, "C");
$pdf->Ln();
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(0, 255, 0);
// Hitung lebar total tabel
$totalWidth = 1 + 10;

// Atur posisi X untuk menempatkan tabel di tengah
$x = ($pdf->GetPageWidth() - $totalWidth) / 2;
$pdf->SetX($x);

$pdf->Cell(1, 1, "No", 1, 0, "C", true);
$pdf->Cell(10, 1, "Nama Program Studi", 1, 1, "C", true);
$pdf->SetFont("Arial", "", 11);
$no = 1;
foreach ($prodi as $a) {
    $pdf->SetX($x); // Atur posisi X untuk setiap baris
    $pdf->Cell(1, 1, $no++, 1, 0, "C");
    $pdf->Cell(10, 1, $a->nama_prodi, 1, 1, "C");
}
$pdf->Output("I", "Laporan Data Prodi.pdf");
