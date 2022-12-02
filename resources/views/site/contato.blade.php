@extends('site.layouts.basico')

@section('estilo')
@endsection


@section('conteudo')

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white"><?php echo $titulo ?></h1>
             </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><?php echo $titulo ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->

    <!-- inner page banner -->
    <div class="page-banner contact-page section-sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 m-b30">
                    <div class="bg-primary text-white contact-info-bx">
                        <h2 class="m-b10 title-head">Informações de <span>Contato</span></h2>
                        <p></p>
                        <div class="widget widget_getintuch">
                            <ul>
                                <li>
                                    <i class="ti-location-pin"></i>
                                    Trav. Timbó, 1212, Pedreira, Belém - PA.
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    (91) 99981-2198
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    ead@seecpa.com.br
                                </li>
                            </ul>
                        </div>
                        <h5 class="m-t0 m-b20">Siga-nos</h5>
                        <ul class="list-inline contact-social-bx">
                            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="btn outline radius-xl"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <form class="contact-bx ajax-form" action={{ route('site.contato') }} method="post">
                        @csrf
                    <div class="ajax-message"></div>
                        <div class="heading-bx left">
                            <h2 class="title-head">Entre em <span>Contato</span></h2>
                            <p></p>
                        </div>
                        <div class="row placeani">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Seu Nome</label>
                                        <input name="name" type="text" required class="form-control valid-character">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Seu e-mail</label>
                                        <input name="email" type="email" class="form-control" required >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Seu telefone</label>
                                        <input name="phone" type="text" required class="form-control int-value">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Assunto</label>
                                        <input name="subject" type="text" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>Mensagem</label>
                                        <textarea name="message" rows="4" class="form-control" required ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="g-recaptcha" data-sitekey="6Lf2gYwUAAAAAJLxwnZTvpJqbYFWqVyzE-8BWhVe" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                        <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
</div>
@endsection


@section('script')
@endsection
