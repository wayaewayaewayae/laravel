@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kasus Negara') }}</b></center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Positif</label>
                        <input type="text" name="jumlah_positif"  value="{{$kasus2->jumlah_positif}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Meninggal</label>
                        <input type="text" name="jumlah_meninggal"  value="{{$kasus2->jumlah_meninggal}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Sembuh</label>
                        <input type="text" name="jumlah_sembuh"  value="{{$kasus2->jumlah_sembuh}}" class="form-control" id="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal"  value="{{$kasus2->tanggal}}" class="form-control" id="" readonly>
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
