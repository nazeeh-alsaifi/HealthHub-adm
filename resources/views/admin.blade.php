@extends('layouts.app')

@section('content')
    <div id="home" class="container">
        <div id="most_viewed" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8">

                    <div class="card">
                        <div class="card-header">Most Viewed</div>
                        <div class="row">

                            @if($most_viewed->isEmpty())
                                <div class="col-lg-12 col-sm-6 mb-2 mt-2" style="text-align: center">
                                    <h3>Empty</h3>
                                    <p>you didn't add any article.</p></div>
                            @else
                                @foreach($most_viewed as $article)
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
                                            <a class="btn btn-primary"
                                               href="{{route('article_edit',$article->article_id )}}">Edit Article</a>
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
        <div id="articles" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4  col-md-8">

                    <div class="card">

                        <div class="card-header pt-2">Articles
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

                                            <a class="btn btn-primary"
                                               href="{{route('article_edit',$article->article_id )}}">Edit Article</a>
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
    <div id="users_consultations" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="py-4 col-md-8">
                <div class="card-header">Users Consultations</div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 mb-2 mt-2">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-dark ">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col"></th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach( Auth::User()->receive as $message)
                                    <tr class="accordion-toggle collapsed" id="accordion1"
                                        data-toggle="collapse"
                                        data-parent="#accordion1" href="#{{'collapse'. $message->id}}">
                                        <td class="expand-button"></td>
                                        <td>{{$message->subject}}</td>
                                        <td>{{ $message->sender->name}}</td>
                                        <td>{{$message->created_at}}</td>
                                        <td>
                                            <a href="{{url('reply/'.$message->sent_by.'/'.$message->subject)}}">Reply</a>
                                        <td><a class="accordion-toggle collapsed" id="accordion1"
                                               data-toggle="collapse"
                                               data-parent="#accordion1" href="#{{'collapse'. $message->id}}">
                                                View latest Reply</a></td>
                                    </tr>
                                    <tr class="hide-table-padding">
                                        <td colspan="4">
                                            <div id="{{'collapse'. $message->id}}" class="collapse in p-3">
                                                {{$message->body}}
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
@endsection

