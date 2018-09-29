
<table id="example" class="table-bordered display scroll" style="width:100%">
        <thead>
            <tr>
                <th rowspan="2">Lingkungan</th>
                <th colspan="4">Jumlah Siswa</th>
                <th colspan="4">Jumlah Siswa Drop Out</th>
                <th colspan="2">Analisi Solusi Sederhana</th>
                <th rowspan="2">Keterangan</th>
            </tr>
            <tr>
              <th>SD</th>
              <th>SMP</th>
              <th>SMA</th>
              <th>PT</th>
              <th>SD</th>
              <th>SMP</th>
              <th>SMA</th>
              <th>PT</th>
              <th>Bagi Pengambil Keputusan</th>
              <th>Intervensi</th>
            </tr>

        </thead>
        <tbody>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->jlh_siswa_sd}}</td>
              <td>{{$tbl1[$i]->jlh_siswa_smp}}</td>
              <td>{{$tbl1[$i]->jlh_siswa_sma}}</td>
              <td>{{$tbl1[$i]->jlh_siswa_pt}}</td>
              <td>{{$tbl1[$i]->jlh_do_sd}}</td>
              <td>{{$tbl1[$i]->jlh_do_smp}}</td>
              <td>{{$tbl1[$i]->jlh_do_sma}}</td>
              <td>{{$tbl1[$i]->jlh_do_pt}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
            </tbody>
          </table>
