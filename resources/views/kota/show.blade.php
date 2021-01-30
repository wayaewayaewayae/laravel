@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kota') }}</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                <div class="mb-3">
                        <label for="" class="form-label">Provinsi</label>
                        <input type="text" name="nama_provinsi"  value="{{$kota->provinsi->nama_provinsi}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Kota</label>
                        <input type="text" name="kode_kota"  value="{{$kota->kode_kota}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kota</label>
                        <input type="text" name="nama_kota"  value="{{$kota->nama_kota}}" class="form-control" id="" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
