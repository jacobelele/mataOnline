<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getUser(){
       $listProvinsi = DB::table('provinsi')->get();
       $listKota = DB::table('kabupaten')->get();
       $listKecamatan = DB::table('kecamatan')->get();
       $listKelurahan = DB::table('kelurahan')->get();
       // dd($listProvinsi)
       return view('user.getUser',compact('listProvinsi','listKota','listKecamatan','listKelurahan'));
     }
    public function index($loc)
    {
        // $user = User::all()->where('lokasi_id',$loc);
        $user = User::where('lokasi_id','=',$loc)->get();
        // $listKota = DB::table('kabupaten')->get();
        // $listKecamatan = DB::table('kecamatan')->get();
        // $listKelurahan = DB::table('kelurahan')->get();
        return view('user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $listProvinsi = DB::table('provinsi')->get();
      $listKota = DB::table('kabupaten')->get();
      $listKecamatan = DB::table('kecamatan')->get();
      $listKelurahan = DB::table('kelurahan')->get();

      return view('user.create',compact('listProvinsi','listKota','listKecamatan','listKelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $data = $request->all();
        // $update = array_except($data, ['_token']);
        $user = new User();
        $user->name = $request->name;
        $user->nip = $request->nip;
        $user->lokasi_id = $request->lokasi_id;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/home');


        // $user->fill($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      $listProvinsi = DB::table('provinsi')->get();
      $listKota = DB::table('kabupaten')->get();
      $listKecamatan = DB::table('kecamatan')->get();
      $listKelurahan = DB::table('kelurahan')->get();
      return view('user.edit',compact('user','listProvinsi','listKota','listKecamatan','listKelurahan'));
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
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->nip = $request->get('nip');
        $user->lokasi_id = $request->get('lokasi_id');
        $user->password = Hass::make($request->password);
        $user->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('/home');
    }
}
