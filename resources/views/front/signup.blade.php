
@extends('front.master')
@section('content')
<main>
    <section class="container">
        <div class="mt-5 mb-5 p-5" >

            <div class="row">
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                    <div class="mx-auto text-center">
                        <h1 class="fw-bold"> হাজার মানুষের  IELTS প্রস্তুতি </h1>
                       <h3>  নিচে আপনার তথ্য দিয়ে রেজিস্ট্রেশন করুন </h3>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mt-5" style="background: #D9D9D9">
                        {{-- <div class="card-header">{{ __('নিচে আপনার তথ্য দিয়ে রেজিস্ট্রেশন করুন') }}</div> --}}

                        <div class="card-body">
                            <form method="POST" action="{{ route('front.signup',$slug) }}">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="আপনার নাম" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="আপনার ইমেইল (আপডেট জানানোর জন্য)" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="whatsapp" class="col-md-4 col-form-label text-md-end">{{ __('Whtasapp Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="whatsapp" type="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="আপনার Whatsapp নাম্বার (দ্রুত যোগাযোগের জন্য)" required autocomplete="whatsapp">

                                        @error('whatsapp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>




                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="mt-3 text-center"><a href="{{route('front.signin','confirm')}}" style="color: red">পূর্বেই রেজিষ্ট্রেশন করে থাকলে </a></div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-12 mx-auto">
                            <div class="mt-5">
                                <button type="submit" class="full_button sweet_color_bg text-right fw-bold">
                                    {{ __('ক্লিক করে জয়েন করুন হাজার মানুষের IELTS প্রস্তুতি প্রোগ্রামে') }}
                                </button>
                            </div>
                        </div>
                    </div>

                </form>


                </div>
            </div>
        </div>
    </section>
</main>


@endsection
