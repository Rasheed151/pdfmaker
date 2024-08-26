<?php
namespace App\Http\Controllers;

use App\Models\ambil;
use App\Models\simpan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        // Ambil data berdasarkan ID
        $ambil = ambil::findOrFail($id);

        // Load view template dengan data yang sudah disiapkan
        $pdf = Pdf::loadView('pdfid', compact('ambil'));

        // Download file PDF
        return $pdf->download('laporan_testing' . $ambil->id . '.pdf');
    }


    public function make()
    {
        $data = simpan::all();

        // Gunakan FQN untuk memanggil PDF
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf', compact('data'));

        return $pdf->download('laporan.pdf');
    }
}
