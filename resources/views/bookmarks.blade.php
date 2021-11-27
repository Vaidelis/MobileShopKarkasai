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
                    <th>Bookmark pavadinimas</th>
                    <th >Veiksmai</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($bookssh as $book)
                        @if(Auth::user()->id == $book->user_id)
                            <tr>
                                <td>{{$book->bookmarkname}}</td>
                                <td>
                                    <form action = "{{ route('postsearch') }}" method="post">
                                        {{csrf_field() }}
                                        <input type="hidden" name="brand" value={{$book->brand}}/>
                                        <input type="hidden" name="model" value= {{$book->model}} />
                                        <input type="hidden" name="screensize" value={{$book->screensize}} />
                                        <input type="hidden" name="ramsize" value={{$book->ramsize}} />
                                        <input type="hidden" name="color" value={{$book->pricemin}} />
                                        <input type="hidden" name="color1" value={{$book->pricemax}} />
                                        <input type="hidden" name="action" value='html'/>
                                        <button type="submit" class="btn btn-primary">Rodyti</button>

                                    </form>
                                    <a> {!! Form::open(['action' => ['App\Http\Controllers\UserController@bookmarkdelete',$book->id],
                                'method'=>'POST', 'onsubmit'=> 'return ConfirmDelete()']) !!}
                                        @csrf
                                        {{Form::hidden('_method','DELETE')}}

                                        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </a>
                                </td>

                            </tr>
                        @endif
                    @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>
    <script>

        function ConfirmDelete()
        {
            var x = confirm("Ar tikrai norite ištrinti?");
            if (x)
                return true;
            else
                return false;
        }

    </script>
@endsection
