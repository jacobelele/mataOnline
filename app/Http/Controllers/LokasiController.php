<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\DbModel;
use Auth;
use DB;
use Schema;
use PDF;

class LokasiController extends Controller
{
    public function inputData(){
      $listProvinsi = DB::table('provinsi')->get();
      $listKota = DB::table('kabupaten')->get();
      $listKecamatan = DB::table('kecamatan')->get();
      $listKelurahan = DB::table('kelurahan')->get();
      // dd($listProvinsi)
      return view('globalInput',compact('listProvinsi','listKota','listKecamatan','listKelurahan'));
    }

    public function getData(){
      $listProvinsi = DB::table('provinsi')->get();
      $listKota = DB::table('kabupaten')->get();
      $listKecamatan = DB::table('kecamatan')->get();
      $listKelurahan = DB::table('kelurahan')->get();
      // dd($listProvinsi)
      return view('globalFetch',compact('listProvinsi','listKota','listKecamatan','listKelurahan'));
    }

    public function sendData(){
      $listProvinsi = DB::table('provinsi')->get();
      $listKota = DB::table('kabupaten')->get();
      $listKecamatan = DB::table('kecamatan')->get();
      $listKelurahan = DB::table('kelurahan')->get();
      // dd($listProvinsi)
      return view('globalSend',compact('listProvinsi','listKota','listKecamatan','listKelurahan'));
    }


    public function getBidang(Request $request)
     {
         $term = strtoupper(trim($request->q));
         if (empty($term)) {
             return \Response::json([]);
         }
         $provinsi = DB::table('bidang')
                     ->where('bidang.nama','like','%'.$term.'%')
                     ->get();
         $formatted_tags = [];
         foreach ($provinsi as $tag) {
             $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
         }
         return response()->json($formatted_tags);
     }
     public function getTabulasi(Request $request)
     {
         $term = strtoupper(trim($request->q));
         $id = strtoupper(trim($request->s));
         if (empty($term)) {
             return \Response::json([]);
         }
         $provinsi = DB::table('tabulasi')
                     ->where('tabulasi.nama','like','%'.$term.'%')
                     ->where('tabulasi.bidang_id','=',$id)
                     ->get();
         $formatted_tags = [];
         foreach ($provinsi as $tag) {
             $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
         }
         return response()->json($formatted_tags);
     }
     public function viewDyn($id)
     {
         // $returnHTML = view('job.userjobs')->with('userjobs', $userjobs)->render();
         $view = DB::table('tabulasi')
                ->select('tabulasi.view_laravel')
                ->where('tabulasi.id','=',$id)
                ->get();
              // dd($view[0]->view_laravel);
         $returnHTML = view($view[0]->view_laravel)->render();
         return $returnHTML;
     }

     public function getTable($idTab,$kelId,$thn)
     {
       $tbl1 = DB::table('bid_'.$idTab)->where('bid_'.$idTab.'.kelurahan_id','like',$kelId.'%')->where('bid_'.$idTab.'.tahun','like',$thn.'%')->get();

       $tbl = DB::table('tabulasi')
             ->select('tabulasi.data_laravel')
             ->where('tabulasi.id','=',$idTab)
             ->get();
       $returnHTML = view($tbl[0]->data_laravel,['idTab'=>$idTab,'tbl1'=>$tbl1])->render();
       // dd($returnHTML);
       return $returnHTML;
     }

     function convertType($string){
       if(!(strpos($string,'int')===false) || !(strpos($string,'year')===false) ){
         return 'number';
       }else if(!(strpos($string,'text')===false) || !(strpos($string,'varchar')===false)){
         return 'text';
      }else{

      }
     }

     public function show($idTab,$id,FormBuilder $formBuilder)
     {
        $tbl1 = DB::table('bid_'.$idTab)->where('id','=',$id)->get()->toArray();
        $db = new DbModel();
        $dat = $db->dBase($idTab);
        $put = $dat->where('id',$id);
        // $columns = Schema::getColumnListing('bid_'.$idTab);
        $columns = DB::select('show columns from ' . 'bid_'.$idTab);
        $test = (array)$tbl1[0];
        $valueForm = array();
        $i = 0;
        // dd($test);
        foreach ($columns as $key => $value){
          if($i >= 4){
            array_push($valueForm,[
              'name' => $value->Field,
              'type' => $this->convertType($value->Type),
              'hasil' => $test[$value->Field],
            ]);
          }
          $i++;
        }

        array_push($valueForm,[
          'name' => 'Submit',
          'type' => 'submit',
          'value' => 'save',
          'attr' => ['class'=> 'btn btn-success ',]
        ]);
        array_push($valueForm,[
          'name' => 'id',
          'type' => 'hidden',
          'value' => $test['id']
        ]);
        array_push($valueForm,[
          'name' => 'tabulasi_id',
          'type' => 'hidden',
          'value' => $test['tabulasi_id']
        ]);
        // dd($valueForm);
        $form = $formBuilder->createByArray($valueForm
            ,[
            'method' => 'POST',
            'url' => route('editData')
        ]);

      // dd($form);
      return view('edit', compact('form'));
     }

