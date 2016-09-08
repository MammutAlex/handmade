@extends('layouts.app')
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(/img/main.jpg);"></div>
        <div class="title-holder">
            <div class="page-title">
                <h2>Напишіть мені</h2>
                <span>Я переглядаю листи перед сном</span>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-info machinery-text">
                        <h3>Контактна інформація</h3>
                        <span>www.dream-made.pro</span>
                        <span>contactme@dream-made.pro</span>
                        <span>+38 (063) 451 82 70</span>
                    </div>
                    <div class="address machinery-text">
                        <h3>Моя адреса</h3>
                        <p>Київ, Україна</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    @if(session('success'))
                        <div class="alert alert-success"
                             role="alert">Ваше повідомлення відправлено
                            <i class="fa fa-heart-o"
                               aria-hidden="true"></i>
                        </div>
                    @endif
                    <div class="contact-form">
                        <form method="POST"
                              action="/mail-contact">
                            {{Form::token()}}
                            <div class="row">
                                <div class="col-md-6"><input name="name"
                                                             type="text"
                                                             placeholder="Імʼя"
                                                             style="cursor: auto; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
                                </div>
                                <div class="col-md-6"><input name="email"
                                                             type="text"
                                                             placeholder="Email"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><input name="subject"
                                                              type="text"
                                                              placeholder="Тема"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><textarea name="message"
                                                                 placeholder="Повідомлення"
                                                                 cols="30"
                                                                 rows="10"></textarea></div>
                            </div>
                            <input type="submit"
                                   class="send"
                                   value="Надіслати повідомлення">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection