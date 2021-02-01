@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><b>{{ __('Data Kasus Local') }}</b></center></div>

                <div class="card-body">
                <form action="{{route('kasus2.store')}}" method="POST">
                @csrf
    @livewireStyles
                        @livewire('statecity')
    @livewireScripts

                 

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Reaktif</label>
                        <input type="number" name="jumlah_reaktif" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Positif</label>
                        <input type="number" name="jumlah_positif" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Meninggal</label>
                        <input type="number" name="jumlah_meninggal" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jumlah Sembuh</label>
                        <input type="number" name="jumlah_sembuh" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
