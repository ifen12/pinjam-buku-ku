@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if(Auth::user()->pilih == 'ADMIN')
                    <div class="panel-body">
                    Hai Petugas Perpus

                    <a href="/buku" type="submit" name="action"> silakan input kan buku
                    </a>
                </div>

                   @else

                   <div class="panel-body">
                    Hai Siswa 
                    
                    <a href="/pinjam" type="submit" name="action"> silakan pinjam buku
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
