@extends('layouts.appv2')

@section('content')

    <div class="form-group" >
        <div class="row justify-content-center" >
            <div class="col-md-8" style="color:antiquewhite">
                <div class="form-group" style="display: flex; flex-direction: column" >
                    <table style="bottom: -50px"> <th>{{$groupname->group->name}}</th></table>

                <table class="table table-striped" style="top: -90px">

                    <thead>
                    <th>Slapyvardis</th>
                    <th>Komentaras</th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($comments as $com)
                        @if($com->groupshasusers->group_id == $groupname->group->id)
                        <div class="form-group">
                        <tr >
                            <td>{{ $com->groupshasusers->user->username}}</td>
                            <td>{{ $com->comment}}</td>
                            <td>
                            @if($com->groupshasusers->user->id == Auth::User()->id)
                                <a href="{{ route('comedit', $com->id) }}" class="btn btn-info">Redaguoti</a>
                            @endif
                            </td>
                        </tr>
                        </div>
                        @endif
                    @endforeach




                    <div class="card" style="background: none; position: fixed;bottom: 50px; width: 65%" >
                        <form type='POST' action="{{route('postcomment',['grouphas' => $groupname->id, 'id' => $groupname->group->id])}}">
                            <div class="form-group">
                                <label style="color:antiquewhite;" class="label">Žinutė: </label>
                                <input type="text" name="bookmarkn" id="bookmarkn" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Pateikti" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                    </tbody>

                </table>
                </div>
            </div>

        </div>
    </div>
@endsection
