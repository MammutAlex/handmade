@extends('layouts.app')
@section('title', $portfolio->title)
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(/{{$portfolio->img}});"></div>
        <div class="title-holder">
            <div class="page-title">
                <h2>{{$portfolio->title}}</h2>
                <span>{{$portfolio->tag->title}}</span>
            </div>
        </div>
    </div>
    <div class="project-single" itemscope itemtype="http://schema.org/Article">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="project-content">
                        <div class="text-content">
                            <h2 itemprop="name">{{$portfolio->title}}</h2>
                            <div itemprop="articleBody">
                                {!! $portfolio->text !!}
                            </div>
                        </div>
                        <div class="details-holder">
                            <div class="details">
                                <h4>Автор</h4>
                                <span>Тетяна Ковальчук</span>
                            </div>
                            <div class="details">
                                <h4>Дата створення</h4>
                                <span itemprop="datePublished"
                                      content="{{$portfolio->date}}">{{$portfolio->date}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-1 col-sm-offset-1">
                    <div class="project-photos">
                        <ul>
                            @foreach($portfolio->images as $image)
                                <li><img src="/{{$image}}"
                                         alt="{{$portfolio->title}}"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection