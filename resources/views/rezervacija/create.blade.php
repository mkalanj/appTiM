@extends('layouts.default')


@section('content')
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><br>Kreiraj novu rezervaciju</h2>
            </div>
            <div class="pull-right">
                <br>
        <a href="{{ URL::previous() }}" class="btn btn-primary">Nazad</a>
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


        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Broj osoba:</strong><br>
                {!! Form::number('broj_osoba', null, array('placeholder' => 'Unesi broj osoba','class' => 'form-control')) !!}
            </div>
        </div>

	
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script> 
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

	<script type='text/javascript'>
		$( document ).ready(function() {
			$('#datum').datetimepicker({    format: 'YYYY-MM-DD HH:mm:ss',
});
		});
	</script>


 <div class='col-md-7'>
            <div class="form-group">
                
                  <label class="control-label">Datum i vrijeme: </label>
                  <div class='input-group date' id='datum'>
                     
{!! Form::text('datum', null, array('placeholder' => 'Unesi datum i vrijeme','class' => 'form-control')) !!}
                      
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>
  
             

        
          <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Ime:</strong><br>
                {!! Form::text('ime_korisnika', null, array('placeholder' => 'Unesi ime','class' => 'form-control')) !!}
            </div>
        </div>
  <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Prezime:</strong><br>
                {!! Form::text('prezime_korisnika', null, array('placeholder' => 'Unesi prezime','class' => 'form-control')) !!}
            </div>
  </div>
        
          <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Broj telefona:</strong><br>
                {!! Form::text('broj_telefona', null, array('placeholder' => 'Unesi broj tlefona','class' => 'form-control')) !!}
            </div>
        </div>
        
         <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Email:</strong><br>
                {!! Form::text('email_korisnika', null, array('placeholder' => 'Unesi email','class' => 'form-control')) !!}
            </div>
        </div>
        
         <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="form-group">
                <strong>Napomena:</strong><br>
                {!! Form::text('napomena', null, array('placeholder' => 'Unesi napomenu','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-7 text-center">
                <button type="submit" class="btn btn-success">Potvrdi</button>
        </div>


    </div>
    {!! Form::close() !!}


@endsection




