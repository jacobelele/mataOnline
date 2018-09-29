<table id="example" class="table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th >Nama</th>
                <th >Nip</th>
                <th >Lokasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @for($i=0;$i< sizeof($user); $i++)
          <tr id="{{$user[$i]->id}}">
            <td >{{$user[$i]->name}}</td>
            <td >{{$user[$i]->nip}}</td>
            <td >{{$user[$i]->lokasi_id}}</td>
            <td class="has-text-right">
              <a  class="btn btn-success btn-xs btn-delete editbtn"  href="{{route('user.edit',$user[$i]->id)}}">Edit</a>
              <form action="{{route('user.destroy',$user[$i]->id)}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE"></input>
              <button class="btn btn-danger btn-xs" type="submit" onclick="return confirm('Are you sure to delete?')">Delete</button>
            </form>
            </td>
          </tr>
          @endfor
        </tbody>
          </table>
