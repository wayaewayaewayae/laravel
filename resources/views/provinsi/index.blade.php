@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Provinsi') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('provinsi.create')}}"class="btn btn-primary float-right"><b>Tambah Data <i class="fas fa-plus-circle"></i></b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Provinsi</th>
                        <th scope="col">Nama Provinsi</th>
                        <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($provinsi as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kode_provinsi}}</td>
                        <td>{{$data->nama_provinsi}}</td>
                        <form action="{{route('provinsi.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                        <td>
                            <a href="{{route('provinsi.show', $data->id)}}" class="btn btn-success">Show <i class="far fa-eye"></i></a>
                            <a href="{{route('provinsi.edit', $data->id)}}" class="btn btn-warning">Edit <i class="far fa-edit"></i></a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus ?')">Hapus <i class="far fa-trash-alt"></i></button>
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
