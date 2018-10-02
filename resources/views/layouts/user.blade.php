@push('scripts')
<script>
var uker = {{Auth::user()->lokasi_id}};
uker = uker.toString();
$(document).ready(function () {

$('#selectProvinsi').change(function(e){
    var select_val = $(e.currentTarget).val();
    var studentSelect = $('#selectKota');
    $('#selectKota').find('option').remove().end();
    $.ajax({
        type: 'GET',
        url: 'http://localhost/mata/public/getKota/' + select_val
    }).then(function (data) {
        var option = new Option("Pilih Kota", 0, true, true);
        studentSelect.append(option);
        for(i=0;i<data.length;i++){
          var option = new Option(data[i].text, data[i].id, true, true);
          studentSelect.append(option);
        }
        $('#selectKota').change(function(e){
          var select_val = $(e.currentTarget).val();
          if(select_val && select_val != 0){
            $.ajax({
              url:'http://localhost/mata/public/user/'+select_val,
              dataType:"html",
              success:function(data) {
                $('#showData').html(data);
                var tableId = "example";
                var table = document.getElementById(tableId);
                var editor;
                var myTable = $("#example").DataTable();
              },
              type: 'GET',
            });

          }
        });

        if(uker.length >= 4){
          $('#selectKota').val(uker.slice(0,4)).trigger('change');
          $('#selectKota').find('option').each(function(index,element){
            if(element.value != uker.slice(0,4)){
              element.remove();
            }
          });
          $('#selectProvinsi').find('option').each(function(index,element){
            if(element.value != uker.slice(0,2)){
              element.remove();
            }
          });
        }else{
          $('#selectKota').val(0).trigger('change');
        }
    });
  });

  $('#selectKota').change(function(e){
    var select_val = $(e.currentTarget).val();
    var kecSelect = $('#selectKecamatan');
    $('#selectKecamatan').find('option').remove().end();
    $.ajax({
        type: 'GET',
        url: 'http://localhost/mata/public/getKecamatan/' + select_val
    }).then(function (data) {
        var option = new Option("Pilih Kecamatan", 0, true, true);
        kecSelect.append(option);
        for(i=0;i<data.length;i++){
          var option = new Option(data[i].text, data[i].id, true, true);
          kecSelect.append(option);
        }
        $('#selectKecamatan').change(function(e){
          var select_val = $(e.currentTarget).val();
          if(select_val && select_val != 0){
            $.ajax({
              url:'http://localhost/mata/public/user/'+select_val,
              dataType:"html",
              success:function(data) {
                $('#showData').html(data);
                var tableId = "example";
                var table = document.getElementById(tableId);
                var editor;
                var myTable = $("#example").DataTable();
              },
              type: 'GET',
            });

          }
        });

        if(uker.length >= 7){
          $('#selectKecamatan').val(uker.slice(0,7)).trigger('change');
          $('#selectKecamatan').find('option').each(function(index,element){
            if(element.value != uker.slice(0,7)){
              element.remove();
            }
          });
          $('#selectKota').find('option').each(function(index,element){
            if(element.value != uker.slice(0,4)){
              element.remove();
            }
          });
          $('#selectProvinsi').find('option').each(function(index,element){
            if(element.value != uker.slice(0,2)){
              element.remove();
            }
          });
        }else{
          $('#selectKecamatan').val(0).trigger('change');
        }

    });
  });

  $('#selectKecamatan').change(function(e){
    var select_val = $(e.currentTarget).val();
    $("#lokasi_id").val(select_val);
    var lurSelect = $('#selectKelurahan');

    $('#selectKelurahan').find('option').remove().end();
    $.ajax({
        type: 'GET',
        url: 'http://localhost/mata/public/getKelurahan/' + select_val
    }).then(function (data) {
        var option = new Option("Pilih Kelurahan", 0, true, true);
        lurSelect.append(option);
        for(i=0;i<data.length;i++){
          var option = new Option(data[i].text, data[i].id, true, true);
          lurSelect.append(option);
        }
        $('#selectKelurahan').change(function(e){
          var select_val = $(e.currentTarget).val();
          if(select_val && select_val != 0){
            $.ajax({
              url:'http://localhost/mata/public/user/'+select_val,
              dataType:"html",
              success:function(data) {
                $('#showData').html(data);
                var tableId = "example";
                var table = document.getElementById(tableId);
                var editor;
                var myTable = $("#example").DataTable();
              },
              type: 'GET',
            });

          }
        });

        if(uker.length >= 10){
          console.log("sini"+uker.slice(0,10));
          $('#selectKelurahan').val(uker.slice(0,10)).trigger('change');
          $('#selectKelurahan').find('option').each(function(index,element){
            if(element.value != uker.slice(0,10)){
              element.remove();
            }
          });
          $('#selectKecamatan').find('option').each(function(index,element){
            if(element.value != uker.slice(0,7)){
              element.remove();
            }
          });
          $('#selectKota').find('option').each(function(index,element){
            if(element.value != uker.slice(0,4)){
              element.remove();
            }
          });
          $('#selectProvinsi').find('option').each(function(index,element){
            if(element.value != uker.slice(0,2)){
              element.remove();
            }
          });
        }else{
          $('#selectKelurahan').val(0).trigger('change');
        }
    });
  });

  $('#selectKelurahan').change(function(e){
    var select_val = $(e.currentTarget).val();
    if(select_val>0)
      $("#lokasi_id").val(select_val);
  });
$("#selectProvinsi").select2();
$("#selectKota").select2();
$("#selectKecamatan").select2();
$("#selectKelurahan").select2();

  if(uker.length >= 2){
    provinsi = uker.slice(0,2);
    $('#selectProvinsi').val(provinsi).trigger('change');
  }

  //
  // $('#selectKecamatan').on('change', function() {
  //   var data = $(this).find(':selected:last').val();
  //   $("#lokasi_id").val(data);
  // })
  // $('#selectKelurahan').on('change', function() {
  //   console.log($('#selectKelurahan').find(':selected').val());
    // var data = $('#selectKelurahan').find(':selected:last').val();
  //   // $("#lokasi_id").val(data);
  // })
});

</script>
@endpush
