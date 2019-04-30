<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Imagick;
use App\User;
use App\Bcard;
use Session;

class GeneratePDF extends Controller
{
  public function index()
  {
    $bcards = Bcard::all();
// dd($bcards);
    return view('bcards/index', compact('bcards'));
  }

  public function create()
  {
    return view('bcards/create');
  }

  public function store(Request $request)
  {
    $config = ['instanceConfigurator' => function ($mpdf) {
      $mpdf->SetWatermarkText('PROOF'); // Will cope with UTF-8 encoded text
      $mpdf->watermark_font = 'DejaVuSansCondensed'; // Uses default font if left blank
      $mpdf->watermarkTextAlpha = 0.095;
      $mpdf->watermarkImageAlpha = 0.5;
      $mpdf->watermarkImgBehind = false;
      $mpdf->AddPageByArray([
        'orientation' => 'P',
        'sheet-size' => [88.9, 50.8],
        'resetpagenum' => '1',
        'pagenumstyle' => 'i',
        'suppress' => 'on',
        'mode' => 'utf-8',
        'display_mode' => 'fullpage',
        'default_font_size' => '12',
        'mgl' => 0,
        'mgr' => 0,
        'mgt' => 0,
        'mgb' => 0,
        'mgh' => 0,
        'mgf' => 0,

      ]);
    }];

    $pdf = PDF::loadView('pdfView', compact('request'), [], $config);
    $pdf->save('assets/test.pdf');

    $pathToPdf = 'assets/test.pdf';
    $pathToWhereImageShouldBeStored = 'assets/test.jpg';
    $image = new Imagick($pathToPdf);
    $image->setImageFormat("jpg");
    $image->writeImage($pathToWhereImageShouldBeStored);

    $bcards = new Bcard();
    $bcards->name = $request->name;
    $bcards->title = $request->title;
    $bcards->description = $request->description;
    $bcards->property_website = $request->property_website;
    $bcards->direct = $request->direct;
    $bcards->office = $request->office;
    $bcards->cell = $request->cell;
    $bcards->fax = $request->fax;
    $bcards->address = $request->address;
    $bcards->address2 = $request->address2;
    $bcards->city = $request->city;
    $bcards->state = $request->state;
    $bcards->zip = $request->zip;

    $bcards->save();

    // return $pdf->stream('document.pdf')->with(compact('user'));

    return view('/bcards/show');
  }

  public function show()
  {
    return view('bcards/show');
  }
}