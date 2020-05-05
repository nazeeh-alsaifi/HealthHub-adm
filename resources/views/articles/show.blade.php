@extends('layouts.app')

@section('content')
    <div id="home" class="container p-5" style="background-image: url('/storage/{{$articleInfo->image}}')">
        <div id="article" style="padding: 30px">
            <div class="row justify-content-center">
                <div class="py-4 col-md-8">

                    <div class="card">
                        <div class="card-header col-lg-12 p-3" style="font-family: 'Merriweather', serif;text-align: center"><h1><b>{{$articleInfo->title}}</b></h1></div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-6 mb-2 mt-2" style="font-family: 'Merriweather', serif;text-align: center">
                                <h5><b>{{$articleInfo->description}}</b></h5>
                                <p style="padding-top:20px;font-family: 'Merriweather', serif;">{{$articleInfo->content}}</p>

@endsection
