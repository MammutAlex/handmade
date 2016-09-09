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
            <div class="row portfolio-masonry"
                 style="position: relative; height: 733px;">
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork"
                     style="position: absolute; left: 0px; top: 0px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Behance</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/1.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 design webdesign"
                     style="position: absolute; left: 292px; top: 0px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single2.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Karate</h3>
                                    <span>Design</span>
                                </div>
                            </div>
                            <img src="/img/2.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork design"
                     style="position: absolute; left: 585px; top: 0px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Ladies</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/5.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork design"
                     style="position: absolute; left: 877px; top: 0px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Ladies</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/12.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork design"
                     style="position: absolute; left: 292px; top: 205px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Ladies</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/7.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork design"
                     style="position: absolute; left: 877px; top: 205px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Ladies</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/8.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork design"
                     style="position: absolute; left: 585px; top: 367px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Ladies</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/9.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork design"
                     style="position: absolute; left: 0px; top: 370px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Ladies</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/10.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork design"
                     style="position: absolute; left: 292px; top: 432px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Ladies</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/11.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
                <div class="selector col-md-3 col-sm-6 col-xs-12 artwork design"
                     style="position: absolute; left: 877px; top: 440px;">
                    <div class="item">
                        <a href="http://lazytheme.win/html/gloing-preview/project-single.html">
                            <div class="overlay">
                                <div class="overlay-inner">
                                    <h3>Ladies</h3>
                                    <span>Art Work</span>
                                </div>
                            </div>
                            <img src="/img/13.jpg"
                                 alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection