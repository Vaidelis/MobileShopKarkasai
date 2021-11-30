@extends('layouts.appv2')

@section('content')

    <div class="container">


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Brandas</th>
                <th>Model</th>
                <th>Screen size(Inch)</th>
                <th>Ram size(GB)</th>
                <th>Storage size(GB)</th>
                <th>Color</th>
                <th>Price(USD)</th>
                <th>Post owner</th>
                <th>Things</th>
            </tr>
            </thead>
            <tbody>
            @foreach($query as $user)
                @if($user->user_id != Auth::user()->id)
                    <tr>
                        <td>{{ $user->brand }}</td>
                        <td>{{ $user->model }}</td>
                        <td>{{ $user->screensize }}</td>
                        <td>{{ $user->ramsize }}</td>
                        <td>{{ $user->storagesize }}</td>
                        <td>{{ $user->color }}</td>
                        <td>{{ $user->price }}</td>
                        <td>{{ $user->user->username }}</td>
                        <td>
                            <a href="{{ route('postshow', $user->id) }}" class="btn btn-primary">Atidaryti</a>
                        </td>
                    </tr>

                @endif
            @endforeach
            </tbody>
            <tr><td>
                    <a href="{{ route('posts') }}" class="btn btn-primary">Grįžti</a></td>
            </tr>
        </table>

        @if($possible == 0)
            <div class="card" style="bottom: -250px; background: none;" >
            <form type='POST' action="{{ route('postbookmark') }}">
                <div class="form-group">
                    <label style="color:antiquewhite;" class="label">Paieškos rezultatų katalogo pavadinimas: </label>
                    <input type="text" name="bookmarkn" id="bookmarkn" class="form-control" required/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Išsaugoti" class="btn btn-success" />
                </div>
            </form>
            </div>
        @endif

    </div>
@endsection
