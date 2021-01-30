@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kasus Local') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('kasus2.create')}}"class="btn btn-primary float-right"><b>Tambah Data  <i class="fas fa-plus-circle"></i></b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Rw</th>
                        <th scope="col">Jumlah Positif</th>
                        <th scope="col">Jumlah Meninggal</th>
                        <th scope="col">Jumlah Sembuh</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kasus2 as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->rw->nama}}</td>
                        <td>{{$data->jumlah_positif}}</td>
                        <td>{{$data->jumlah_meninggal}}</td>
                        <td>{{$data->jumlah_sembuh}}</td>
                        <td>{{$data->tanggal}}</td>
                        <form action="{{route('kasus2.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td>
                              <a href="{{route('kasus2.show', $data->id)}}" class="btn btn-success">Show <i class="far fa-eye"></i></a>
                                <a href="{{route('kasus2.edit', $data->id)}}" class="btn btn-warning">Edit  <i class="far fa-edit"></i></a>
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus <i class="far fa-trash-alt"></i></button>
                        </td>
                      </tr>
                          </form>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
