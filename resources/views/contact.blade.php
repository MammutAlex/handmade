@extends('layouts.app')
@section('title', 'Телефон, пошта та форма звязку для найбільш зручного контакту з нами')
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
                                <div class="col-md-6">
                                    @if($errors->has('name'))
                                        <div class="alert alert-danger">
                                            @foreach ($errors->get('name') as $error)
                                                {{$error}} <br>
                                            @endforeach
                                        </div>
                                    @endif
                                    <input name="name"
                                           type="text"
                                           placeholder="Імʼя"
                                           @if(!$errors->has('name'))value="{{old("name")}}"@endif>
                                </div>
                                <div class="col-md-6">
                                    @if($errors->has('email'))
                                        <div class="alert alert-danger">
                                            @foreach ($errors->get('email') as $error)
                                                {{$error}} <br>
                                            @endforeach
                                        </div>
                                    @endif
                                    <input name="email"
                                           type="text"
                                           placeholder="Email"
                                           @if(!$errors->has('email'))value="{{old("email")}}"@endif>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @if($errors->has('subject'))
                                        <div class="alert alert-danger">
                                            @foreach ($errors->get('subject') as $error)
                                                {{$error}} <br>
                                            @endforeach
                                        </div>
                                    @endif
                                    <input name="subject"
                                           type="text"
                                           placeholder="Тема"
                                           @if(!$errors->has('subject'))value="{{old("subject")}}"@endif>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @if($errors->has('message'))
                                        <div class="alert alert-danger">
                                            @foreach ($errors->get('message') as $error)
                                                {{$error}} <br>
                                            @endforeach
                                        </div>
                                    @endif
                                    <textarea name="message"
                                              placeholder="Повідомлення"
                                              cols="30"
                                              rows="10">@if(!$errors->has('subject')){{old("subject")}}@endif</textarea>
                                </div>
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