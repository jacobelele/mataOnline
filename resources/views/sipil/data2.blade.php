
<table id="example" class="table-bordered display scroll" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Lingkungan</th>
                <th rowspan="2">Jumlah KK</th>
                <th rowspan="2">Memiliki KK</th>
                <th rowspan="2">Belum Memiliki KK</th>
                <th rowspan="2">Memiliki Akte Kawin</th>
                <th rowspan="2">Belum Memiliki Akte Kawin</th>
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
              <td>{{$tbl1[$i]->jumlah_kk}}</td>
              <td>{{$tbl1[$i]->memiliki_kk}}</td>
              <td>{{$tbl1[$i]->belum_memiliki_kk}}</td>
              <td>{{$tbl1[$i]->memiliki_akte_kawin}}</td>
              <td>{{$tbl1[$i]->belum_memiliki_akte_kawin}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
            </tbody>
          </table>
