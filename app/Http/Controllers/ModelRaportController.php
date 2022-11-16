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
        $mapelmerdeka = Mapel::where([['type',1],['kurikulum',3]])->orwhere([['type',1],['kurikulum',2]])->get();

        $mapelk13A = Mapel::where([['type',1],['kurikulum',3],['kelompok','A']])->orwhere([['type',1],['kurikulum',1],['kelompok','A']])->get();
        $mapelk13B = Mapel::where([['type',1],['kurikulum',3],['kelompok','B']])->orwhere([['type',1],['kurikulum',1],['kelompok','B']])->get();
        $extra = Mapel::where('type',2)->get();
        if ($id==1) {
            $pdf = PDF::loadView('format_raport.format-1.format-1',['format'=>$format,'mapelA'=>$mapelk13A,'mapelB'=>$mapelk13B,'no'=>1,'extra'=>$extra,'no2'=>1,'noB'=>1,'no3'=>1,'no4'=>1]);
            return $pdf->stream('kurikulum-13-1.pdf');
            #return view('format_raport.format-1.format-1',['format'=>$format]);
        }else{
            $pdf = PDF::loadView('format_raport.format-1.format-2',['format'=>$format,'mapel'=>$mapelmerdeka,'no'=>1,'extra'=>$extra,'no2'=>1]);
            return $pdf->stream('kurikulum-merdeka-1.pdf');
            #return view('format_raport.format-1.format-2',['format'=>$format]);
        }
    }

    public function format_raport_2($id)
    {
        $format = ModelRaport::findorfail($id);
        $mapelk13A = Mapel::where([['type',1],['kurikulum',3],['kelompok','A']])->orwhere([['type',1],['kurikulum',1],['kelompok','A']])->get();
        $mapelk13B = Mapel::where([['type',1],['kurikulum',3],['kelompok','B']])->orwhere([['type',1],['kurikulum',1],['kelompok','B']])->get();
        $mapelmerdeka = Mapel::where([['type',1],['kurikulum',3]])->orwhere([['type',1],['kurikulum',2]])->get();
        $extra = Mapel::where('type',2)->get();
        if ($id==1) {
            $pdf = PDF::loadView('format_raport.format-2.format-1',['format'=>$format,'mapelA'=>$mapelk13A,'mapelB'=>$mapelk13B,'no'=>1,'extra'=>$extra,'no2'=>1,'noB'=>1,'no3'=>1,'no4'=>1]);
            return $pdf->stream('kurikulum-13-2.pdf');
            
        }else{
            $pdf = PDF::loadView('format_raport.format-2.format-2',['format'=>$format,'mapel'=>$mapelmerdeka,'no'=>1,'extra'=>$extra,'no2'=>1]);
            return $pdf->stream('kurikulum-merdeka-2.pdf');
            
        }
    }
}
