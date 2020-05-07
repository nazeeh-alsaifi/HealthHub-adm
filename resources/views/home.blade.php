@extends('layouts.app')

@section('content')
    <div id="most_viewed">
        @if($most_viewed->isEmpty())
            <div id="home" class="container" style="padding: 30px">
                <div class="row justify-content-center">
                    <div class="py-4 col-md-8">

                        <div class="card">
                            <div class="card-header">Most Viewed</div>
                            <div class="row">

                                <div class="col-lg-12 col-sm-6 mb-2 mt-2" style="text-align: center">
                                    <h3>Empty</h3>
                                    <p>you didn't add any article.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            {{$i=1}}

            <section class="home-slideshow">
                <div class="slider">
                    @foreach($most_viewed as $article)


                        <div class="slide active-slide" style="background-image: url('/storage/{{$article->image}}')">
                            <div class="text-container">
                                <div class="caption">
                                    <h1>{{$i}}. {{$article->title}}</h1>
                                    <p>{{$article->description}}</p>
                                    <a href="{{route('article_show',$article->article_id)}}">Find More Here</a>
                                </div>
                            </div>
                        </div>

                        {{$i++}}
                    @endforeach
                </div>
                <div class="controls">
                    <div class="prev"><</div>
                    <div class="next">></div>
                </div>


                <div class="indicator">

                </div>
            </section>
    </div>

    @endif
    </div>
    <div id="articles" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="py-4  col-md-8">

                <div class="card">

                    <div class="card-header pt-2">Articles</div>

                    <div class="row">

                        @if($articles->isEmpty())
                            <div class="col-lg-12 col-sm-6 mb-2 mt-2" style="text-align: center">
                                <h3>Empty</h3>
                                <p>you didn't add any article.</p></div>
                        @else
                            @foreach($articles as $article)
                                <div class="col-lg-4 col-sm-6 mb-2 mt-2">

                                    <div class="smaller-card card h-100" style="text-align: center">
                                        <a href="{{route('article_show',$article->article_id)}}"><img
                                                class="card-img-top"
                                                src="/storage/{{$article->image}}"
                                                alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="{{route('article_show',$article->article_id)}}">{{$article->title}}</a>
                                            </h4>
                                            <p class="card-text">{{$article->description}}</p>

                                            <small><b>Viewed by: {{$article->views}} &#128065;</b>

                                                <p>published at: {{$article->created_at}}</p></small>

                                        </div>


                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    </div>

    <div id="services" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="py-4 col-md-8">
                <div class="card">
                    <div class="card-header">services</div>
                </div>
            </div>
        </div>
    </div>
    <div id="about_us" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="py-4 col-md-8">
                <div class="card">
                    <div class="card-header">About Us</div>
                </div>
            </div>
        </div>
    </div>
    @if(!(Auth::user() == null))
        <div id="consult" class="container" >
            <div class="row justify-content-center">
                <div class="py-4 col-md-8 col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Write Your Consult') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ url('/message')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="subject"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                                    <div class="col-md-6">
                                        <input id="subject" type="text"
                                               class="form-control @error('subject') is-invalid @enderror"
                                               name="subject" value="{{ old('subject') }}" required
                                               autocomplete="subject">

                                        @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone_num"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone_num" type="text"
                                               class="form-control @error('phone_num') is-invalid @enderror"
                                               name="phone_num" value="{{ old('phone_num') }}" required
                                               autocomplete="phone_num" autofocus>

                                        @error('phone_num')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                    <div class="col-md-6">
                                        <input id="age" type="text"
                                               class="form-control @error('age') is-invalid @enderror" name="age"
                                               value="{{ old('age') }}" required autocomplete="age" autofocus>

                                        @error('age')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="sex"
                                           class="col-sm-2 col-md-4 col-lg-4 col-form-label text-md-right">{{ __('Male') }}</label>

                                    <div class="col-sm-2 col-md-1">
                                        <input id="sex" type="radio"
                                               class="form-control @error('sex') is-invalid @enderror" name="sex"
                                               value="male" checked required autofocus>

                                        @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <label for="sex"
                                           class="col-sm-2 col-form-label text-md-right">{{ __('Female') }}</label>

                                    <div class="col-sm-2 col-md-1">
                                        <input id="sex" type="radio"
                                               class="form-control @error('sex') is-invalid @enderror" name="sex"
                                               value="female" required autofocus>

                                        @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="body"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                                    <div class="col-md-6">
                                                    <textarea id="body"
                                                              class="form-control @error('body') is-invalid @enderror"
                                                              name="body" required>{{old('body')}}</textarea>

                                        @error('body')
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
                                            <button type="button" class="btn btn-success btn-refresh">
                                                Refresh
                                            </button>
                                        </div>
                                        <input id="captcha" type="text"
                                               class="form-control mt-2 @error('captcha') is-invalid @enderror"
                                               name="captcha"
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

        <div id="admin-replies" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8 col-lg-12">
                    <div class="card ">
                        <div class="card-header text-center">My Conultations</div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mb-2 ">
                                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                                    <table id="dtVerticalScrollExample" class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col"></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( Auth::User()->sent as $message)
                                            <tr class="accordion-toggle collapsed" id="accordion1">

                                                <td class="expand-button" data-toggle="collapse"
                                                    href="#{{'collapse'. $message->id}}"></td>
                                                <td>{{$message->subject}}</td>
                                                <td>{{ $message->sender->name}}</td>
                                                <td>{{$message->created_at}}</td>
                                                <td>
                                                    @if((Auth::User()->receive->where('reply_on',$message->id)->first()) != null)
                                                        <a id="reply-link" data-toggle="collapse"
                                                           href="#{{'reply'. $message->id}}">View Reply</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr class="hide-table-padding">
                                                <td colspan="5">
                                                    <div id="{{'collapse'. $message->id}}" class="collapse in p-3">
                                                        {{$message->body}}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="hide-table-padding">
                                                <td colspan="5">
                                                    <div id="{{'reply'. $message->id}}" class="collapse in p-3"
                                                         style="background-color:#d33e43 ">
                                                        @if((Auth::User()->receive->where('reply_on',$message->id)->first()) != null)
                                                            <span style=" font-weight:800; color: white ;">
                                                               Admin :{{ Auth::User()->receive->where('reply_on',$message->id)->first()->body}}
                                                           </span>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection


