@extends('layouts.app')
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(assets/images/main.jpg);"></div>
        <div class="title-holder">
            <div class="page-title">
                <h2>Project Single</h2>
                <span>Best Portfolio For Creatives</span>
            </div>
        </div>
    </div>
    <div class="project-single project-single2">
        <div class="container">
            <div class="row">
                <div class="project-content">
                    <div class="text-content col-md-8">
                        <h2>Behance</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis elit. Error nihil odio minima, fugit iste,
                            officia
                            architecto magnam, sapiente, ex debitis dicta sit quos. Quod nisi repellendus similique,
                            laborum
                            at inventore quasi cum architecto perspiciatis rerum! Quasi illo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisi elit. Error nihil odio minima, fugit iste,
                            officia architecto magnam, sapiente, ex debitis dicta sit quos. Quod nisi repellendus
                            similique,
                            laborum at inventore quasi cum architecto perspiciatis rerum! Quasi illo sequi reiciendis
                            eum.
                            Quod nisi repellendus illo. Lorem ipsum dolor sit amet, consectetur adipisi elit. Error
                            nihil
                            odio minima, fugit iste, officia architecto magnam.</p>
                    </div>
                    <div class="details-holder col-md-offset-1 col-md-3">
                        <div class="details categories">
                            <h4>Categories</h4>
                            <ul>
                                <li>Design</li>
                                <li>Art Work</li>
                                <li>Creative</li>
                            </ul>
                        </div>
                        <div class="details">
                            <h4>Author</h4>
                            <span>Natalie Portman</span>
                        </div>
                        <div class="details">
                            <h4>Date &amp; Time</h4>
                            <span>June 25, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-photos">
                <div class="row">
                    <ul>
                        <li><img src="assets/images/single.jpg"
                                 alt=""></li>
                        <li><img src="assets/images/single2.jpg"
                                 alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection