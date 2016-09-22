@extends('layouts.app')
@section('title', 'Наш досвід майстрування різних речей, та детальний опис створення поробок')
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(/img/main.jpg);"></div>
        <div class="title-holder">
            <div class="page-title">
                <h2>Блог та новини</h2>
                <span>Майструємо разом</span>
            </div>
        </div>
    </div>
    <div class="blog">
        <div class="container">
            <div class="row portfolio-masonry">
                @foreach($blogs as $blog)
                    <div class="blog-post selector col-md-4 col-sm-6 col-xs-12">
                        <div class="post-img">
                            <a href="/blog/{{$blog->id}}">
                                <img src="/{{$blog->phoneimg}}"
                                     alt="{{$blog->title}}">
                            </a>
                        </div>
                        <div class="post-content">
                            <h3><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h3>
                            <div class="details">
                                <span>{{$blog->created_at}}</span>
                            </div>
                            <p>{{$blog->mintext}}</p>
                            <div class="more-button">
                                <a href="/blog/{{$blog->id}}">Детальніше</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-holder">
                {{$blogs->render()}}
            </div>
        </div>
    </div>
@endsection