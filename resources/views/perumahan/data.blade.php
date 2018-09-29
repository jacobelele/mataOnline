
<table id="example" class="table-bordered display scroll" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Lingkungan</th>
                <th rowspan="2">Jumlah Rumah</th>
                <th rowspan="2">Layak Huni</th>
                <th rowspan="2">Tidak Layak Huni</th>
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
                <td><input type="text"  name="lingkungan[]"></td>
                <td><input type="text"  name="jumlah_rumah[]"></td>
                <td><input type="text"  name="layak_huni[]"></td>
                <td><input type="text"  name="tidak_layak_huni[]"></td>
                <td><input type="text"  name="bagi_pengambil_keputusan[]"></td>
                <td><input type="text"  name="intervensi[]"></td>
                <td><input type="text"  name="keterangan[]"></td>
            </tr>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->jumlah_rumah}}</td>
              <td>{{$tbl1[$i]->layak_huni}}</td>
              <td>{{$tbl1[$i]->tidak_layak_huni}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
            </tbody>
          </table>
