@extends('layouts.appv2')

@section('content')

    <div class="col-md-8 offset-2" style="top: 150px">
    <h1>
        Pasirinkto skelbimo redagavimas
    </h1>
    </div>


    <div class="col-md-8 offset-2" style="top: 150px">
        {!! Form::open(['action' => ['App\Http\Controllers\MobileController@update',$mobile->id], 'method'=>'POST']) !!}
        @csrf
        {{Form::hidden('_method', 'PATCH')}}

        <div class="form-group">
            {{Form::label('brand', 'Telefono leidėjas')}}
            {{Form::text('brand', $mobile->brand, ['class' => 'form-control', 'placeholder' => 'Telefono leidėjas'])}}
        </div>
        <div class="form-group">
            {{Form::label('model', 'Telefono modelis')}}
            {{Form::text('model', $mobile->model, ['class' => 'form-control', 'placeholder' => 'Telefono modelis'])}}
        </div>
        <div class="form-group">
            {{Form::label('screensize', 'Ekrano dydis(inches)')}}
            {{Form::text('screensize', $mobile->screensize, ['class' => 'form-control', 'placeholder' => 'Ekrano dydis(pvz. 6.1)'])}}
        </div>
        <div class="form-group">
            {{Form::label('ramsize', 'RAM(GB)')}}
            {{Form::number('ramsize', $mobile->ramsize, ['class' => 'form-control', 'placeholder' => 'RAM(pvz. 4)'])}}
        </div>
        <div class="form-group">
            {{Form::label('storagesize', 'Talpos dydis(GB)')}}
            {{Form::number('storagesize', $mobile->storagesize, ['class' => 'form-control', 'placeholder' => 'Talpos dydis(pvz. 64)'])}}
        </div>
        <div class="form-group">
            {{Form::label('color', 'Spalva')}}
            {{Form::text('color', $mobile->color, ['class' => 'form-control', 'placeholder' => 'Spalva'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Kaina')}}
            {{Form::number('price', $mobile->price, ['class' => 'form-control', 'placeholder' => 'Kaina'])}}
        </div>
        <div class="form-group">
            {{Form::label('year', 'Naudojimo laikotarpis')}}
            {{Form::text('year', $mobile->year, ['class' => 'form-control', 'placeholder' => 'Naudojimo laikotarpis(pvz. 2 metai)'])}}
        </div>

        <div class="form-group">
            {{ Form::submit('Redaguoti', ['class'=>'btn btn-primary'])}}
        </div>
        <a href="{{ route('posts') }}" class="btn btn-primary">Grįžti atgal</a><br>
        {!! Form::close() !!}<br>
    </div>
@endsection
