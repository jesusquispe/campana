@extends('layout')

@section('content')
<div class="page-title sp" style="background-image: url(img/page-title.jpg)">
    <div class="container text-center">
        <h2>Contact Us</h2>
        <p>Malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
    </div>
</div>        
    <div class="contact-area sp">
    <div class="container">
        <div class="row">
            <div class="col-md-5 contact-info">
                <div class="single-info">
                    <h5>Telefono</h5>
                    <p>+(591) 7777777</p>
                </div>
                <div class="single-info">
                    <h5>Correo</h5>
                    <p>esmeralda_walsh@lucy.name</p>
                </div>
                <div class="single-info">
                    <h5>Dirección</h5>
                    <p>30 Heathcote Vista, Cassinfort, LA</p>
                </div>
                <div class="single-info">
                    <h5>Social</h5>
                    <p>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <form  mathod="post" action="{{ route('messages') }}" class="contact-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text"  name="name" placeholder="Nombre">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" name="email" placeholder="Correo">
                        </div>
                        <div class="col-lg-12">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <input class="button" type="submit" value="Enviar mensaje">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
<div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43546.86165317726!2d-0.1304800562216428!3d51.50205515285579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sbd!4v1506591318507"></iframe>
</div>
@stop

