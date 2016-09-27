@extends('layouts.app')
@section('title', $blog->title)
@section('description', $blog->mintext)
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(/{{$blog->phoneimg}});"></div>
        <div class="title-holder">
            <div class="page-title machinery-text">
                <h2>{{$blog->title}}</h2>
                <span>{{$blog->subtitle}}</span>
            </div>
        </div>
    </div>
    <div class="blog blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="blog-post ">
                            <div class="post-content">
                                <div class="details">
                                    <span>{{$blog->created_at}}</span>
                                </div>
                                {!! $blog->text !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection