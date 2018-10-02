
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
  @for($i=0;$i< sizeof($que); $i++)
  <tr>
<th colspan="2"><center>BIDANG  {{$que[$i]->bidang}}</center></th>
</tr>
<tr>
<th colspan="2"><center>TABEL {{$que[$i]->tabel}} Tahun {{$que[$i]->tahun}}</center></th>
</tr>
<tr>
  <td>Kelurahan</td>
  <td>{{$que[$i]->kelurahan}}</td>
</tr>
<tr>
  <td>Kecamatan</td>
  <td>{{$que[$i]->kecamatan}}</td>
</tr>
<tr>
  <td>Kabupten/Kota</td>
  <td>{{$que[$i]->kota}}</td>
</tr>
<tr>
  <td>Provinsi</td>
  <td>{{$que[$i]->provinsi}}</td>
</tr>
@break
@endfor
</table>


  <table id="customers">
      @for($i=0;$i< sizeof($col); $i++)
        @foreach($col[$kes[$i]] as $key => $value )
        <th>{{$col[$i]['name']}}</th>
        @break
      @endforeach
      @endfor
        <tr>
        </tr>
          @for($i=0;$i< sizeof($col); $i++)
          @foreach($col[$kes[$i]] as $key => $value )
        <td>{{$col[$i]['value']}}</td>
        @break
        @endforeach
        @endfor
  </table>
  
