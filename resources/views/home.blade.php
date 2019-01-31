@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin</div>
                

            
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Logiran si!
                    <br>
                      <a href="http://127.0.0.1:8000/users">Novi admini</a>
                      <br>
                      <br>
                <a class="btn btn-primary" href="{{ route('cjenik.index') }}"> Cjenik </a>
                <br>
                <br>
                <a class="btn btn-primary" href="{{ route('rezervacija.index') }}"> Rezervacija </a>
                <br>
                <br>
                         <a class="btn btn-primary" href="{{ url('/dynamic_pdf') }}">Izvjestaji</a>
                <br>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
