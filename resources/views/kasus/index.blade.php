@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kasus Negara') }}</b></center></div>

                <div class="card-body">
                <a href="{{route('kasus.create')}}"class="btn btn-outline-success float-right"><b>Tambah Data(+)</b></a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Jumlah Positif</th>
                        <th scope="col">Jumlah Meninggal</th>
                        <th scope="col">Jumlah Sembuh</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php $no = 1; @endphp
                    @foreach($kasus as $data)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$data->negara->nama_negara}}</td>
                        <td>{{$data->jumlah_positif}}</td>
                        <td>{{$data->jumlah_meninggal}}</td>
                        <td>{{$data->jumlah_sembuh}}</td>
                        <td>{{$data->tanggal}}</td>
                        <form action="{{route('kasus.destroy', $data->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td><a class="btn btn-primary btn-sm" href="{{route('kasus.show', $data->id)}}">Show</a>|
                                <a class="btn btn-warning btn-sm" href="{{route('kasus.edit', $data->id)}}">Edit</a>|
                                <button type="submit" class="btn btn-danger " onclick="return confirm('Apakah anda yakin ?')">Hapus</button>
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
