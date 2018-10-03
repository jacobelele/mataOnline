@push('scripts')
<script>
var uker = {{Auth::user()->lokasi_id}};
uker = uker.toString();
$(document).ready(function () {


  // $('button').click( function() {
  //     var data = table.$('input, select').serialize();
  //     alert(
  $("#selectBidang").select2({
      placeholder: "Pilih Bidang",
      // multiple: false,
      minimumInputLength: 1,
      ajax: {
                // http://localhost/wompra/public/clientes/clientes
                url: 'http://mata.local/getBidang',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
    });

    $('#selectBidang').on("select2:select",function(e){
      var select_val = $(e.currentTarget).val();
      // console.log({{@$_COOKIE['ssotok']}});
        if(select_val){
          $("#selectTabulasi").select2({
              placeholder: "Pilih Tabulasi",
              // multiple: false,
              minimumInputLength: 1,
              ajax: {
                        url: 'http://mata.local/getTabulasi',
                        dataType: 'json',
                        data: function (params) {
                            return {
                                q: $.trim(params.term),
                                s: select_val
                            };
                        },
                        processResults: function (data) {
                            return {
                                results: data
                            };
                        },
                        cache: true
                    }
        });
        $('#selectTabulasi').on("select2:select",function(e){
          var select_val = $(e.currentTarget).val();
          // console.log({{@$_COOKIE['ssotok']}});
          if(select_val){
            $.ajax({
              url:'http://mata.local/viewDyn/'+select_val,
              type:"GET",
              dataType:"html",
              success:function(data) {
                $('#viewTable').html(data);
                $('#btn_tambah').click(
                  function tambah(){
                    var tableId = "example";
                    var table = document.getElementById(tableId);
                    var rowCount = table.rows.length;
                    var columCount = table.rows[2].cells.length;
                    // console.log(table.rows[2].cells[2].getAttribute('name'));
                    // console.log(table.rows[2].cells[2].getElementsByTagName('input')[0].getAttribute('name'));
                    var row = table.insertRow(rowCount);

                    for(i=0;i<columCount;i++){
                      var cell1 = row.insertCell(i);
                      var element1 = document.createElement('input');
                      element1.type=table.rows[2].cells[i].getElementsByTagName('input')[0].getAttribute('type');
                      element1.name=table.rows[2].cells[i].getElementsByTagName('input')[0].getAttribute('name');
                      cell1.appendChild(element1);
                    }
                 //    $('<tr>').append(
                 //    $('<td>').append($('<input>').attr('type','text').attr('name','kelompok_umur[]').val("0-1")),
                 //   // $('<td>').text(value.volume),
                 //   // $('<td>').text(value.unit_type.description),
                 //   // $('<td>').text(formatter.format(value.unit_cost)),
                 //   // $('<td>').text(formatter.format(value.volume*value.unit_cost)),
                 //   // $('<td>').dropdown(['20110101']),
                 // ).appendTo('#datatable');
                });
                $('#btn_hapus').click(
                  function hapus(){
                    var tableId = "example";
                    var table = document.getElementById(tableId);
                    var rowCount = table.rows.length;
                    if(rowCount>1){
                      table.deleteRow(-1);
                    }
                });

                // var table = $('#datatable').DataTable();
                // $('#addRow').on('click',function(){
                //   table.row.add(["",""]).draw(false);
                // });
                //
                // $('#addRow').click();
              },
              error: function (xhr, ajaxOptions, thrownError) {
                // alert(xhr.responseText);
                alert(thrownError);
              }
            });
          }
        });
      }
    });

    $('#selectProvinsi').change(function(e){
      var select_val = $(e.currentTarget).val();
      var studentSelect = $('#selectKota');
      $('#selectKota').find('option').remove().end();
      $.ajax({
          type: 'GET',
          url: 'http://mata.local/getKota/' + select_val
      }).then(function (data) {
          var option = new Option("Pilih Kota", 0, true, true);
          studentSelect.append(option).trigger('change');
          for(i=0;i<data.length;i++){
            var option = new Option(data[i].text, data[i].id, true, true);
            studentSelect.append(option).trigger('change');
          }
          $('#selectKota').change(function(e){
            var select_val = $(e.currentTarget).val();
            var kecSelect = $('#selectKecamatan');
            $('#selectKecamatan').find('option').remove().end();
            $.ajax({
                type: 'GET',
                url: 'http://mata.local/getKecamatan/' + select_val
            }).then(function (data) {
                var option = new Option("Pilih Kecamatan", 0, true, true);
                kecSelect.append(option).trigger('change');
                for(i=0;i<data.length;i++){
                  var option = new Option(data[i].text, data[i].id, true, true);
                  kecSelect.append(option).trigger('change');
                }
                $('#selectKecamatan').change(function(e){
                  var select_val = $(e.currentTarget).val();
                  var lurSelect = $('#selectKelurahan');
                  $('#selectKelurahan').find('option').remove().end();
                  $.ajax({
                      type: 'GET',
                      url: 'http://mata.local/getKelurahan/' + select_val
                  }).then(function (data) {
                      var option = new Option("Pilih Kelurahan", 0, true, true);
                      lurSelect.append(option).trigger('change');
                      for(i=0;i<data.length;i++){
                        var option = new Option(data[i].text, data[i].id, true, true);
                        lurSelect.append(option).trigger('change');
                      }

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
  $("#selectProvinsi").select2();
  $("#selectKota").select2();
  $("#selectKecamatan").select2();
  $("#selectKelurahan").select2();

    if(uker.length >= 2){
      provinsi = uker.slice(0,2);
      $('#selectProvinsi').val(provinsi).trigger('change');
    }


});



    $('#datetimepicker').datetimepicker({
      locale:'id',
      format: "YYYY_MMMM"
      });
</script>
@endpush
