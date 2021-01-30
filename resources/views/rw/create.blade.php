@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Rw') }}</b></center></div>

                <div class="card-body">
                <form action="{{route('rw.store')}}" method="POST">
                @csrf
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            
                <div class="mb-3">
                        <label for="" class="form-label">Kelurahan</label>
                       <select name="id_kelurahan" class="form-control" id="">
                       @foreach($kelurahan as $data)
                       <option value="{{$data->id}}">{{$data->nama_kelurahan}}</option>
                       @endforeach
                       </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Rw</label>
                        <input type="text" name="nama_rw" class="form-control" id="">
                    @if($errors->has('nama_rw'))
                        <span class="text-danger">{{ $errors->first('nama_rw') }}</span>
                    @endif
                    </div>
                    <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
