@extends('layouts.appv2')

@section('content')

    <div class="top">
        <div class="row justify-content-center">
            <div class="col-md-8" style="color:antiquewhite">
                <table class="table table-striped" >
                    <thead>
                    <th>Slapyvardis</th>
                    <th>El. Paštas</th>
                    <th>Rolė</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($userssh as $user)
                        <tr >
                            <td>{{ $user->username}}</td>
                            <td>{{ $user->email }}</td>
                            @if($user->roles_id == 1)
                            <td>Vartotojas</td>
                            @else
                                <td>Adminas</td>
                                @endif

                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>
@endsection
