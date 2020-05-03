@extends('layouts.app')
@section('content')
    <div id="consults-create" class="container" style="padding: 12vh;">
        <div class="row justify-content-center">
            <div class="py-4 col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Write Your Reply') . ' To ' . App\User::find($sentBy)->name  }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/message')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="subject"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                                <div class="col-md-6">
                                    <input id="subject" type="text" class="form-control " name="subject" value="{{ App\Message::find($messageId)->subject }}" readonly autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="body"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                                <div class="col-md-6">
                                    <textarea id="body" class="form-control @error('body') is-invalid @enderror"
                                              name="body" required></textarea>

                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <input name="id" type="hidden" value={{$sentBy}}>
                            <input name="reply_on" type="hidden" value={{$messageId}}>



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
