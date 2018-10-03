@push('scripts')
<script>
var uker = {{Auth::user()->lokasi_id}};
uker = uker.toString();
$(document).ready(function () {

  $("#selectBidang").select2({
      placeholder: "Pilih Bidang",
      minimumInputLength: 1,
      ajax: {
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
        if(select_val){
          $("#selectTabulasi").select2({
              placeholder: "Pilih Tabulasi",
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
          if(select_val){


          }
        });
      }
    });

    $('#selectProvinsi').change(function(e){
      var select_val = $(e.currentTarget).val();
      var prov = $('#selectProvinsi').select2('data')[0]['text'];
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
            var kot = $('#selectKota').select2('data')[0]['text'];
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
                  var kec = $('#selectKecamatan').select2('data')[0]['text'];
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
                      $('#selectKelurahan').change(function(e){
                        var select_val = $(e.currentTarget).val();
                        // var kel = $('#selectKelurahan').select2('data')[0]['text'];
                        // console.log(kel);
                        if(select_val && select_val != 0){

                        }
                      });
                      $('#datetimepicker').datetimepicker({
                        locale:'id',
                        format: "YYYY_MMMM"
                        });
                        $('#datetimepicker').datetimepicker().on('dp.change', function(e){
                            var tgl = e.date.format("YYYY_MMMM");
                            if(e.date){
                              console.log('Date chosen: ' + e.date.format("YYYY_MMMM") );

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


    function print() {
          window.print();
      }
});
</script>
@endpush
