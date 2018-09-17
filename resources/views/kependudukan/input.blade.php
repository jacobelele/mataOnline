@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-md-12 panel-info">
      <div class="panel-title "><center>Input Data Bidang Kependudukan</center></div>
        <div class="content-box-large box-with-header">
          <div class="panel-body">

              <div class="form-group">
                  <form class="form-horizontal" role="form" method="post" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tabel Penduduk Berdasarkan Kelompok Umur Tahun
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

<table id="example" class="table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Kelompok Umur</th>
                <th rowspan="2">Laki - Laki</th>
                <th rowspan="2">Perempuan</th>
                <th colspan="2">Analisi Solusi Sederhana</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
              <th>Bagi Pengambil Keputusan</th>
              <th>Intervensi</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>0-4</td>
                <td><input type="text" id="row-1-age" name="row-1-age"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>5-9</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>10-14</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>15-19</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>20-24</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>25-29</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>30-34</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>35-39</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>40-44</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>45-49</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>50-54</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>55-59</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>60-64</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>65-69</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>70-74</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>75+</td>
              <td><input type="text" id="row-1-age" name="row-1-age"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            </tbody>
          </table>
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
