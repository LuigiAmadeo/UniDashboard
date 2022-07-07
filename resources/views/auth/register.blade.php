@extends('layouts.app')

@section('content')

<div class="testing" style="background-image:url(../storage/background1.png);background-size: 100% 100%; display:flex">

    <img src="../storage/login_picture2.png" alt="" style="width: 15vw;height:20vw;margin-left:7vw; margin-bottom:10vw; margin-top:2vw">
    <div class="container" style="margin-left:3vw">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="
                                            background-color:rgba(200,160,160,255);
                                            display:flex;
                                            justify-content:center;
                                            font-size:2vw;
                                            color:white">

                    {{ __('Register') }}
                </div>
    
                    <div class="card-body" style="background-color:rgba(200,160,160,255)">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}
    
                                <div class="col-md-8">
                                    <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label> --}}
    
                                <div class="col-md-8">
                                    <input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}
    
                                <div class="col-md-8">
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3 d-flex justify-content-center">
                                {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}
    
                                <div class="col-md-8">
                                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn btn-outline-light">
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
</div>

@endsection
