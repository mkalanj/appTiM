@extends('layouts.default')


@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><br>Kreiraj novu stavku cjenika</h2>
                <br>
            </div>
            <div class="pull-right">
                <br>
                <a class="btn btn-primary" href="{{ route('cjenik.index') }}"> Nazad</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ups!</strong> Problem s unosom.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'cjenik.store','method'=>'POST')) !!}
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naziv stavke:</strong><br>
                {!! Form::text('Naziv_stavke_cjenika', null, array('placeholder' => 'Unesi naziv stavke cjenika','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cijena:</strong><br>
                {!! Form::number('Cijena', null, array('placeholder' => 'Unesi cijenu','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Opis:</strong><br>
                {!! Form::textarea('Opis', null, array('placeholder' => 'Opis','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Potvrdi</button>
        </div>


    </div>
    {!! Form::close() !!}


@endsection

