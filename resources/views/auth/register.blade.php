@extends('layouts.appv2')

@section('content')
<div class="login-box">
    <h4>Registracija</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="box">

                            <div>
                                <input id="username" placeholder="Slapyvardis" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="box">


                            <div>
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="box">


                            <div>
                                <input id="password" placeholder="Slaptažodis" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="box">

                            <div>
                                <input id="password-confirm" placeholder="Pakartoti slaptažodį" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                                <button type="submit" class="butt">
                                    {{ __('Užsiregistruoti') }}
                                </button>
                    </form>
                </div>
@endsection
