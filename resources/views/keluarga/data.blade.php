
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
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->jumlah_kk}}</td>
              <td>{{$tbl1[$i]->pra_ks}}</td>
              <td>{{$tbl1[$i]->ks_I}}</td>
              <td>{{$tbl1[$i]->ks_II}}</td>
              <td>{{$tbl1[$i]->ks_III}}</td>
              <td>{{$tbl1[$i]->ks_III_plus}}</td>
              <td>{{$tbl1[$i]->kk_penerima_pkh}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
          </tbody>
            </table>
