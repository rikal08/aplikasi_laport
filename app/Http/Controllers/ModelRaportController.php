<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\ModelRaport;
use Illuminate\Http\Request;
use PDF;

class ModelRaportController extends Controller
{
    public function index()
    {
        $format = ModelRaport::all();
        return view('format_raport.read',['format'=>$format,'no'=>1]);
    }

    public function format_raport_1($id)
    {
        $format = ModelRaport::findorfail($id);
        $mapel = Mapel::where('type',1)->get();
        $extra = Mapel::where('type',2)->get();
        if ($id==1) {
            $pdf = PDF::loadView('format_raport.format-1.format-1',['format'=>$format,'mapel'=>$mapel,'no'=>1,'extra'=>$extra,'no2'=>1]);
            return $pdf->stream('kurikulum-13-1.pdf');
            #return view('format_raport.format-1.format-1',['format'=>$format]);
        }else{
            $pdf = PDF::loadView('format_raport.format-1.format-2',['format'=>$format,'mapel'=>$mapel,'no'=>1,'extra'=>$extra,'no2'=>1]);
            return $pdf->stream('kurikulum-merdeka-1.pdf');
            #return view('format_raport.format-1.format-2',['format'=>$format]);
        }
    }

    public function format_raport_2($id)
    {
        $format = ModelRaport::findorfail($id);
        $mapel = Mapel::where('type',1)->get();
        $extra = Mapel::where('type',2)->get();
        if ($id==1) {
            $pdf = PDF::loadView('format_raport.format-2.format-1',['format'=>$format,'mapel'=>$mapel,'no'=>1,'extra'=>$extra,'no2'=>1]);
            return $pdf->download('kurikulum-13-2.pdf');
            
        }else{
            $pdf = PDF::loadView('format_raport.format-2.format-2',['format'=>$format,'mapel'=>$mapel,'no'=>1,'extra'=>$extra,'no2'=>1]);
            return $pdf->stream('kurikulum-merdeka-2.pdf');
            
        }
    }
}
