@extends('layouts.appv2')

@section('content')
<div class="login-box">
    <h4>Prisijungimas</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="box">
                            <div >
                                <input id="email" placeholder="E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="box">
                            <div>
                                <input id="password" placeholder="Slaptažodis" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <button type="submit" class="butt">{{ __('Login') }}</button>
                    </form>
                    <a class="butt1" href="{{ route('register') }}">{{ __('Registracija') }}</a>

            </div>

@endsection
