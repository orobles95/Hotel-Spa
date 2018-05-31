@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 60px; margin-bottom: 208px;">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="card_number" class="col-md-4 col-form-label text-md-right">{{ __('Targeta de pago') }}</label>

                            <div class="col-md-6">
                                <input id="card_number" name="card_number" type="number" class="form-control" min="1111111111111111" max="9999999999999999" placeholder="16 numeros sin espacios" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="holder_card" class="col-md-4 col-form-label text-md-right">{{ __('Titular tarjeta') }}</label>

                            <div class="col-md-6">
                                <input id="holder_card" name="holder_card" type="text" class="form-control" minlength="5" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="expDate_card" class="col-md-4 col-form-label text-md-right">{{ __('Fecha cad. tarjeta') }}</label>

                            <div class="col-md-6">
                                <input id="expDate_card" name="expDate_card" type="text" class="form-control" minlength="5" maxlength="5" placeholder="07/18" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="secretNumber_card" class="col-md-4 col-form-label text-md-right">{{ __('Num. secreto tarjeta') }}</label>

                            <div class="col-md-6">
                                <input id="secretNumber_card" name="secretNumber_card" type="password" class="form-control"  minlength="3" maxlength="3" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="6" placeholder="Minimo 6 caracteres" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" minlength="6" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
