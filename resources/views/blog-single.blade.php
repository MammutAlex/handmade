@extends('layouts.app')
@section('title', $blog->title)
@section('description', $blog->mintext)
@section('style')
    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript"
            src="//vk.com/js/api/openapi.js?135"></script>

    <script type="text/javascript">
        VK.init({apiId: 5679001, onlyWidgets: true});
    </script>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection
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

            <div class="row">
                <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="pluso"
                                 data-background="none;"
                                 data-options="small,square,line,horizontal,counter,sepcounter=1,theme=14"
                                 data-services="vkontakte,facebook,twitter,google"></div>
                            <div class="comments">
                                <div class="comment">
                                    <div id="vk_comments"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="comments">
                                <div class="comment">
                                    <div class="fb-comments"
                                         data-href="http://dream-made.pro/blog/{{$blog->id}}"
                                         data-numposts="5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        VK.Widgets.Comments("vk_comments", {
            limit: 10,
            attach: "photo,video"
        });
    </script>
    <script type="text/javascript">(function () {
            if (window.pluso)if (typeof window.pluso.start == "function") return;
            if (window.ifpluso == undefined) {
                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript';
                s.charset = 'UTF-8';
                s.async = true;
                s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                var h = d[g]('body')[0];
                h.appendChild(s);
            }
        })();</script>
@endsection