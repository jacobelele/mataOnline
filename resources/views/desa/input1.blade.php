@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-md-12 panel-info">
      <div class="panel-title "><center>Input Data Bidang Potensi Desa</center></div>
        <div class="content-box-large box-with-header">
          <div class="panel-body">

              <div class="form-group">
                  <form class="form-horizontal" role="form" method="post" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tabel Fasilitas Umum Tahun
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
<table id="example" class="table-bordered display scroll" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Fasilitas/Umum</th>
                <th colspan="2">Kepemilikan(ada/tdk Ada)</th>
                <th colspan="2">Analisi Solusi Sederhana</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
              <th>Ada</th>
              <th>Tidak Ada</th>
              <th>Bagi Pengambil Keputusan</th>
              <th>Intervensi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kantor Desa</td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
                <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <th>Pendidikan</th>

            </tr>
            <tr>
              <td>PAUD</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Sekolah Dasar</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Sekolah Menengah Pertama</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Sekolah Menengah Atas</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Perguruan Tinggi</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Kursus Keterampilan</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Pesantren</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <th>Kesehatan</th>
            </tr>
            <tr>
              <td>Rumah Sakit</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Puskesmas</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Puskesmas Pembantu</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Klinik Kesehatan</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Bidan</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <th>Tempat Ibadah</th>
            </tr>
            <tr>
              <td>Masjid</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Musholah</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Gereja</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Wihara</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Pura</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <th>Jalan(KM)</th>
            </tr>
            <tr>
              <td>Panjang Jalan</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Jalan Desan</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Jalan Kampung(Setapak)</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <th>Kondisi Jalan</th>
            </tr>
            <tr>
              <td>Baik</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Sedang</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Rusak</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Rusak Berat</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <th>Industri</th>
            </tr>
            <tr>
              <td>Mikro</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Kecil</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Menengah</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Besar</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <th>Olahraga dan rekreasi</th>
            </tr>
            <tr>
              <td>Lapangan</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>Taman</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
            <tr>
              <td>DLL</td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
              <td><input type="text" id="row-1-position" name="row-1-position"></td>
            </tr>
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
