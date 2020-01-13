@extends('auth.master')
@section('content')

    <section id="wrapper">
        <div class="login-register" style="background-image:url({{asset('assets/images/landing-room.jpg')}});">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('تحقق من عنوان بريدك الإلكتروني') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('تم إرسال رابط تحقق جديد إلى عنوان بريدك الإلكتروني') }}
                        </div>
                    @endif

                    {{ __('قبل المتابعة ، يرجى التحقق من بريدك الإلكتروني لمعرفة رابط التحقق.') }}
                    {{ __('إذا لم تتلقى البريد الإلكتروني') }}, <a href="{{ route('verification.resend') }}">{{ __('انقر هنا لطلب آخر') }}</a>.
                </div>
            </div>
        </div>
    </div>
        </div>
    </section>

@endsection
