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
                        <label for="" class="form-label">Kecamatan</label>
                        <input type="text" name="nama_kota"  value="{{$kecamatan->kota->nama_kota}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Kecamatan</label>
                        <input type="text" name="kode_kecamatan"  value="{{$kecamatan->kode_kecamatan}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kecamatan</label>
                        <input type="text" name="nama_kecamatan"  value="{{$kecamatan->nama_kecamatan}}" class="form-control" id="" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
