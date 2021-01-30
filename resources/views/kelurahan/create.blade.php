@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kecamatan') }}</b></center></div>

                <div class="card-body">
                <form action="{{route('kelurahan.store')}}" method="POST">
                @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                <div class="mb-3">
                        <label for="" class="form-label">Kecamatan</label>
                       <select name="id_kecamatan" class="form-control" id="">
                       @foreach($kecamatan as $data)
                       <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                       @endforeach
                       </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Kelurahan</label>
                        <input type="text" name="kode_kelurahan" class="form-control" id="">
                    @if($errors->has('kode_kelurahan'))
                        <span class="text-danger">{{ $errors->first('kode_kelurahan') }}</span>
                    @endif
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                        <input type="text" name="nama_kelurahan" class="form-control" id="">
                    @if($errors->has('nama_kelurahan'))
                        <span class="text-danger">{{ $errors->first('nama_kelurahan') }}</span>
                    @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
