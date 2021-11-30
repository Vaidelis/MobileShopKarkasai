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
                             <?php $possible = 0 ?>
                              <?php $number = 0 ?>
                            @foreach($grouphasuser as $grouphas)
                                @if($group->id == $grouphas->group_id && $possible == 0)
                                <?php $possible++ ?>
                                    <?php $number++ ?>
                            <td>
                                <a href="{{ route('groupshow', $group->id) }}" class="butt1">Peržiūrėti</a>
                            </td>
                                @endif
                            @endforeach
                            @if($number == 0)
                                <td>
                                    <a href="{{ route('groupjoin', ['id' => Auth::user()->id, 'groupid' => $group->id]) }}" class="butt1">Prisijungti</a>
                                </td>
                            @endif
                            @if($check == null)
                                <td>
                                    <a href="{{ route('groupjoin', ['id' => Auth::user()->id, 'groupid' => $group->id]) }}" class="butt1">Prisijungti</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>

        </div>

    </div>
@endsection
