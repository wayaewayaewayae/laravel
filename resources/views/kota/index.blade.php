@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kota') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('kota.create')}}"class="btn btn-primary float-right"><b>Tambah Data+</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kode Kota</th>
                        <th scope="col">Nama Kota</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kota as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->provinsi->nama_provinsi}}</td>
                        <td>{{$data->kode_kota}}</td>
                        <td>{{$data->nama_kota}}</td>
                        <form action="{{route('kota.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                        <td>
                            <a href="{{route('kota.show', $data->id)}}" class="btn btn-success">Show</a>
                            <a href="{{route('kota.edit', $data->id)}}" class="btn btn-warning">Edit</a>
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
