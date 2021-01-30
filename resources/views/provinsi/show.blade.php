@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Provinsi') }}</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Provinsi</label>
                        <input type="text" value="{{$provinsi->kode_provinsi}}" name="kode_provinsi" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Provinsi</label>
                        <input type="text" value="{{$provinsi->nama_provinsi}}" name="nama_provinsi" class="form-control" id="" readonly>
                    </div>
                        <div class ="form-group">
                        <a href="{{route('provinsi.index')}}" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
