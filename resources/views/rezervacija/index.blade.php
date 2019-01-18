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
                <a class="btn btn-success" href="{{ route('rezervacija.create') }}"> Kreiraj novu rezervaciju</a>
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
             <th>Vrijeme</th>
             <th>Ime korisnika</th>
             <th>Prezime Korisnika</th>
             <th>Broj telefona</th>
             <th>Email</th>
             <th>Napomena</th>
            <th width="280px">Akcija</th>
        </tr>
    @foreach ($rezervacijas as $key => $rezervacija)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $rezervacija->Broj_osoba }}</td>
         <td>{{ $rezervacija->Datum }}</td>
          <td>{{ $rezervacija->Vrijeme }}</td>
             <td>{{ $rezervacija->ime_korisnika }}</td>
                <td>{{ $rezervacija->prezime_korisnika }}</td>
                   <td>{{ $rezervacija->broj_teelefona}}</td>
                      <td>{{ $rezervacija->email_korisnika }}</td>
                         <td>{{ $rezervacija->napomena }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('rezervacija.show',$rezervacija->id) }}">Prikaz</a>
            <a class="btn btn-primary" href="{{ route('rezervacija.edit',$rezervacija->id) }}">Izmjena</a>
            {!! Form::open(['method' => 'DELETE','route' => ['rezervacija.destroy', $rezervacija->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Obrisi', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $rezervacijas->render() !!}


@endsection


