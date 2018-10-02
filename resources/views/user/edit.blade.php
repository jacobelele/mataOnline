@extends('layouts.layout')
@extends('layouts.reg')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update',$user->id) }}" aria-label="{{ __('edit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('Nip') }}</label>

                            <div class="col-md-6">
                                <input id="nip" type="nip" class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" name="nip" value="{{ $user->nip }}" required>

                                @if ($errors->has('nip'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="first-name">Provinsi
                          </label>
                          <div class="col-md-6">
                            <select id="selectProvinsi" name="provinsi_id" class="form-control " >
                              @foreach($listProvinsi as $provinsi)
                              <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="first-name">Kabupaten/Kota
                          </label>
                          <div class="col-md-6">
                            <select id="selectKota" name="kota_id" class="form-control " >
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="first-name">Kecamatan
                          </label>
                          <div class="col-md-6">
                            <select id="selectKecamatan" name="kecamatan_id" class="form-control " >
                              </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-4 col-form-label text-md-right" for="first-name">Desa/Kelurahan</label>
                          <div class="col-md-6">
                            <select id="selectKelurahan" name="kelurahan_id" class="form-control " >
                              </select>
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="lokasi_id" class="col-md-4 col-form-label text-md-right">{{ __('lokasi_id') }}</label>

                            <div class="col-md-6">
                                <input id="lokasi_id" type="lokasi_id" class="form-control{{ $errors->has('lokasi_id') ? ' is-invalid' : '' }}" name="lokasi_id" value="{{ $user->lokasi_id }}" required>

                                @if ($errors->has('lokasi_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lokasi_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{$user->password}}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
