
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
                <td><input  type="text" name="Fasilitas_umum[]" value="Kantor Desa" readonly></td>
                <td><input type="text" name="ada[]"></td>
                <td><input type="text" name="tidak_ada[]"></td>
                <td><input type="text" name="bagi_pengambil_kebijakan[]"></td>
                <td><input type="text" name="intervensi[]"></td>
                <td><input type="text" name="keterangan[]"></td>
            </tr>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->Fasilitas_umum}}</td>
              <td>{{$tbl1[$i]->ada}}</td>
              <td>{{$tbl1[$i]->tidak_ada}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_kebijakan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
            </tbody>
          </table>
