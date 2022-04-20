<?php

namespace App\Http\Controllers;

use App\Models\CandidatesTypesCandidates;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;


class PdfEducationalEstablishmentController extends Controller
{
    public function gerarPdf() {


        $candidature = CandidatesTypesCandidates::get();
          //return view('admin.relatorios.pdfestab', compact('candidature'));
          $fileName = 'estabelecimentos.pdf';

          $mpdf = new \Mpdf\Mpdf([
              'margin_left' => 10,
              'margin_right' => 10,
              'margin_top' => 15,
              'margin_bottom' => 20,
              'margin_header' => 10,
              'margin_footer' => 10,
              'mode' => 'utf-8',
              'orientation' => 'L'

          ]);

          $html = view('admin.relatorios.pdfestab')->with('candidature', $candidature);;
          $html = $html->render();
          $mpdf->WriteHTML($html);
          $mpdf->Output($fileName, 'I');



          //$html = \View::make('admin.relatorios.pdfestab')->with('candidature', $candidature);

            $candidature = CandidatesTypesCandidates::all();
            //dd($candidature);
            //$pdf = PDF::loadView('relatorios/pdfestab');


    }
}
