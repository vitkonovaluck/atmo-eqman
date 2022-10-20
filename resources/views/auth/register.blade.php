@extends('layouts.auth ')

@section('content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Реєстрація!</h1>
                        </div>
                        <form method="POST" action="{{ route('register') }}" class="user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md">
                                    <input id="name" type="text" placeholder="Імя та призвіще" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email адресу" class="form-control form-control-user" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input id="password" type="password" class="form-control form-control-user" name="password" placeholder="Пароль" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required placeholder="Повторити пароль">
                                </div>
                            </div>
                            <button type="submit"  class="btn btn-primary btn-user btn-block">Зареєстуватися</button>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/forgot">Забули пароль?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{route('login')}}">Вже зареєстрований? Увійти!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
