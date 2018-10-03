
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

#customers1 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#customers1 td, #customers1 th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers1 tr:nth-child(even){background-color: #f2f2f2;}

#customers1 tr:hover {background-color: #ddd;}

#customers1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<?php
$kes = array_keys($col);

 ?>
 <table id="customers1">
  <tr>
<th colspan="2"><center>BIDANG  {{$lok[0]->bidang}}</center></th>
</tr>
<tr>
<th colspan="2"><center>TABEL {{$lok[0]->tabel}} Tahun {{$lok[0]->tahun}}</center></th>
</tr>
<tr>
  <td>Kelurahan</td>
  <td>{{$lok[0]->kelurahan}}</td>
</tr>
<tr>
  <td>Kecamatan</td>
  <td>{{$lok[0]->kecamatan}}</td>
</tr>
<tr>
  <td>Kabupten/Kota</td>
  <td>{{$lok[0]->kota}}</td>
</tr>
<tr>
  <td>Provinsi</td>
  <td>{{$lok[0]->provinsi}}</td>
</tr>
</table>


  <table id="customers">
    <thead>
      <tr>
        @for($i = 0 ; $i < sizeof($col); $i++)
            @if($i >= sizeof($col)-3 )
              <th colspan="2"><center>Analisi Solusi Sederhana</center></th>
              <th rowspan="2"><center>Keterangan</center></th>
            </tr>
            <tr>
              <th><center>Bagi Pengambil Keputusan</center></th>
              <th><center>Intervensi</center></th>
              @break
            @else
              <th rowspan="2"><center>{{ucwords(str_replace('_',' ',$col[$i]['name']))}}</center></th>
          @endif
        @endfor
      </tr>
    </thead>
    <tbody>
      @foreach($que as $key => $item)
      <tr>
          @foreach($col as $key => $value)
            <td>{{$item[$value['name']]}}</td>
          @endforeach
      </tr>
      @endforeach
    </tbody>
  </table>
