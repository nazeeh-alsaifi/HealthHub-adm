@extends('layouts.app')

@section('content')
    <div id="most_viewed">
        <section class="home-slideshow">
            <div class="slider">
                <div class="slide active-slide" style="background-image: url('/images/Health-1.jpg')">
                    <div class="text-container">
                        <div class="caption">
                            <h1>1. Heart diseases</h1>
                            <p>The most known heart diseases in Uk</p>
                            <a href="/articles">Find More Here</a>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/images/Health-2.jpg')">
                    <div class="text-container">
                        <div class="caption">
                            <h1>2. Heart attacks</h1>
                            <p>Did you know that 30% of elders die because of it</p>
                            <a href="/articles">Find More Here</a>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/images/Health-3.jpg')">
                    <div class="text-container">
                        <div class="caption">
                            <h1>3. Improving your Health</h1>
                            <p>you can find out more about this topic in the link below</p>
                            <a href="/articles">Find More Here</a>
                        </div>
                    </div>
                </div>
                <div class="slide" style="background-image: url('/images/Health-4.jpg')">
                    <div class="text-container">
                        <div class="caption">
                            <h1>4. How to improve your health</h1>
                            <p>you can find out more about this topic in the link below</p>
                            <a href="/articles">Find More Here</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="controls">
                <div class="prev"><</div>
                <div class="next">></div>
            </div>
            <div class="indicator">

            </div>
        </section>
    </div>
    <div id="home" class="container">
        <div id="articles" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8">

                    <div class="card">
                        <div class="card-header">Articles</div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                                <div class="smaller-card card h-100">
                                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('show',$username ?? '')}}">Article One</a>
                                        </h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Amet
                                            numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat
                                            sequi
                                            itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil,
                                            dolorem!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                                <div class="smaller-card card h-100">
                                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('show',$username ?? '')}}">Article Two</a>
                                        </h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nam
                                            viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                                <div class="smaller-card card h-100">
                                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('show',$username ?? '')}}">Article Three</a>
                                        </h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Quos
                                            quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus
                                            necessitatibus et facere atque iure perspiciatis mollitia recusandae vero
                                            vel
                                            quam!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                                <div class="smaller-card card h-100">
                                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('show',$username ?? '')}}">Article Four</a>
                                        </h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nam
                                            viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                                <div class="smaller-card card h-100">
                                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('show',$username ?? '')}}">Article Five</a>
                                        </h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nam
                                            viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                                <div class="smaller-card card h-100">
                                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('show',$username ?? '')}}">Article Six</a>
                                        </h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo,
                                            voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi!
                                            Nemo,
                                            esse.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
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
        <div id="consult" class="container" style="padding: 30px">
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
                                    <label for="body"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                                    <div class="col-md-6">
                                                    <textarea id="body"
                                                              class="form-control @error('body') is-invalid @enderror"
                                                              name="body" required></textarea>

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
                <div class="py-4 col-md-8">
                    <div class="card ">
                        <div class="card-header text-center">My Conultations</div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mb-2 ">
                                <div class="table-responsive">
                                    <table class="table table-hover">
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
                                                @if((Auth::User()->receive->where('reply_on',$message->id)->first()) != null)
                                                    <td><a id="reply-link" data-toggle="collapse"
                                                           href="#{{'reply'. $message->id}}">View Reply</a></td>
                                                @endif
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
                                                    <div id="{{'reply'. $message->id}}" class="collapse in p-3">
                                                        @if((Auth::User()->receive->where('reply_on',$message->id)->first()) != null)
                                                            {{'Admin:'. Auth::User()->receive->where('reply_on',$message->id)->first()->body}}
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


