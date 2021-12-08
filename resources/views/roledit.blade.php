@extends('layouts.appv2')

@section('content')

    <div class="col-md-8 offset-2" style="top: 150px">
        <h1>
            Pasirinktos rolės redagavimas
        </h1>
    </div>


    <div class="col-md-8 offset-2" style="top: 150px">
        {!! Form::open(['action' => ['App\Http\Controllers\UserController@update',$rol->id], 'method'=>'POST']) !!}
        @csrf
        {{Form::hidden('_method', 'PATCH')}}

        <div class="form-group">
            {{Form::label('role', 'Rolės pavadinimas')}}
            {{Form::text('role', $rol->role, ['class' => 'form-control', 'placeholder' => 'Rolė'])}}
        </div>

        <div class="form-group">
            {{ Form::submit('Pakeisti', ['class'=>'btn btn-primary'])}}
        </div>

        {!! Form::close() !!}<br>
    </div>
@endsection
