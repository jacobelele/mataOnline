@extends('layouts.layout')
@include('layouts.lokasi')
@section('content')
<div class="row">
  <div class="col-md-12 panel-info">
      <div class="panel-title "><center>Input Data Bidang Kependudukan</center></div>
        <div class="content-box-large box-with-header">
          <div class="panel-body">

              <div class="form-group">
                  <form class="form-horizontal" role="form" method="post" action="{{route('storeBidang')}}" enctype="multipart/form-data">
                    {{method_field('POST')}}
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bidang
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="selectBidang" name="bidang_id" class="form-control col-md-7 col-xs-12" >
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tabel
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="selectTabulasi" name="tabulasi_id" class="form-control col-md-7 col-xs-12" >
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tahun
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="first-name"  name="tahun" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kampung KB
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="kampung_kb" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Provinsi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="selectProvinsi" name="provinsi_id" class="form-control col-md-7 col-xs-12" >
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kabupaten/Kota
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="selectKota" name="kota_id" class="form-control col-md-7 col-xs-12" >
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kecamatan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="selectKecamatan" name="kecamatan_id" class="form-control col-md-7 col-xs-12" >
                            </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Desa/Kelurahan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="selectKelurahan" name="kelurahan_id" class="form-control col-md-7 col-xs-12" >
                            </select>
                        </div>
                      </div>
<div id="viewTable" >

</div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-11">
              <button type="submit" class="btn btn-success" value="save">Konfirmasi</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('button').click( function() {
        var data = table.$('input, select').serialize();
        alert(
            "The following data would have been submitted to the server: \n\n"+
            data.substr( 0, 120 )+'...'
        );
        return false;
    } );
} );
</script>
@endpush
