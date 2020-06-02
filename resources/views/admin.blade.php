@extends('layouts.app')

@section('content')
    <div id="home" class="container">
        <div id="most_viewed" >
            <div class="row justify-content-center">
                <div class="py-4 col-md-8">

                    <div class="card">
                        <div class="card-header text-center font-weight-bolder">
                            <span class="card_header_text "> Most Viewed</span>
                        </div>
                        <div class="row">

                            @if($most_viewed->isEmpty())
                                <div class="col-lg-12 col-sm-6 mb-2 mt-2" style="text-align: center">
                                    <h3>Empty</h3>
                                    <p>you didn't add any article.</p></div>
                            @else
                                @foreach($most_viewed as $article)
                                    <div class="col-lg-4 col-sm-6 mb-2 mt-2">

                                        <div class="smaller-card card h-100" style="text-align: center">
                                            <a href="{{route('article_show',$article->id)}}"><img
                                                    class="card-img-top"
                                                    src="/public/images/{{$article->image}}"
                                                    alt=""></a>
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    <a href="{{route('article_show',$article->id)}}">{{$article->title}}</a>
                                                </h4>
                                                <p class="card-text">{{$article->description}}</p>

                                                <small><b>Viewed by: {{$article->views}} &#128065;</b>

                                                    <p>published at: {{$article->created_at}}</p></small>
                                            </div>
                                            <a class="btn btn-primary"
                                               href="{{route('article_edit',$article->id )}}">Edit Article</a>
                                        </div>

                                    </div>

                                @endforeach

                            @endif

                        </div>

                        <!-- /.row -->
                    </div>

                </div>
            </div>
        </div>
        <div id="articles" >
            <div class="row justify-content-center">
                <div class="py-4  col-md-8">

                    <div class="card">

                        <div class="card-header pt-2 text-center font-weight-bolder ">
                            <span class="card_header_text ">Articles</span>
                            <a href="{{route('article_create')}}">
                                <button type="button" class="btn btn-primary"
                                        style="border-radius: 12px;float:right;">
                                    Add new article
                                </button>
                            </a>
                        </div>

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
                                                <h4 class="card-title">
                                                    <a href="{{route('article_show',$article->id)}}">{{$article->title}}</a>
                                                </h4>
                                                <p class="card-text">{{$article->description}}</p>

                                                <small><b>Viewed by: {{$article->views}} &#128065;</b>

                                                    <p>published at: {{$article->created_at}}</p></small>

                                            </div>

                                            <a class="btn btn-primary"
                                               href="{{route('article_edit',$article->id )}}">Edit Article</a>
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

        <div id="users_consultations">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8 col-lg-12">
                    <div class="card">
                        <div class="card-header text-center font-weight-bolder"><span class="card_header_text">Users Consultations</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mb-2">
                                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
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
                                        @foreach( $messages as $message)
                                            <tr class="accordion-toggle collapsed" id="msg{{$message->id}}"
                                                @if($message->status == 1)style="background-color: #ECECEC" @endif>
                                                <td class="expand-button" data-toggle="collapse"
                                                    href="#{{'collapse'. $message->id}}"
                                                    onclick="changeStatus({{$message->id}})"></td>
                                                <td>{{$message->subject}}</td>
                                                <td>{{ $message->sender->name}}</td>
                                                <td>{{$message->created_at}}</td>
                                                @if((Auth::User()->sent->where('reply_on',$message->id)->first()) != null)
                                                    <td><a id="reply-link" data-toggle="collapse"
                                                           href="#{{'reply'. $message->id}}">View
                                                            Reply</a></td>
                                                @else
                                                    <td>
                                                        <a href="{{url('reply/'.$message->sent_by.'/'.$message->id)}}">Reply</a>
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
                                                    <div id="{{'reply'. $message->id}}" class="collapse in p-3"
                                                         style="background-color:#d33e43 ">
                                                        @if((Auth::User()->sent->where('reply_on',$message->id)->first()) != null)
                                                            <span style=" font-weight:800; color: white ;">
                                                               Admin :{{Auth::User()->sent->where('reply_on',$message->id)->first()->body}}
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

@push('script')
    <script>
        function changeStatus(msgId) {
            $.ajax({
                type: "GET",
                url: '/change_status/' + msgId,
                success: function () {
                    console.log("Data Sent");
                }
            });
            document.getElementById('msg' + msgId).removeAttribute('style');
        }
    </script>
@endpush

