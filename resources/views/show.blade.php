@extends('layouts.appv2')

@section('content')
    <div class="top2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                <table class="table table-striped" >

                        <h3>
                            <p>Telefonas - <b>{{ $bookinfo->brand }}</b></p>
                        </h3>
                        <p>Savininkas - <b>{{ $bookinfo->user->username }}</b></p>
                        <p>Modelis - <b>{{ $bookinfo->model }}</b></p>
                        <p>Ekrano dydis(Inch) - <b>{{ $bookinfo->screensize }}</b></p>
                        <p>RAM(GB) - <b>{{ $bookinfo->ramsize }}</b></p>
                        <p>Talpos dydis(GB) - <b>{{ $bookinfo->storagesize }}</b></p>
                        <p>Spalva - <b>{{ $bookinfo->color }}</b></p>
                        <p>Kaina(USD) - <b>{{ $bookinfo->price }}</b></p>
                        <p>Naudojimo laikotarpis(USD) - <b>{{ $bookinfo->year }}</b></p>

                        <a href="{{ route('posts') }}" class="btn btn-primary">Atgal</a>
                    </form>
        </table>
                </div>
        </div>
    </div>
    </div>
@endsection
