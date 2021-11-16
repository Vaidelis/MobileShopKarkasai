@extends('layouts.appv2')

@section('content')

    <div class="top">
        <div class="row justify-content-center">
            <div class="col-md-8" style="color:antiquewhite">
                <table class="table table-striped" >
                    <thead>
                    <th>Bookmark pavadinimas</th>
                    <th>Veiksmas</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($bookssh as $book)
                        @if(Auth::user()->username == $book->username)
                        <tr >
                            <td>{{ $book->bookmarkname}}</td>
                            <td>
                                <a href="{{ route('bookshow', $book->id) }}" class="butt1">Peržiūrėti</a>
                            </td>

                        </tr>
                        @endif
                    @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>
@endsection
