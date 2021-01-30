@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kota') }}</b></center></div>

                <div class="card-body">
                <form action="{{route('kecamatan.store')}}" method="POST">
                @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                <div class="mb-3">
                        <label for="" class="form-label">Kota</label>
                       <select name="id_kota" class="form-control" id="">
                       @foreach($kota as $data)
                       <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                       @endforeach
                       </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kode Kecamatan</label>
                        <input type="text" name="kode_kecamatan" class="form-control" id="">
                    @if($errors->has('kode_kecamatan'))
                        <span class="text-danger">{{ $errors->first('kode_kecamatan') }}</span>
                    @endif
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Kecamatan</label>
                        <input type="text" name="nama_kecamatan" class="form-control" id="">
                    @if($errors->has('nama_kecamatan'))
                        <span class="text-danger">{{ $errors->first('nama_kecamatan') }}</span>
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
