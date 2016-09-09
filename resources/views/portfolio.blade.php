@extends('layouts.app')
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(/img/main.jpg);"></div>
        <div class="title-holder">
            <div class="page-title">
                <h2>Тетяна Ковальчук</h2>
                <span>митець &amp; педагог</span>
            </div>
        </div>
    </div>
    <div class="project-single project-single2">
        <div class="container">
            <div class="row">
                <div class="project-content">
                    <div class="text-content col-md-8">
                        <h2>{{$portfolio->title}}</h2>
                        {!! $portfolio->text !!}
                    </div>
                    <div class="details-holder col-md-offset-1 col-md-3">
                        <div class="details categories">
                            <h4>Категорія</h4>
                            <ul>
                                <li>{{$portfolio->tag->title}}</li>
                            </ul>
                        </div>
                        <div class="details">
                            <h4>Автор</h4>
                            <span>Тетяна Ковальчук</span>
                        </div>
                        <div class="details">
                            <h4>Дата створення</h4>
                            <span>{{$portfolio->date}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-photos">
                <div class="row">
                    <ul>
                        <li><img src="/{{$portfolio->img}}"
                                 alt="{{$portfolio->title}}"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection