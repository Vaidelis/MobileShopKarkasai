@extends('layouts.appv2')

@section('content')

    <div class="top">
        <div class="row justify-content-center">
            <div class="col-md-8" style="color:antiquewhite">
                <table class="table table-striped" >
                    <thead>
                    <th>Grupės pavadinimas</th>
                    <th>Veiksmas</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($groupssh as $group)
                        <tr >
                            <td>{{ $group->name}}</td>
                            <td>
                                <a href="{{ route('groupshow', $group->id) }}" class="butt1">Peržiūrėti</a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>
@endsection
