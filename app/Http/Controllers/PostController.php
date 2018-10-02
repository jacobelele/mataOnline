<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
  public function store(Request $request){
    $data = $request->all();
    // dd($data);
    $tabulasi_id = $data['tabulasi_id'];
    $kelurahan_id = $data['kelurahan_id'];
    $tahun = $data['tahun'];
    $kp_kb = $data['kampung_kb'];
    $rowCount = sizeof($data['keterangan']);
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
    DB::table('bid_'.$tabulasi_id)
      ->insert($newnewData);

    return view('home');
  }

  public function edit(Request $request)
  {
    $in = $request->all();
    $update = array_except($in, ['_token']);
    $tbl1 = DB::table('bid_'.$in['tabulasi_id'])
      ->where('id',$in['id'])
      ->update($update);

    return view('home');

  }
}
