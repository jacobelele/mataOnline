<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
  public function kependudukan()
  {
    $kp = DB::table('bid_1')
          ->join('kelurahan','bid_1.kelurahan_id','=','kelurahan.id')
          ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
          ->join('kabupaten','kecamatan.Kabupaten_id','=','Kabupaten.id')
          ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
          ->join('tabulasi','bid_1.tabulasi_id','=','tabulasi.id')
          ->join('bidang','tabulasi.id','=','bidang.id')
          ->select('bid_1.*','kelurahan.nama as kelurahan','kelurahan.kampung_kb','kecamatan.nama as kecamatan','kabupaten.nama as kabupaten','provinsi.nama','tabulasi.nama as namaTable','bidang.nama as bidang')
          ->get();

    return view('kependudukan.data',compact('kp'));

  }

  public function kependudukan1()
  {
    $kp = DB::table('bid_3')
          ->join('kelurahan','bid_3.kelurahan_id','=','kelurahan.id')
          ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
          ->join('kabupaten','kecamatan.Kabupaten_id','=','Kabupaten.id')
          ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
          ->join('tabulasi','bid_3.tabulasi_id','=','tabulasi.id')
          ->join('bidang','tabulasi.id','=','bidang.id')
          ->select('bid_3.*','kelurahan.nama as kelurahan','kelurahan.kampung_kb','kecamatan.nama as kecamatan','kabupaten.nama as kabupaten','provinsi.nama','tabulasi.nama as namaTable','bidang.nama as bidang')
          ->get();

    return view('kependudukan.data1',compact('kp'));

  }

  public function kb()
  {
    $kp = DB::table('bid_4')
          ->join('kelurahan','bid_4.kelurahan_id','=','kelurahan.id')
          ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
          ->join('kabupaten','kecamatan.Kabupaten_id','=','Kabupaten.id')
          ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
          ->join('tabulasi','bid_4.tabulasi_id','=','tabulasi.id')
          ->join('bidang','tabulasi.id','=','bidang.id')
          ->select('bid_4.*','kelurahan.nama as kelurahan','kelurahan.kampung_kb','kecamatan.nama as kecamatan','kabupaten.nama as kabupaten','provinsi.nama','tabulasi.nama as namaTable','bidang.nama as bidang')
          ->get();
      return view('kb.data',compact('kp'));

  }

  public function keluarga()
  {
    $kp = DB::table('bid_5')
          ->join('kelurahan','bid_5.kelurahan_id','=','kelurahan.id')
          ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
          ->join('kabupaten','kecamatan.Kabupaten_id','=','Kabupaten.id')
          ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
          ->join('tabulasi','bid_5.tabulasi_id','=','tabulasi.id')
          ->join('bidang','tabulasi.id','=','bidang.id')
          ->select('bid_5.*','kelurahan.nama as kelurahan','kelurahan.kampung_kb','kecamatan.nama as kecamatan','kabupaten.nama as kabupaten','provinsi.nama','tabulasi.nama as namaTable','bidang.nama as bidang')
          ->get();
      return view('keluarga.data',compact('kp'));

  }

  public function keluarga1()
  {
    $kp = DB::table('bid_6')
          ->join('kelurahan','bid_6.kelurahan_id','=','kelurahan.id')
          ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
          ->join('kabupaten','kecamatan.Kabupaten_id','=','Kabupaten.id')
          ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
          ->join('tabulasi','bid_6.tabulasi_id','=','tabulasi.id')
          ->join('bidang','tabulasi.id','=','bidang.id')
          ->select('bid_6.*','kelurahan.nama as kelurahan','kelurahan.kampung_kb','kecamatan.nama as kecamatan','kabupaten.nama as kabupaten','provinsi.nama','tabulasi.nama as namaTable','bidang.nama as bidang')
          ->get();
      return view('keluarga.data1',compact('kp'));

  }

  public function sipil()
  {
    $kp = DB::table('bid_7')
          ->join('kelurahan','bid_7.kelurahan_id','=','kelurahan.id')
          ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
          ->join('kabupaten','kecamatan.Kabupaten_id','=','Kabupaten.id')
          ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
          ->join('tabulasi','bid_7.tabulasi_id','=','tabulasi.id')
          ->join('bidang','tabulasi.id','=','bidang.id')
          ->select('bid_7.*','kelurahan.nama as kelurahan','kelurahan.kampung_kb','kecamatan.nama as kecamatan','kabupaten.nama as kabupaten','provinsi.nama','tabulasi.nama as namaTable','bidang.nama as bidang')
          ->get();
      return view('sipil.data',compact('kp'));

  }
  public function sipil1()
  {
    $kp = DB::table('bid_8')
          ->join('kelurahan','bid_8.kelurahan_id','=','kelurahan.id')
          ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
          ->join('kabupaten','kecamatan.Kabupaten_id','=','Kabupaten.id')
          ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
          ->join('tabulasi','bid_8.tabulasi_id','=','tabulasi.id')
          ->join('bidang','tabulasi.id','=','bidang.id')
          ->select('bid_8.*','kelurahan.nama as kelurahan','kelurahan.kampung_kb','kecamatan.nama as kecamatan','kabupaten.nama as kabupaten','provinsi.nama','tabulasi.nama as namaTable','bidang.nama as bidang')
          ->get();
      return view('sipil.data1',compact('kp'));

  }
  public function sipil2()
  {
    $kp = DB::table('bid_9')
          ->join('kelurahan','bid_9.kelurahan_id','=','kelurahan.id')
          ->join('kecamatan','kelurahan.kecamatan_id','=','kecamatan.id')
          ->join('kabupaten','kecamatan.Kabupaten_id','=','Kabupaten.id')
          ->join('provinsi','Kabupaten.provinsi_id','=','provinsi.id')
          ->join('tabulasi','bid_9.tabulasi_id','=','tabulasi.id')
          ->join('bidang','tabulasi.id','=','bidang.id')
          ->select('bid_9.*','kelurahan.nama as kelurahan','kelurahan.kampung_kb','kecamatan.nama as kecamatan','kabupaten.nama as kabupaten','provinsi.nama','tabulasi.nama as namaTable','bidang.nama as bidang')
          ->get();
      return view('sipil.data2',compact('kp'));

  }

}
