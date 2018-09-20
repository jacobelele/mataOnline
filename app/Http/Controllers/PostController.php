<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class PostController extends Controller
{
    public function store(Request $request){

      $data = $request->all();
      // dd($data);
      $tabulasi_id = $data['tabulasi_id'];
      $kelurahan_id = $data['kelurahan_id'];
      $tahun = $data['tahun'];
      $rowCount = sizeof($data['keterangan']);
      // $insertQuery = "insert into bid_".$tabulasi_id." values ()";
      $newData = array();
      $newnewData = array();
      $keyDataCount = sizeof(array_keys($data));
      $keyData = array_keys($data);

      for ($i=0; $i < $rowCount ; $i++) {
        $newData = [
          'tabulasi_id' => $tabulasi_id,
          'kelurahan_id' => $kelurahan_id,
          'tahun' => $tahun,
        ];
        for ($j=10; $j < $keyDataCount ; $j++) {
          $newData[$keyData[$j]] = $data[$keyData[$j]][$i];
        }
        $newnewData[$i] = $newData;
      }
      // dd($newnewData);
      // DB::table('bid_'.)->insert(
      // );
      DB::table('bid_'.$tabulasi_id)
        ->insert($newnewData);

      return view('home');
    }
}
