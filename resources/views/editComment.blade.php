@extends('layouts.appv2')

@section('content')

    <div class="col-md-8 offset-2" style="top: 150px">
    <h1>
        Pasirinkto Komentaro redagavimas
    </h1>
    </div>


    <div class="col-md-8 offset-2" style="top: 150px">
        {!! Form::open(['action' => ['App\Http\Controllers\GroupController@update',$comment->id], 'method'=>'POST']) !!}
        @csrf
        {{Form::hidden('_method', 'PATCH')}}

        <div class="form-group">
            {{Form::label('comment', 'Komentaras')}}
            {{Form::text('comment', $comment->comment, ['class' => 'form-control', 'placeholder' => 'Komentaras'])}}
        </div>

        <div class="form-group">
            {{ Form::submit('Redaguoti', ['class'=>'btn btn-primary'])}}
        </div>

        {!! Form::close() !!}<br>
    </div>
@endsection
