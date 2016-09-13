@extends('layouts.app')
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(/img/main.jpg);"></div>
        <div class="title-holder">
            <div class="page-title machinery-text">
                <h2>Привіт &#8212; <strong><span class="typewrite"
                                                 data-period="2000"
                                                 data-type="[ &quot;Я Тетяна Ковальчук&quot;,&quot; Я люблю створювати красиве&quot;,&quot; Я люблю фарбувати котів&quot; ]"><span class="wrap"> Я люблю майструвати</span></span></strong>
                </h2>
                <span>дизайнер, художник, педагог</span>
            </div>
        </div>
    </div>
    <div class="portfolio">
        <div class="container">
            <div class="filters">
                <ul id="filters">
                    <li class="active"
                        data-filter="*">Все
                    </li>
                    @foreach($tags as $tag)
                        <li data-filter=".{{$tag->class}}">{{$tag->title}}</li>
                    @endforeach
                </ul>
            </div>
            @foreach($portfolios as $portfolio)
                <div class="row portfolio-masonry">
                    <div class="selector col-md-3 col-sm-6 col-xs-12 {{$portfolio->tag->class}}">
                        <div class="item">
                            <a href="/portfolio/{{$portfolio->id}}">
                                <div class="overlay">
                                    <div class="overlay-inner">
                                        <h3>{{$portfolio->title}}</h3>
                                        <span>{{$portfolio->tag->title}}</span>
                                    </div>
                                </div>
                                <img src="/{{$portfolio->img}}"
                                     alt="{{$portfolio->title}}">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection