
  <table id="example" class="table-bordered display" style="width:100%">
          <thead>
              <tr>
                  <th rowspan="2">Lingkungan</th>
                  <th colspan="3">Kepala Keluarga</th>
                  <th colspan="2">Analisi Solusi Sederhana</th>
                  <th rowspan="2">Keterangan</th>
                  <th rowspan="2">Action</th>
              </tr>
              <tr>
                <th>Laki - Laki</th>
                <th>Perempuan</th>
                <th>Jumlah</th>
                <th>Bagi Pengambil Keputusan</th>
                <th>Intervensi</th>
              </tr>
          <tbody>
            @for($i=0;$i< sizeof($tbl1); $i++)
            <tr id="{{$tbl1[$i]->id}}">
              <td>{{$tbl1[$i]->lingkungan}}</td>
              <td>{{$tbl1[$i]->laki_laki}}</td>
              <td>{{$tbl1[$i]->perempuan}}</td>
              <td>{{$tbl1[$i]->jumlah}}</td>
              <td>{{$tbl1[$i]->bagi_pengambil_keputusan}}</td>
              <td>{{$tbl1[$i]->intervensi}}</td>
              <td>{{$tbl1[$i]->keterangan}}</td>
              <td class="has-text-right">
                <a id="{{$tbl1[$i]->id}}_edit" class="btn btn-success btn-xs btn-delete editbtn"  href="http://mata.local/editData/{{$idTab}}/{{$tbl1[$i]->id}}">Edit</a>
                <form action="{{route('delete.data',['idTab'=>$idTab,'id'=>$tbl1[$i]->id])}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE"></input>
                <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('Are you sure to delete?')">Delete</button>
              </form>
              </td>
            </tr>
            @endfor
          </tbody>
            </table>
