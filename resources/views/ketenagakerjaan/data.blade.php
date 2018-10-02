
<table id="example" class="table-bordered display scroll" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Lingkungan</th>
                <th colspan="3">Penduduk Usia 17-60</th>
                <th rowspan="2">Jumlah</th>
                <th colspan="2">Analisi Solusi Sederhana</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
              <th>Sekolah</th>
              <th>Bekerja</th>
              <th>Tidak Bekerja</th>
              <th>Bagi Pengambil Keputusan</th>
              <th>Intervensi</th>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td><input type="text"  name="lingkungan[]"></td>
                <td><input type="text"  name="sekolah[]"></td>
                <td><input type="text"  name="bekerja[]"></td>
                <td><input type="text"  name="tidak_bekerja[]"></td>
                <td><input type="text"  name="jumlah[]"></td>
                <td><input type="text"  name="bagi_pengambil_keputusan[]"></td>
                <td><input type="text"  name="intervensi[]"></td>
                <td><input type="text"  name="keterangan[]"></td>
            </tr>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr>
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->sekolah}}</td>
              <td>{{$tbl1[$i]->bekerja}}</td>
              <td>{{$tbl1[$i]->tidak_bekerja}}</td>
              <td>{{$tbl1[$i]->jumlah}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
          </table>
