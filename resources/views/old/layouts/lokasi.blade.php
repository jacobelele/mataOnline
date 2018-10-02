@push('scripts')
<script>
$(document).ready(function () {
  // $('button').click( function() {
  //     var data = table.$('input, select').serialize();
  //     alert(
  $("#selectBidang").select2({
      placeholder: "Pilih Bidang",
      // multiple: false,
      minimumInputLength: 1,
      ajax: {
                url: '/getBidang',
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
                        url: '/getTabulasi',
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
  $("#selectProvinsi").select2({
      placeholder: "Pilih Provinsi",
      // multiple: false,
      minimumInputLength: 1,
      ajax: {
                url: '/getProvinsi',
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
    $('#selectProvinsi').on("select2:select",function(e){
      var select_val = $(e.currentTarget).val();
      // console.log({{@$_COOKIE['ssotok']}});
        if(select_val){
          $("#selectKota").select2({
              placeholder: "Pilih Kota",
              // multiple: false,
              minimumInputLength: 1,
              ajax: {
                        url: '/getKota',
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
        $('#selectKota').on("select2:select",function(e){
          var select_val = $(e.currentTarget).val();
          // console.log({{@$_COOKIE['ssotok']}});
          if(select_val){
            $("#selectKecamatan").select2({
                placeholder: "Pilih Kecamatan",
                // multiple: false,
                minimumInputLength: 1,
                ajax: {
                          url: '/getKecamatan',
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
            $('#selectKecamatan').on("select2:select",function(e){
              var select_val = $(e.currentTarget).val();
              // console.log({{@$_COOKIE['ssotok']}});
              if(select_val){
                $("#selectKelurahan").select2({
                    placeholder: "Pilih Kelurahan",
                    // multiple: false,
                    minimumInputLength: 1,
                    ajax: {
                              url: '/getKelurahan',
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
              }
            });
          }
        });
      }
    });
});
</script>
@endpush
