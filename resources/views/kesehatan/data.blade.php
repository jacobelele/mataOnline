
<table id="example" class="table-bordered display scroll" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Lingkungan</th>
                <th rowspan="2">Jumlah KK</th>
                <th colspan="4">Kepala Keluarga</th>
                <th rowspan="2">Memiliki Jamkes</th>
                <th colspan="2">Analisi Solusi Sederhana</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
              <th>Rawan Kesehatan</th>
              <th>Memiliki Jamban Sehat</th>
              <th>Memiliki Sarana Air Bersih</th>
              <th>Memiliki SPAL</th>
              <th>Bagi Pengambil Keputusan</th>
              <th>Intervensi</th>
            </tr>

        </thead>
        <tbody>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr>
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->jumlah_kk}}</td>
              <td>{{$tbl1[$i]->rawan_kesehatan}}</td>
              <td>{{$tbl1[$i]->memiliki_jamban_sehat}}</td>
              <td>{{$tbl1[$i]->memiliki_sarana_air_bersih}}</td>
              <td>{{$tbl1[$i]->memiliki_spal}}</td>
              <td>{{$tbl1[$i]->memiliki_jamkes}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
            </tbody>
          </table>
