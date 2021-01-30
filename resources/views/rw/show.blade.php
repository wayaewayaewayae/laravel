@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Rw') }}</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                        <input type="text" value="{{$kelurahan->nama_kelurahan}}" name="kelurahan" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Rw</label>
                        <input type="text" value="{{$rw->nama_rw}}" name="nama_rw" class="form-control" id="" readonly>
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
