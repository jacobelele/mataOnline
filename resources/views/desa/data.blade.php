
<table id="example" class="table-bordered display scroll" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Sumber Air Bersih</th>
                <th colspan="2">Jumlah</th>
                <th colspan="2">Analisi Solusi Sederhana</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
              <th>KK</th>
              <th>Pengguna</th>
              <th>Bagi Pengambil Keputusan</th>
              <th>Intervensi</th>
            </tr>
        </thead>
        <tbody>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->sumber_air_bersih}}</td>
              <td>{{$tbl1[$i]->kk}}</td>
              <td>{{$tbl1[$i]->pengguna}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
            </tbody>
          </table>
