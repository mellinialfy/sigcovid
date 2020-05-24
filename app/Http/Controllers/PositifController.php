<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Positif;
use App\DetPositif;
use App\Kabupaten;
use Carbon\Carbon;

use DB;

class PositifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        
        $caritgl = $request->get('caritgl');
        
        $kabupaten = Kabupaten::all();
        $carikabupaten = $request->get('carikabupaten');
        

        if(isset($caritgl)){

            $tglnow = Carbon::parse($request->caritgl)->isoFormat('LL');

            $totaldirawat = Positif::select(DB::raw('COALESCE(SUM(dirawat),0) as dirawat'))
            ->where('tgl',$request->caritgl)
            
            ->get();
            $totalsembuh = Positif::select(DB::raw('COALESCE(SUM(sembuh),0) as sembuh'))
            ->where('tgl',$request->caritgl)
            
            ->get();
            $totalmeninggal = Positif::select(DB::raw('COALESCE(SUM(meninggal),0) as meninggal'))
            ->where('tgl',$request->caritgl)
            
            ->get();
            $totalpositif = Positif::select(DB::raw('COALESCE(SUM(jml_positif),0) as jml_positif'))
            ->where('tgl',$request->caritgl)
            
            ->get();

            $positif=Positif::where('tgl','like',"%".$caritgl."%")
            ->where('tb_positif.id_kabupaten','like',"%".$carikabupaten."%")
            ->paginate(10);
        } elseif (isset($caritgl) && !empty($carikabupaten)) {
            $tglnow = Carbon::parse($request->caritgl)->isoFormat('LL');

            $totaldirawat = Positif::select(DB::raw('COALESCE(SUM(dirawat),0) as dirawat'))
            ->where('tgl',$request->caritgl)
            ->where('id_kabupaten',$request->carikabupaten)
            ->get();
            $totalsembuh = Positif::select(DB::raw('COALESCE(SUM(sembuh),0) as sembuh'))
            ->where('tgl',$request->caritgl)
            ->where('id_kabupaten',$request->carikabupaten)
            ->get();
            $totalmeninggal = Positif::select(DB::raw('COALESCE(SUM(meninggal),0) as meninggal'))
            ->where('tgl',$request->caritgl)
            ->where('id_kabupaten',$request->carikabupaten)
            ->get();
            $totalpositif = Positif::select(DB::raw('COALESCE(SUM(jml_positif),0) as jml_positif'))
            ->where('tgl',$request->caritgl)
            ->where('id_kabupaten',$request->carikabupaten)
            ->get();

            $positif=Positif::where('tgl','like',"%".$caritgl."%")
            ->where('tb_positif.id_kabupaten','like',"%".$carikabupaten."%")
            ->paginate(10);
        } 
        else {

            $tglnow = date('Y-m-d');

            $totaldirawat = Positif::select(DB::raw('COALESCE(SUM(dirawat),0) as dirawat'))->where('tgl',$tglnow)->get();
            $totalsembuh = Positif::select(DB::raw('COALESCE(SUM(sembuh),0) as sembuh'))->where('tgl',$tglnow)->get();
            $totalmeninggal = Positif::select(DB::raw('COALESCE(SUM(meninggal),0) as meninggal'))->where('tgl',$tglnow)->get();
            $totalpositif = Positif::select(DB::raw('COALESCE(SUM(jml_positif),0) as jml_positif'))->where('tgl',$tglnow)->get();

            $positif = Positif::where('tgl' , date('Y-m-d'))->get();
        }

        
        // return $positif;
        return view('data', ['positif' => $positif, 'kabupaten' => $kabupaten, 'tglnow' => $tglnow, 'totaldirawat' => $totaldirawat, 'totalsembuh' => $totalsembuh, 'totalmeninggal' => $totalmeninggal, 'totalpositif' => $totalpositif]);

        // data sesuai nama file blade
        // 'positif' ini adalah nama untuk di bladenya, ex: positif as $p
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kabupaten = Kabupaten::all();
        return view('tambahdata', ['kabupaten' => $kabupaten]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cek = Positif::where('id_kabupaten',$request->id_kabupaten)->where('tgl',$request->tgl)->count();
        if($cek == 0){
            $positif = new Positif();
        }else{
            $positif = Positif::where('id_kabupaten',$request->id_kabupaten)->where('tgl',$request->tgl)->first();
            $positif->status = 1;
        }


        $this->validate($request,[
            'tgl' => 'required',
            'ic' => 'required',
            'tl' => 'required',
            'dirawat' => 'required',
            'sembuh' => 'required',
            'meninggal' => 'required',
            'jml_positif' => 'required',
            'wna' => 'required',
            'wni' => 'required',
            'id_kabupaten' => 'required'

    ]);

        if ($cek == 0) {

        Positif::create([
            'tgl' => $request->tgl,
            'ic' => $request->ic,
            'tl' => $request->tl,
            'dirawat' => $request->dirawat,
            'sembuh' => $request->sembuh,
            'meninggal' => $request->meninggal,
            'jml_positif' => $request->jml_positif,
            'wna' => $request->wna,
            'wni' => $request->wni,
            'id_kabupaten' => $request->id_kabupaten
        ]);
    } else {
        return redirect('/')->with('alert', 'Data Sudah Ada, Silakan Lakukan Edit');
    }
        

        return redirect('/')->with('alert', 'Data Berhasil Tersimpan');
        // return $request;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $positif = Positif::find($id);
        return view('editdata', ['positif' => $positif]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            // 'tgl' => 'required',
            'ic' => 'required|numeric',
            'tl' => 'required|numeric',
            'dirawat' => 'required|numeric',
            'sembuh' => 'required|numeric',
            'meninggal' => 'required|numeric',
            'jml_positif' => 'required|numeric',
            'wna' => 'required|numeric',
            'wni' => 'required|numeric'
            // 'kabupaten' => 'required'
        ]);

        $positif = Positif::find($id);
        // $positif->tgl = $request->tgl;
        $positif->ic = $request->ic;
        $positif->tl = $request->tl;
        $positif->dirawat = $request->dirawat;
        $positif->sembuh = $request->sembuh;
        $positif->meninggal = $request->meninggal;
        $positif->jml_positif = $request->jml_positif;
        $positif->wna = $request->wna;
        $positif->wni = $request->wni;
        // $positif->kabupaten = $request->kabupaten;
        $positif->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $positif = Positif::where('id_positif',$id);
        $positif->delete();
        return redirect('/');
    }


    public function createPallette(Request $request)
    {

        $HexFrom = ltrim($request->start, '#');
        $HexTo = ltrim($request->end, '#');

    
        $ColorSteps = 9;
        $FromRGB['r'] = hexdec(substr($HexFrom, 0, 2));
        $FromRGB['g'] = hexdec(substr($HexFrom, 2, 2));
        $FromRGB['b'] = hexdec(substr($HexFrom, 4, 2));
    
        $ToRGB['r'] = hexdec(substr($HexTo, 0, 2));
        $ToRGB['g'] = hexdec(substr($HexTo, 2, 2));
        $ToRGB['b'] = hexdec(substr($HexTo, 4, 2));
    
        $StepRGB['r'] = ($FromRGB['r'] - $ToRGB['r']) / ($ColorSteps - 1);
        $StepRGB['g'] = ($FromRGB['g'] - $ToRGB['g']) / ($ColorSteps - 1);
        $StepRGB['b'] = ($FromRGB['b'] - $ToRGB['b']) / ($ColorSteps - 1);
    
        $GradientColors = array();
    
        for($i = 0; $i <= $ColorSteps; $i++) {
        $RGB['r'] = floor($FromRGB['r'] - ($StepRGB['r'] * $i));
        $RGB['g'] = floor($FromRGB['g'] - ($StepRGB['g'] * $i));
        $RGB['b'] = floor($FromRGB['b'] - ($StepRGB['b'] * $i));
    
        $HexRGB['r'] = sprintf('%02x', ($RGB['r']));
        $HexRGB['g'] = sprintf('%02x', ($RGB['g']));
        $HexRGB['b'] = sprintf('%02x', ($RGB['b']));
    
        $GradientColors[] = implode(NULL, $HexRGB);
        }
        $collect = collect($GradientColors);
        $filtered = $collect->filter(function($value, $key){
            return strlen($value) == 6;
        });
        return $filtered;
    }

    
    function len($val){
        return (strlen($val) == 6 ? true : false );
    }


    public function getDataMap(Request $request)
    {
        $tglnow = Carbon::now()->format('Y-m-d');
        if (is_null($request->date)) {
            $tanggal = $tglnow;
        }else{
            $tanggal = $request->date;
        }

        $dataMap = Positif::select('tb_positif.id_positif', 'tb_kabupaten.id_kabupaten', 'tb_kabupaten.nama_kabupaten', 'tb_positif.sembuh', 'tb_positif.dirawat', 'tb_positif.jml_positif', 'tb_positif.meninggal')
        ->rightjoin('tb_kabupaten', 'tb_positif.id_kabupaten', '=', 'tb_kabupaten.id_kabupaten')
        ->where('tgl', $tanggal)
        ->orderby('id_kabupaten','ASC')
        ->get();

        $dataColor = Positif::select('tb_positif.id_positif', 'tb_kabupaten.id_kabupaten', 'tb_kabupaten.nama_kabupaten', 'tb_positif.sembuh', 'tb_positif.dirawat', 'tb_positif.jml_positif', 'tb_positif.meninggal')
        ->rightjoin('tb_kabupaten', 'tb_positif.id_kabupaten', '=', 'tb_kabupaten.id_kabupaten')
        ->where('tgl', $tanggal)
        ->orderby('jml_positif','DESC')
        ->get();
        return response()->json(["dataMap"=>$dataMap, "dataColor"=>$dataColor]);
        // return $positif;
    }

    // public function getPositif(Request $request)
    // {
    //     $tglnow = Carbon::now()->format('Y-m-d');
    //     if (is_null($request->date)) {
    //         $tanggal = $tglnow;
    //     }else{
    //         $tanggal = $request->date;
    //     }

    //     $dataColor = Positif::select('tb_positif.id_positif', 'tb_kabupaten.id_kabupaten', 'tb_kabupaten.nama_kabupaten', 'tb_positif.sembuh', 'tb_positif.dirawat', 'tb_positif.jml_positif', 'tb_positif.meninggal')
    //     ->rightjoin('tb_kabupaten', 'tb_positif.id_kabupaten', '=', 'tb_kabupaten.id_kabupaten')
    //     ->where('tgl', $tanggal)
    //     ->orderby('jml_positif','DESC')
    //     ->get();
    //     return response()->json(["dataColor"=>$dataColor]);
    //     // return $pos;

    // }

}
