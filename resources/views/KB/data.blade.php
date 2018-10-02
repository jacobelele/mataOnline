
  <table id="example" class="table-bordered display" style="width:100%">
          <thead>
              <tr>
                  <th rowspan="2">Lingkungan</th>
                  <th rowspan="2">Jumlah KK</th>
                  <th rowspan="2">Status Pus</th>
                  <th colspan="9">Kepala Keluarga</th>
                  <th rowspan="2">Bukan Peserta KB</th>
                  <th colspan="2">Analisi Solusi Sederhana</th>
                  <th rowspan="2">Keterangan</th>
              </tr>
              <tr>
                <th>MOW</th>
                <th>MOP</th>
                <th>IUD</th>
                <th>Implan</th>
                <th>Suntik</th>
                <th>Pil</th>
                <th>Kondom</th>
                <th>Tradisional</th>
                <th>Pus Peserta KB</th>
                <th>Bagi Pengambil Keputusan</th>
                <th>Intervensi</th>
              </tr>

          </thead>
          <tbody>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->jumlah_kk}}</td>
              <td>{{$tbl1[$i]->status_pus}}</td>
              <td>{{$tbl1[$i]->mow}}</td>
              <td>{{$tbl1[$i]->mop}}</td>
              <td>{{$tbl1[$i]->iud}}</td>
              <td>{{$tbl1[$i]->implan}}</td>
              <td>{{$tbl1[$i]->suntik}}</td>
              <td>{{$tbl1[$i]->pil}}</td>
              <td>{{$tbl1[$i]->kondom}}</td>
              <td>{{$tbl1[$i]->tradisional}}</td>
              <td>{{$tbl1[$i]->pus_peserta_kb}}</td>
              <td>{{$tbl1[$i]->bukan_peserta_kb}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
            </tr>
            @endfor
          </tbody>
            </table>
