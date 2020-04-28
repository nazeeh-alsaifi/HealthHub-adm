@extends('layouts.app')

@section('content')
    <div id="articles-create" class="container">
        <div class="row justify-content-center">
            <div class="py-4 col-md-8">
                <div class="card">
                    <div class="card-header">Create New Article</div>
                        <form method="" action="" >

                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Brief Description') }}</label>

                                    <div class="col-md-6">
                                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" description="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                                    <div class="col-md-6">
                                        <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" content="content" value="{{ old('content') }}" required autocomplete="content" autofocus>

                                        @error('content')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
