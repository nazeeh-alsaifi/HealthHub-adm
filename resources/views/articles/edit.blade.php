@extends('layouts.app')

@section('content')
    <div id="articles-create" class="container" style="padding: 12vh">

        <div class="row justify-content-center">
            <div class="py-4 col-md-8">
                <div class="card">
                    <div class="card-header">Edit Article Number: {{$articleInfo->article_id}}</div>
                    <div class="card-body">
                        <form method="post" action="{{route('article_update',$articleInfo->article_id)}}"
                              enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf


                            <div class="form-group row" style="">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file"
                                           class="form-control-file @error('image') is-invalid @enderror" name="image"
                                           value="/storage/{{$articleInfo->image ?? ''}}">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
a                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text"
                                           class="form-control @error('title') is-invalid @enderror" name="title"
                                           value="{{$articleInfo->title ?? old('title') }}" autocomplete="title">

                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control @error('description') is-invalid @enderror"
                                           name="description"
                                           autocomplete="description"
                                           value="{{$articleInfo->description ?? old('description')}}">

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{--                             i named it article-content instead of content alone so it doesn't interfere with yield content in app.blade.php--}}
                            <div class="form-group row">
                                <label for="article-content"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                                <div class="col-md-6">
                                    <textarea id="content" class="form-control @error('content') is-invalid @enderror"
                                              name="content">{{$articleInfo->content ?? old('content')}}</textarea>

                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <div class="offset-md-4" style="float: left">
                                        <button type="submit" class="btn btn-primary">
                                            {{__('Save Changes') }}
                                        </button>
                                </div>
                        </form>

                                        <span class="pl-5">

                                <button type="submit" class="btn btn-primary"
                                        style="background-color: #c51f1a;border-color: #c51f1a" data-id="{{$articleInfo->article_id}}" onclick="deleteConfirmation()">
                                        {{ __('Delete Article') }}
                                </button>
                            </span>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
@endsection

            <script type="application/javascript">
                function deleteConfirmation() {

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {
                            window.location = "{{route('article_delete',$articleInfo->article_id)}}";
                        }
                    })

                }
            </script>
