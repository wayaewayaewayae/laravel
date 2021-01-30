@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kelurahan') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('kelurahan.create')}}"class="btn btn-primary float-right"><b>Tambah Data+</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Kode Kelurahan</th>
                        <th scope="col">Nama Kelurahan</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kelurahan as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->kecamatan->nama_kecamatan}}</td>
                        <td>{{$data->kode_kelurahan}}</td>
                        <td>{{$data->nama_kelurahan}}</td>
                        <form action="{{route('kelurahan.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                              <td>
                              <a href="{{route('kelurahan.show', $data->id)}}" class="btn btn-success">Show</a>
                              <a href="{{route('kelurahan.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
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
