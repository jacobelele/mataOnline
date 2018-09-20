<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LokasiController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function getProvinsi(Request $request)
    {
        $term = strtoupper(trim($request->q));
        if (empty($term)) {
            return \Response::json([]);
        }
        $provinsi = DB::table('provinsi')
                    ->where('provinsi.nama','like','%'.$term.'%')
                    ->get();
        $formatted_tags = [];

        foreach ($provinsi as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
        }
        return response()->json($formatted_tags);
    }

    public function getKota(Request $request)
    {
        $term = strtoupper(trim($request->q));
        $id = strtoupper(trim($request->s));
        if (empty($term)) {
            return \Response::json([]);
        }
        $provinsi = DB::table('kabupaten')
                    ->where('kabupaten.nama','like','%'.$term.'%')
                    ->where('kabupaten.provinsi_id','=',$id)
                    ->get();
        $formatted_tags = [];

        foreach ($provinsi as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
        }
        return response()->json($formatted_tags);
    }

    public function getKecamatan(Request $request)
    {
        $term = strtoupper(trim($request->q));
        $id = strtoupper(trim($request->s));
        if (empty($term)) {
            return \Response::json([]);
        }
        $provinsi = DB::table('kecamatan')
                    ->where('kecamatan.nama','like','%'.$term.'%')
                    ->where('kecamatan.kabupaten_id','=',$id)
                    ->get();
        $formatted_tags = [];

        foreach ($provinsi as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
        }
        return response()->json($formatted_tags);
    }

    public function getKelurahan(Request $request)
    {
        $term = strtoupper(trim($request->q));
        $id = strtoupper(trim($request->s));
        if (empty($term)) {
            return \Response::json([]);
        }
        $provinsi = DB::table('kelurahan')
                    ->where('kelurahan.nama','like','%'.$term.'%')
                    ->where('kelurahan.kecamatan_id','=',$id)
                    ->get();
        $formatted_tags = [];

        foreach ($provinsi as $tag) {
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nama];
        }
        return response()->json($formatted_tags);
    }
}
