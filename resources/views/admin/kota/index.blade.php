@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="class-header">{{_('kota')}}</div>
                  <b>  Data Kota</b> 
                <a href="{{route('kota.create')}}"  
                   class="btn btn-primary float-right">
                   Tambah
                   </a> 
                 </div>
                 <div class="card-body">
                     @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{session('status')}}
                </div>
                @endif
                 <table class="table table-dark table-hover">
                     <thead>
                 <tr>
                        <th>No</th>
                        <th>Nama Provinsi</th>
                        <th>Kode Kota</th>
                        <th>Kota</th>
                        <th>Aksi</th>
                </tr>
                    </thead>
                @php $no=1; @endphp
                @foreach($kota as $data)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data->nama_provinsi}}</td>
                    <td>{{$data->kode_kota}}</td>
                    <td>{{$data->nama_kota}}</td>
                    <td>
                        <form action="{{route('kota.destroy',$data->id)}}" method="post">
                        @method('delete')
                        
                        <a href="{{route('kota.edit',$data->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{route('kota.show',$data->id)}}" class="btn btn-success">show</a>
                        <button type="submit" class="btn btn-danger" onclick="retrun confirm('Apakah anda yakin ?')">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                               </table>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection