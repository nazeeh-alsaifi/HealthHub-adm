@extends('layouts.app')

@section('content')
    <div id="home" class="container">
        <div id="most_viewed" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8">

                    <div class="card">
                        <div class="card-header">Most Viewed</div>

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
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
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
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                                <div class="smaller-card card h-100">
                                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="{{route('show',$username ?? '')}}">Article Three</a>
                                        </h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nam
                                            viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                    </div>
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
                                </div>
                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
        <div id="articles" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8">

                    <div class="card">

                        <div class="card-header">Articles
                            <a href="{{route('article_create')}}"><button type="button" class="btn btn-primary" style="border-color:rosybrown;float:right;border-radius: 12px;background-color: rosybrown;" onclick="{{route('article_create')}};">Add new article</button>
                            </a>
                        </div>

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
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
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
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
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
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
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
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
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
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
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
                                    <tr>
                                        <td><button type="button" class="btn btn-primary" style="background-color: midnightblue">Edit</button></td>
                                        <td><button type="button" class="btn btn-primary" style="background-color: darkred">Delete</button></td>
                                    </tr>
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
    </div>
@endsection

