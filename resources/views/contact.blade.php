@extends('layouts.app')
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(assets/images/main8.jpg);"></div>
        <div class="title-holder">
            <div class="page-title">
                <h2>Contact us</h2>
                <span>We hope to see you again soon</span>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-info">
                        <h3>Contact Info</h3>
                        <span>www.yourdomain.com</span>
                        <span>contactus@yourdomain.com</span>
                        <span>01 2345 6789</span>
                    </div>
                    <div class="address">
                        <h3>Our Address</h3>
                        <p>oxford lcd <br>califonrnia avenue <br>456 12 <br>Manhattan, canada</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="contact-form">
                        <form method="POST"
                              action="http://lazytheme.win/html/gloing-preview/mail.php">
                            <div class="row">
                                <div class="col-md-6"><input name="name"
                                                             type="text"
                                                             placeholder="Name"
                                                             style="cursor: auto; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
                                </div>
                                <div class="col-md-6"><input name="email"
                                                             type="text"
                                                             placeholder="Email"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><input name="subject"
                                                              type="text"
                                                              placeholder="Subject"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12"><textarea name="message"
                                                                 placeholder="Message"
                                                                 cols="30"
                                                                 rows="10"></textarea></div>
                            </div>
                            <input type="submit"
                                   class="send"
                                   value="send message">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection