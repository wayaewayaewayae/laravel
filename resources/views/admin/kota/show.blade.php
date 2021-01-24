@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="class-header">
                    Edit Data Kota 
                         <div class="card-body">
                             <form action="{{route('kota.update',$kota->id)}}" method="post">

                        <div class="form-group">
                        <label for="">Kode kota</label>
                        <input type="text" name ="kode_kota" value="{{$kota->kode_kota}}" class ="form-control" readonly>
                    </div>
                        <div class="form-group">
                        <label for="">Nama kota</label>
                        <input type="text" name ="nama_kota" value="{{$kota->nama_kota}}" class ="form-control" readonly>
                    </div>
                        <div class ="form-group">
                        <a href="{{route('kota.index')}}" class = "btn btn-primary btn-primary btn-block">Kembali</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection

