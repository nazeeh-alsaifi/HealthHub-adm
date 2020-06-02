@extends('layouts.app')

@section('content')
    <div id="most_viewed">
        @if($most_viewed->isEmpty())
            <div  class="container" style="padding: 30px">
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


                        <div class="slide active-slide" style="background-image: url('/public/images/{{$article->image}}')">
                            <div class="text-container">
                                <div class="caption">
                                    <h1>{{$i}}. {{$article->title}}</h1>
                                    <p>{{$article->description}}</p>
                                    <a href="{{route('article_show',$article->id)}}">Find More Here</a>
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
        @endif
    </div>
    <div id="homebg">
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
                                        <a href="{{route('article_show',$article->id)}}"><img
                                                class="card-img-top"
                                                src="/public/images/{{$article->image}}"
                                                alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title ">
                                                <a href="{{route('article_show',$article->id)}}">{{$article->title}}</a>
                                            </h4>
                                            <p class="card-text">{{$article->description}}</p>

                                            <small>
                                                <b>Viewed by: {{$article->views}} &#128065;</b>
                                                <p>published at: {{$article->created_at}}</p>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



    @if(!(Auth::user() == null))
        <div id="consult-form" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8">
                    <div class="card">
                        <div class="card-header text-center font-weight-bolder"><span class="card_header_text">Write Your Consult</span></div>

                        <div class="card-body">
                            <form method="POST" action="{{ url('/message')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group consult-row row">
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

                                <div class="form-group consult-row row">
                                    <label for="phone_num"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone_num" type="text"
                                               class="form-control @error('phone_num') is-invalid @enderror"
                                               name="phone_num" value="{{ old('phone_num') }}" required
                                               autocomplete="phone_num">

                                        @error('phone_num')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group consult-row row">
                                    <label for="age"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                    <div class="col-md-6">
                                        <input id="age" type="text"
                                               class="form-control @error('age') is-invalid @enderror" name="age"
                                               value="{{ old('age') }}" required autocomplete="age">

                                        @error('age')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group consult-row row">
                                    <label for="sex"
                                           class="col-2 col-sm-2 col-md-4 col-lg-4 col-form-label text-md-right">{{ __('Male') }}</label>

                                    <div style="width:2%">
                                        <input id="sex" type="radio"
                                               class="form-control @error('sex') is-invalid @enderror" name="sex"
                                               value="male"  required>

                                        @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <label for="sex"
                                           class="col-2 col-sm-2 col-md-2 col-lg-2 col-form-label text-md-right">{{ __('Female') }}</label>

                                    <div style="width:2%">
                                        <input id="sex" type="radio"
                                               class="form-control @error('sex') is-invalid @enderror" name="sex"
                                               value="female" required>

                                        @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group consult-row row">
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

                                <div class="form-group consult-row row">
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

                                <div class="form-group consult-row row mb-0">
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
                        <div class="card-header text-center font-weight-bolder"><span class="card_header_text"> My Conultations </span></div>
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
                                                    href=".{{'collapse'. $message->id}}"></td>
                                                <td>{{$message->subject}}</td>
                                                <td>{{ $message->sender->name}}</td>
                                                <td>{{$message->created_at}}</td>
                                                <td>
                                                    @if((Auth::User()->receive->where('reply_on',$message->id)->first()) != null)
                                                        <a id="reply-link" data-toggle="collapse"
                                                           href=".{{'reply'. $message->id}}">View Reply</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr class="hide-table-padding">
                                                <td colspan="5">
                                                    <div class="{{'collapse'. $message->id}} collapse in p-3">
                                                        {{$message->body}}
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr class="hide-table-padding">
                                                <td colspan="5">
                                                    <div class="{{'reply'. $message->id}} collapse in p-3"
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
        <div id="services">
            <!-- Section: boxes -->
            <section id="boxes" class="home-section paddingtop-80">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-4">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="box text-center">
                                    <i class="fa fa-user-md fa-3x circled bg-skin"></i>
                                    <h4 class="h-bold">Consult A Doctor</h4>
                                    <p style="font-size: 18px">
                                        Send us a consultation and our team of doctors will reply.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-4">
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="box text-center">

                                    <i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
                                    <h4 class="h-bold">Heart Disease Diagnostic</h4>
                                    <p style="font-size: 18px">
                                        Use our Expert System to get a diagnosis for heart disease by filling one application.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /Section: boxes -->

        </div>

        <div id="about_us" >
            <section id="partner" class="home-section paddingbot-60">
                <div class="container marginbot-50">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-lg-offset-2">
                            <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                                <div class="section-heading text-center">
                                    <h2 class="h-bold">Who Are We..</h2>
                                    <p>Nazeeh Al-Saifi & Muhammad Sulaiman Tanbari</p>
                                    <p> students continuing their studies in <a href="https://www.svuonline.org/">Syrian Virtual University</a> in Master Of Web Science.</p>
                                </div>
                            </div>
                            <div class="divider-short"></div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection



