@extends('layouts.appv2')

@section('content')
<div class="login-box">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <h4> Statusas</h4>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Jūs prisijungiėte!!') }}
        </div>
    </div>
</div>
@endsection
