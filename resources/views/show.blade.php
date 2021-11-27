@extends('layouts.appv2')

@section('content')
    <div class="top2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                <table class="table table-striped" >

                        <h3>
                            <p>Mobile phone - <b>{{ $bookinfo->brand }}</b></p>
                        </h3>
                        <p>User - <b>{{ $bookinfo->user->username }}</b></p>
                        <p>Model - <b>{{ $bookinfo->model }}</b></p>
                        <p>Screen Size(Inch) - <b>{{ $bookinfo->screensize }}</b></p>
                        <p>RAM size(GB) - <b>{{ $bookinfo->ramsize }}</b></p>
                        <p>storage size(GB) - <b>{{ $bookinfo->storagesize }}</b></p>
                        <p>Color - <b>{{ $bookinfo->color }}</b></p>
                        <p>Price(USD) - <b>{{ $bookinfo->price }}</b></p>

                        <a href="{{ route('posts') }}" class="btn btn-primary">Atgal</a>
                    </form>
        </table>
                </div>
        </div>
    </div>
    </div>
@endsection
