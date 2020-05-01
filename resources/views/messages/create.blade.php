@extends('layouts.app')
@section('content')
    <div id="consults-create" class="container" style="padding: 12vh;">
        <div class="row justify-content-center">
            <div class="py-4 col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Write Your Consult') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/message')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="subject"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                                <div class="col-md-6">
                                    <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>

                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                                <div class="col-md-6">
                                    <textarea id="content"  class="form-control @error('content') is-invalid @enderror" name="content" required></textarea>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="captcha"
                                       class="col-md-4 col-form-label text-md-right">{{ __('captcha') }}</label>

                                <div class="col-md-6">
                                    <div class="captcha">
                                        <span>{!! captcha_img() !!}</span>
                                        <button type="button" class="btn btn-success btn-refresh">Refresh</button>
                                    </div>
                                    <input id="captcha" type="text"
                                           class="form-control mt-2 @error('captcha') is-invalid @enderror" name="captcha"
                                           placeholder="Enter Captcha" required>

                                    @error('captcha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Wrong Captcha</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
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
