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
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
                <table class="table table-striped" >
                    <thead>
                    <th>Galimos rolės</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($roleall as $rall)
                        <tr >
                            <td>{{ $rall->role}}</td>
                            <td><form action="{{ route('roledelete', $rall->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger">Ištrinti</button>
                                </form></td>
                            <td> <a href="{{ route('roleedit', $rall->id) }}" class="btn btn-info">Redaguoti</a></td>
                            <td></td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
                <div class="card" style="background: none; position: fixed;bottom: 50px; width: 65%" >
                    <form type='POST' action="{{route('rolecreate')}}">
                        <div class="form-group">
                            <label style="color:antiquewhite;" class="label">Rolės pavadinimas: </label>
                            <input type="text" name="role" id="role" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Sukurti" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
