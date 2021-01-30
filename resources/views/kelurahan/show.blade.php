@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kelurahan') }}</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                        <input type="text" name="nama_kelurahan"  value="{{$kelurahan->kecamatan->nama_kecamatan}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Kelurahan</label>
                        <input type="text" name="kode_kelurahan"  value="{{$kelurahan->kode_kelurahan}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                        <input type="text" name="nama_kelurahan"  value="{{$kelurahan->nama_kelurahan}}" class="form-control" id="" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
