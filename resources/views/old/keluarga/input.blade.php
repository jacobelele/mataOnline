@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-md-12 panel-info">
      <div class="panel-title "><center>Input Data Bidang Pembangunan Keluarga</center></div>
        <div class="content-box-large box-with-header">
          <div class="panel-body">

              <div class="form-group">
                  <form class="form-horizontal" role="form" method="post" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tabel Tahapan Keluarga Sejahtera Tahun
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="nip" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Kampung KB
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="full_name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Desa/Kelurahan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="behind_degree" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kecamatan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="front_degree" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kabupaten/Kota
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="front_degree" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div><div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Provinsi
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name"  name="front_degree" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
<div class="table-responsive scroll">
<table id="example" class="table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Lingkungan</th>
                <th rowspan="2">Jumlah KK</th>
                <th colspan="5">Tahapan Keluarga</th>
                <th rowspan="2">KK Penerima PKH</th>
                <th colspan="2">Analisi Solusi Sederhana</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
              <th>Pra Ks</th>
              <th>KS 1</th>
              <th>KS 2</th>
              <th>KS 3</th>
              <th>KS 3 Plus</th>
              <th>Bagi Pengambil Keputusan</th>
              <th>Intervensi</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            </tbody>
          </table>
        </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-11">
              <button type="submit" class="btn btn-success">Konfirmasi</button>
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
    // var table = $('#example').DataTable();

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
