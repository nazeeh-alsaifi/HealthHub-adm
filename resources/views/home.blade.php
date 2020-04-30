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
    <div id="articles" style="padding: 30px">
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
                                            <a href="#">Article Two</a>
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
                                            <a href="#">Article Three</a>
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
                                            <a href="#">Article Four</a>
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
                                            <a href="#">Article Five</a>
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
                                            <a href="#">Article Six</a>
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
    </div>
    <div id="services" style="padding: 30px;">
        <div id="home" class="container">
            <div class="py-4 col-md-8">

                <div class="card">
                    <div class="card-header">services</div>
                </div>
            </div>
        </div>
    </div>
    <div id="about_us" style="padding: 30px">
        <div id="home" class="container">
            <div class="py-4 col-md-8">

                <div class="card">
                    <div class="card-header">About Us</div>
                </div>
            </div>
        </div>
    </div>
@endsection
