@extends('layouts.appv2')

@section('content')

    <div>
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
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($posts as $post)
                            <tr >
                                <td>{{ $post->brand }}</td>
                                <td>{{ $post->model }}</td>
                                <td>{{ $post->screensize }}</td>
                                <td>{{ $post->ramsize }}</td>
                                <td>{{ $post->storagesize }}</td>
                                <td>{{ $post->color }}</td>
                                <td>{{ $post->price }}</td>
                                <td>{{ $post->username }}</td>
                                <td>{{ $post->year }}</td>
                                <td>
                                    <a href="{{ route('postshow', $post->id) }}" class="butt1">Peržiūrėti</a>
                                </td>

                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>
@endsection
