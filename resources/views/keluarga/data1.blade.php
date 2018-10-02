
  <table id="example" class="table-bordered display" style="width:100%">
          <thead>
              <tr>
                  <th rowspan="2">Lingkungan</th>
                  <th colspan="5">Kesertaan Dalam Poktan</th>
                  <th colspan="2">Analisi Solusi Sederhana</th>
                  <th rowspan="2">Keterangan</th>
              </tr>
              <tr>
                <th>BKB</th>
                <th>BKR</th>
                <th>BKL</th>
                <th>UPPKS</th>
                <th>PIK-R/M</th>
                <th>Bagi Pengambil Keputusan</th>
                <th>Intervensi</th>
              </tr>

          </thead>
          <tbody>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->bkb}}</td>
              <td>{{$tbl1[$i]->bkr}}</td>
              <td>{{$tbl1[$i]->bkl}}</td>
              <td>{{$tbl1[$i]->uppks}}</td>
              <td>{{$tbl1[$i]->pik_rm}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
          </tbody>
            </table>
