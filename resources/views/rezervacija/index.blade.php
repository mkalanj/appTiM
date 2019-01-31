@extends('layouts.default')
 

@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>
                <h2>Rezervacija</h2>
            </div>
            <div class="pull-right">
                <br>
                        <a href="{{ URL::previous() }}" class="btn btn-primary">Nazad</a>
                        <br>
                <br>
                
                <a class="btn btn-primary" href="{{ route('rezervacija.create') }}"> Kreiraj novu rezervaciju</a>
                <br>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Redni broj</th>
            <th>Broj osoba</th>
            <th>Datum</th>
             <th>Ime korisnika</th>
             <th>Prezime Korisnika</th>
             <th>Broj telefona</th>
             <th>Email</th>
             <th>Napomena</th>
              <th>Status</th>
            <th width="280px">Potvrdi</th>
            <th width="280px">Odbij</th>
        </tr>
    @foreach ($rezervacijas as $key => $rezervacija)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $rezervacija->broj_osoba }}</td>
         <td>{{ $rezervacija->datum }}</td>
             <td>{{ $rezervacija->ime_korisnika }}</td>
                <td>{{ $rezervacija->prezime_korisnika }}</td>
                   <td>{{ $rezervacija->broj_telefona}}</td>
                      <td>{{ $rezervacija->email_korisnika }}</td>
                         <td>{{ $rezervacija->napomena }}</td>
                           <td>{{ $rezervacija->Status }}</td>
        <td>
     
       {!! Form::open(['method' => 'PUT','route' => ['rezervacija.update', $rezervacija->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Potvrdi', ['class' => 'btn btn-info']) !!}
           {!! Form::close() !!}
        </td>
         <td>
       {!! Form::open(['method' => 'DELETE','route' => ['rezervacija.destroy', $rezervacija->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Odbij', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
          </td>
    </tr>
    @endforeach
    </table>


    {!! $rezervacijas->render() !!}


@endsection




