@extends('auth.master')
@section('content')
    <section id="wrapper">
        <div class="login-register" style="background-image:url({{asset('assets/images/landing3.jpg')}});">
            <div class="login-box card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form-horizontal form-material" id="loginform" >
                        @csrf
                        <h3 class="text-center m-b-20">الدخــــــــول</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">

                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="d-flex no-block align-items-center">
                                    <div class="custom-control custom-checkbox">
                                        {{--<input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                                        {{--<label class="custom-control-label" for="customCheck1">Remember me</label>--}}
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('تذكرنــــــي') }}
                                        </label>
                                    </div>
                                    <div class="ml-auto">
                                        {{--<a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot pwd?</a>--}}
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('نسيت كلمــة المرور ؟') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-danger btn-rounded" type="submit">دخــــول</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <button class="btn  btn-facebook" data-toggle="tooltip" title="الدخــــول باستعمال facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> <a href="{{route('auth.facebook')}}"></a></button>
                                    <button class="btn btn-googleplus" data-toggle="tooltip" title="Google الدخــــول باستعمال"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
                                    <a href="{{route('auth.google')}}">google</a>
                                    <a href="{{route('auth.facebook')}}">facebook</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                غـير مسجـــل بعــد ؟<a href="{{route('register')}}" class="text-info m-l-5"><b>تسجيـــل الدخــــول</b></a>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection