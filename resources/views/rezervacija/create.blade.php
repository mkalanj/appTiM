@extends('layouts.default')


@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><br>Kreiraj novu rezervaciju</h2>
            </div>
            <div class="pull-right">
                <br>
                <a class="btn btn-primary" href="{{ route('rezervacija.index') }}"> Nazad</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Ups!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'rezervacija.store','method'=>'POST')) !!}
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Broj osoba:</strong><br>
                {!! Form::number('broj_osoba', null, array('placeholder' => 'Unesi broj osoba','class' => 'form-control')) !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Datum:</strong><br>
                
             
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vrijeme:</strong><br>
                {!! Form::text('vrijeme', null, array('placeholder' => 'Unesi datum','class' => 'form-control')) !!}
             
            </div>
        </div>
        
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ime_korisnika:</strong><br>
                {!! Form::text('ime_korisnika', null, array('placeholder' => 'Unesi datum','class' => 'form-control')) !!}
            </div>
        </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prezime_korisnika:</strong><br>
                {!! Form::text('prezime_korisnika', null, array('placeholder' => 'Unesi datum','class' => 'form-control')) !!}
            </div>
  </div>
        
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Broj telefona:</strong><br>
                {!! Form::text('broj_telefona', null, array('placeholder' => 'Unesi datum','class' => 'form-control')) !!}
            </div>
        </div>
        
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong><br>
                {!! Form::text('email_korisnika', null, array('placeholder' => 'Unesi datum','class' => 'form-control')) !!}
            </div>
        </div>
        
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Napomena:</strong><br>
                {!! Form::textarea('napomena', null, array('placeholder' => 'Unesi datum','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Potvrdi</button>
        </div>


    </div>
    {!! Form::close() !!}


@endsection



