@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <a href="#">add new article</a>
    </div>
    <div id="home" class="container">
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
                                        <a href="#">Article One</a>
                                    </h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                        numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi
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
                                        <a href="#">Article Two</a>
                                    </h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                        viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                            <div class="smaller-card card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Article Three</a>
                                    </h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos
                                        quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus
                                        necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel
                                        quam!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                            <div class="smaller-card card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Article Four</a>
                                    </h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                        viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                            <div class="smaller-card card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Article Five</a>
                                    </h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                        viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-2 mt-2">
                            <div class="smaller-card card h-100">
                                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="#">Article Six</a>
                                    </h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo,
                                        voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo,
                                        esse.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-4 col-md-8">
                <div class="card">
                    <div class="card-header">Users Consultations</div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 mb-2 mt-2">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Created At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( App\Message::all() as $message)
                                        <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse"
                                            data-parent="#accordion1" href="#{{'collapse'. $message->id}}">
                                            <td class="expand-button"></td>
                                            <td>{{$message->subject}}</td>
                                            <td>{{ $message->sender->name}}</td>
                                            <td>{{$message->created_at}}</td>
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

