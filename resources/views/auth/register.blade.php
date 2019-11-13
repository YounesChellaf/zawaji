@extends('auth.master')
@section('content')
    <section id="wrapper">
        <div class="login-register2" style="background-image:url({{asset('assets/images/landing3.jpg')}});">
            <div class="login-box card">
                <div class="card-body" dir="rtl">
                    <form method="POST" action="{{ route('register') }}" class="form-horizontal form-material" id="loginform" >
                        @csrf
                        <h3 class="text-center m-b-20">تسجيـــــــل الدخــول</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('name') }}" required autofocus placeholder="الاســــــم">
                                @if ($errors->has('first_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('prenom') }}" required autofocus placeholder="اللقـــب">
                                @if ($errors->has('last_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="address" type="text" placeholder="العنــــــوان" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>
                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input id="phone_number"  placeholder="رقـــم الهـاتف" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>
                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <label for="type" class="col-form-label text-md-left">{{ __('نــــوع المستخـــدم') }}</label>
                                    <select id="type" name="type" class="form-control">
                                        <option value="client"></option>
                                        <option value="client">مستخــــدم عادي</option>
                                        <option value="owner">مالك قاعـــة</option>
                                    </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="email" type="email" placeholder="الايميـــــل" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                    <input id="password" type="password" placeholder="كلمـــــة المرور" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                    <input id="password-confirm" placeholder="تاكيـد كلمـــة المـــرور" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group text-center p-b-20">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تسجيــــــل') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                لــــديك حســاب من قبـل ؟ <a href="{{route('login')}}" class="text-info m-l-5"><b>الدخــــول</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
