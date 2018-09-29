
<table id="example" class="table-bordered display scroll" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Lingkungan</th>
                <th rowspan="2">Jumlah Penduduk 17+</th>
                <th rowspan="2">Sudah Memiliki KTP</th>
                <th rowspan="2">Sedang Mengurus KTP</th>
                <th rowspan="2">Belum Mengurus KTP</th>
                <th colspan="2">Analisi Solusi Sederhana</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
              <th>Bagi Pengambil Keputusan</th>
              <th>Intervensi</th>
            </tr>

        </thead>
        <tbody>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->jumlah_penduduk_usia_17_tahun_lebih}}</td>
              <td>{{$tbl1[$i]->sudah_memiliki_ktp}}</td>
              <td>{{$tbl1[$i]->sedang_mengurus_ktp}}</td>
              <td>{{$tbl1[$i]->belum_mengurus_ktp}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
            </tbody>
          </table>
