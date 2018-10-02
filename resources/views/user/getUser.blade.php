@extends('layouts.layout')
@extends('layouts.user')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data User</div>

                <div class="card-body">
                    <form>
                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="first-name">Provinsi
                          </label>
                          <div class="col-md-6">
                            <select id="selectProvinsi" name="provinsi_id" class="form-control " >
                              @foreach($listProvinsi as $provinsi)
                              <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="first-name">Kabupaten/Kota
                          </label>
                          <div class="col-md-6">
                            <select id="selectKota" name="kota_id" class="form-control " >
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="first-name">Kecamatan
                          </label>
                          <div class="col-md-6">
                            <select id="selectKecamatan" name="kecamatan_id" class="form-control " >
                              </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="first-name">Desa/Kelurahan</label>
                          <div class="col-md-6">
                            <select id="selectKelurahan" name="kelurahan_id" class="form-control " >
                              </select>
                          </div>
                        </div>

                        <div id="showData">

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