     public function delete($idTab,$id)
     {
        $tbl1 = DB::table('bid_'.$idTab)->where('id','=',$id)->delete();
        // dd('test');
        return redirect('/home');
     }

    public function getProvinsi(Request $request)
    {

        // $term = Auth::user()->lokasi_id;
        $term = strtoupper(trim($request->q));
        if (empty($term)) {
            return \Response::json([]);
        }
        $provinsi = DB::table('provinsi')
                    ->where('provinsi.nama','like','%'.$term.'%')
                    // ->where('provinsi.id','=',$term)
                    ->get();
        $formatted_tags = [];
        foreach ($provinsi as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
        }
        // $numlength = strlen((string)$unit);
        return response()->json($formatted_tags);
    }
    public function getKota($id)//Request $request)
    {
        // $term = strtoupper(trim($request->q));
        // $id = strtoupper(trim($request->s));
        // if (empty($term)) {
        //     return \Response::json([]);
        // }
        // $provinsi = DB::table('kabupaten')
        //             ->where('kabupaten.nama','like','%'.$term.'%')
        //             ->where('kabupaten.provinsi_id','=',$id)
        //             ->get();
        $provinsi = DB::table('kabupaten')
                    ->where('kabupaten.provinsi_id','=',$id)
                    ->get();
        $formatted_tags = [];
        foreach ($provinsi as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
        }
        return response()->json($formatted_tags);
    }
    public function getKecamatan($id)
    {
        $provinsi = DB::table('kecamatan')
                    ->where('kecamatan.kabupaten_id','=',$id)
                    ->get();
        $formatted_tags = [];
        foreach ($provinsi as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
        }
        return response()->json($formatted_tags);
    }
    public function getKelurahan($id)
    {
        $provinsi = DB::table('kelurahan')
                    ->where('kelurahan.kecamatan_id','=',$id)
                    ->get();
        $formatted_tags = [];
        foreach ($provinsi as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
        }
        return response()->json($formatted_tags);
    }

    public function pdf(Request $request)
    {
      $data = $request->all();
      // dd($data);
      $tab = $data['tabulasi_id'];

      $que = DB::table('bid_'.$tab)
            // ->where('bid_'.$tab.'.tahun','=',$data['start'])
            ->join('kelurahan','bid_'.$tab.'.kelurahan_id','=','kelurahan.id')
            ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
            ->join('kabupaten','kecamatan.kabupaten_id','=','kabupaten.id')
            ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
            ->join('tabulasi','bid_'.$tab.'.tabulasi_id','=','tabulasi.id')
            ->join('bidang','tabulasi.bidang_id','=','bidang.id')
            ->select(
                       'bidang.nama as bidang',
                       'tabulasi.nama as tabel',
                       'provinsi.nama as provinsi',
                       'kabupaten.nama as kota',
                       'kecamatan.nama as kecamatan',
                       'kelurahan.nama as kelurahan',
                       'bid_'.$tab.'.*'
                     )
            ->get()->toArray();

      // $arr = (array)$que[0];
      $columns = DB::select('show columns from ' . 'bid_'.$tab);
      $test = (array)$que[0];
      $valueForm = array();
      $i = 0;
      foreach ($columns as $key => $value){
        if($i >= 4){
          array_push($valueForm,[
            'name' => $value->Field,
            'value' => $test[$value->Field],
          ]);
        }
        $i++;
      }
      $col = collect($valueForm)->toArray();


      // $contxt = stream_context_create(['ssl' => ['verify_peer' => FALSE,'verify_peer_name' => FALSE,'allow_self_signed'=> TRUE]]);
      // PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true,'defaultFont' => 'times new roman']);
      // $pdf = PDF::loadView('export',['col'=>$col,'que'=>$que]);
      // $orientation = 'landscape';
      // $customPaper = array(0,0,950,950);
      // $pdf->setPaper($customPaper,$orientation);
      // return $pdf->download('report.pdf');
      return view('export',compact('col','que'));
    }


}
