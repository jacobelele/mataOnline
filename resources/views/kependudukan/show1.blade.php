@extends('layouts.layout')

@section('content')

<div class="row">
  <div class="col-md-12 panel-info">
      <div class="panel-title ">Edit Izin</div>
    <div class="content-box-large box-with-header">
      <div>
        <div class="pull-right">
          <a class="btn btn-success" href="{{ url('home')}}">Home</a>
        </div>

        <div class="panel-body">
          <form class="form-horizontal" role="form" method="post" action="#" enctype="multipart/form-data">
            {{method_field('PUT')}}
            {{csrf_field()}}
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="name" value="{{$tbl1[0]->tabulasi_id}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="name" value="{{$tbl1[0]->kelurahan_id}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="name" value="{{$tbl1[0]->tahun}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="name" value="{{$tbl1[0]->lingkungan}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="name" value="{{$tbl1[0]->laki_laki}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="name" value="{{$tbl1[0]->perempuan}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="name" value="{{$tbl1[0]->jumlah}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="first-name" required="required" name="name" value="{{$tbl1[0]->bagi_pengambil_keputusan}}" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kode Booking <span class="required">*</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="first-name" required="required" name="boarding_id" value="{{$tbl1[0]->intervensi}}" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" required="required" name="keterangan" value="{{$tbl1[0]->keterangan}}" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" name="file" >Create</button>
            </div>
          </div>

        </form>
        </div>
    </div>
  </div>
  </div>
</div>

@endsection
