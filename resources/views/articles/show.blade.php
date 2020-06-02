@extends('layouts.app')

@section('content')
    <div id="home" class="container p-5" ">
        <div id="article" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8">

                    <div class="card">
                        <div class="card-header col-lg-12 p-3" style="font-family: 'Merriweather', serif;text-align: center"><h2><b>{{$articleInfo->title}}</b></h2></div>
                        <div><img src="/public/images/{{$articleInfo->image}}" style="width: 100%; height:50vh;" /></div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-6 mb-2 mt-2" style="font-family: 'Merriweather', serif;text-align: center">
                                <h5><b>{{$articleInfo->description}}</b></h5>
                                <p style="padding-top:20px;font-family: 'Merriweather', serif;">{{$articleInfo->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
