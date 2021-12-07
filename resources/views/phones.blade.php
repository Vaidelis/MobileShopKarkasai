@extends('layouts.appv2')

@section('content')

    @if (\Session::has('status'))
        <div style="bottom: -60px;" class="alert alert-warning">
            <p>{!! \Session::get('status') !!}</p>
        </div>
    @elseif(\Session::has('good'))
        <div class="alert alert-success">
            <p>{!! \Session::get('good') !!}</p>
        </div>
    @endif

    <div class="top">
        <div class="row justify-content-center">
            <div class="col-md-8" style="color:antiquewhite">
                <table class="table table-striped" >
                    <thead>
                    <th>Leidėjas</th>
                    <th>Modelis</th>
                    <th>Ekrano dydis(Inch)</th>
                    <th>Ramai(GB)</th>
                    <th>Talpos dydis(GB)</th>
                    <th>Spalva</th>
                    <th>Kaina(USD)</th>
                    <th>Savininkas</th>
                    <th>Naudojimo metai</th>
                    <th>Veiksmai</th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($posts as $post)
                        @if(!Auth::check())
                            <tr >
                                <td>{{ $post->brand }}</td>
                                <td>{{ $post->model }}</td>
                                <td>{{ $post->screensize }}</td>
                                <td>{{ $post->ramsize }}</td>
                                <td>{{ $post->storagesize }}</td>
                                <td>{{ $post->color }}</td>
                                <td>{{ $post->price }}</td>
                                <td>{{ $post->user->username }}</td>
                                <td>{{ $post->year }}</td>
                            <tr >
                        @else
                            <tr >
                                <td>{{ $post->brand }}</td>
                                <td>{{ $post->model }}</td>
                                <td>{{ $post->screensize }}</td>
                                <td>{{ $post->ramsize }}</td>
                                <td>{{ $post->storagesize }}</td>
                                <td>{{ $post->color }}</td>
                                <td>{{ $post->price }}</td>
                                <td>{{ $post->user->username }}</td>
                                <td>{{ $post->year }}</td>
                                <td>
                                    <a href="{{ route('postshow', $post->id) }}" class="btn btn-primary">Peržiūrėti</a>
                                </td>

                                <td>
                                    @if(Auth::user()->id == $post->user_id)
                                    <a> {!! Form::open(['action' => ['App\Http\Controllers\MobileController@mobiledelete',$post->id],
                                'method'=>'POST', 'onsubmit'=> 'return ConfirmDelete()']) !!}
                                        @csrf
                                        {{Form::hidden('_method','DELETE')}}

                                        {{Form::submit('Ištrinti', ['class'=>'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </a>
                                    @endif
                                </td>



                                </td>
                            </tr>
                            @endif
                            @endforeach

                    </tbody>
                    <tr>
                        @if(Auth::check())
                    <td>
                        <a href="{{route('postcreate')}}" class="butt1">Įdėtiskelbimą</a>
                    </td>
                    </tr>
                    <td>
                        <a href="{{route('searchvie')}}" class="butt1">Paieška</a>
                    </td>
                    @endif


                </table>
            </div>

        </div>

    </div>
    {{-- Pagination --}}
    @if(Auth::check())
    <div class="d-flex justify-content-center" name="action" value='html'>
    <div class="bottom">
        {!! $posts->links() !!}
    </div>
    </div>
    @endif
@endsection
