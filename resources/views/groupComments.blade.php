@extends('layouts.appv2')

@section('content')

    <div class="top">
        <div class="row justify-content-center">
            <div class="col-md-8" style="color:antiquewhite">
                <!---
                foreach ($group as $grou)
                    @oreach ($grou->comment as $comment)
                        <table> <th>$grou->name</th></table>
                        <td> $comment->user_username</td>
                    endforeach
                endforeach -->
                    <table> <th>{{$group->name}}</th></table>
                <table class="table table-striped" >

                    <thead>
                    <th>Slapyvardis</th>
                    <th>Komentaras</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody >
                    @foreach($comments as $com)
                        <tr >
                            <td>{{ $com->user_username}}</td>
                            <td>{{ $com->comment}}</td>

                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>
@endsection
