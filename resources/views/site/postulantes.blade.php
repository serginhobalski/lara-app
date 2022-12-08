@extends('site.layouts.basico')

@section('estilo')
@endsection


@section('conteudo')
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white"><?php echo $titulo ?></h1>
                <h2 class="text-white"><?php echo $subtitulo ?></h2>
             </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li>Cursos</li>
                <li><?php echo $titulo ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                 <div class="row d-flex flex-row-reverse">
                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="course-detail-bx">
                            <div class="course-price">
                                <del>R$ 220,00</del>
                                <h4 class="price">R$ 150,00</h4>
                            </div>
                            <div class="course-buy-now text-center">
                                <a href="" target="_blank" class="btn radius-xl text-uppercase">Matricule-se Já</a>
                            </div>
                            <div class="teacher-bx">
                                <div class="teacher-info">
                                    <div class="teacher-thumb">
                                        <img src="assets/images/testimonials/pic3.jpg" alt=""/>
                                    </div>
                                    <div class="teacher-name">
                                        <h5>Sergio Filho</h5>
                                        <span>Coordenador</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cours-more-info">
                                <div class="review">
                                    <span></span>
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="price categories">
                                    <span>Categoria</span>
                                    <h5 class="text-primary">Postulantes</h5>
                                </div>
                            </div>
                            <div class="course-info-list scroll-page">
                                <ul class="navbar">
                                    <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Visão Geral</a></li>
                                    <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Currículo</a></li>
                                    <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instrutores</a></li>
                                    <li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="courses-post">
                            <div class="ttr-post-media media-effect">
                                <a href="#"><img src="assets/images/blog/default/thum1.jpg" alt=""></a>
                            </div>
                            <div class="ttr-post-info">
                                <div class="ttr-post-title ">
                                    <h2 class="post-title">Curso de Postulantes</h2>
                                </div>
                                <div class="ttr-post-text">
                                    <p>Um curso completo de preparação voltado para os que desejam ingressar no ministério pastoral da Igreja do Evangelho Quadrangular ou progredir de categoria ministerial.</p>
                                </div>
                            </div>
                        </div>
                        <div class="courese-overview" id="overview">
                            <h4>Visão Geral</h4>
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <ul class="course-features">
                                        <li><i class="ti-book"></i> <span class="label">Disciplinas</span> <span class="value">8</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Certificação</span> <span class="value">Sim</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Recursos<br> completos<br> em pdf.</span> <span class="value">Sim</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Tutoria.</span> <span class="value">Sim</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Aulas gravadas.</span> <span class="value">Sim</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Aulas ao vivo.</span> <span class="value">Sim</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <h5 class="m-b5">Descrição</h5>
                                    <p><b>Curso de Postulantes</b> – Um treinamento específico para todos os estão ingressando ou progredindo de categoria ministerial na IEQ, preparando-os para a realização do ENAQ - Exame Nacional Quadrangular.</p>
                                    <h5 class="m-b5">Certificação</h5>
                                    <p>Todos os participantes do curso recebem o Certificado do Curso de Postulantes, que deverá obrigatoriamente ser apresentado no dia do ENAQ.
                                    </p>
                                    <h5 class="m-b5">Recursos do Curso</h5>
										<ul class="list-checked primary">
											<li>Manual completo das disciplinas em pdf.</li>
											<li>Aulas gravadas de todas as disciplinas.</li>
											<li>Aulas de revisão ao vivo.</li>
											<li>Tutoria.</li>
										</ul>
                                </div>
                            </div>
                        </div>
                        <div class="m-b30" id="curriculum">
                            <h4>Currículo</h4>
                            <ul class="curriculum-list">
                                    <li>
                                        <ul>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>1. </span> Declaração de Fé
                                                </div>
                                                <span></span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>2. </span> Doutrinas Bíblicas
                                                </div>
                                                <span></span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>3. </span> Panorama Bíblico
                                                </div>
                                                <span></span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>4. </span> Evangelho Quadrangular
                                                </div>
                                                <span></span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>5. </span> Administração da Igreja
                                                </div>
                                                <span></span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>6. </span> Cidadania
                                                </div>
                                                <span></span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>7. </span> Atualidades
                                                </div>
                                                <span></span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>8. </span> Leitura Obrigatória (Redação)
                                                </div>
                                                <span></span>
                                            </li>
                                    </li>
                            </ul>
                        </div>
                        <div class="" id="instructor">
                            <h4>Instrutores</h4>
                            <div class="instructor-bx">
                                <div class="instructor-author">
                                    <img src="assets/images/testimonials/pic1.jpg" alt="">
                                </div>
                                <div class="instructor-info">
                                    <h6>Eurides Obalski </h6>
                                    <span>Professora</span>
                                    <ul class="list-inline m-tb10">
                                        <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <p class="m-b0"></p>
                                </div>
                            </div>
                            <div class="instructor-bx">
                                <div class="instructor-author">
                                    <img src="assets/images/testimonials/pic3.jpg" alt="">
                                </div>
                                <div class="instructor-info">
                                    <h6>Sergio Filho </h6>
                                    <span>Professor</span>
                                    <ul class="list-inline m-tb10">
                                        <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <p class="m-b0"></p>
                                </div>
                            </div>
                        </div>
                        <div class="" id="reviews">
                            <h4>Reviews</h4>

                            <div class="review-bx">
                                <div class="all-review">
                                    <h2 class="rating-type">3</h2>
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span></span>
                                </div>
                                <div class="review-bar">
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>5 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:90%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>150</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>4 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:70%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>140</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>3 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:50%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>120</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>2 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:40%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>110</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>1 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:20%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>80</div>
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
    <!-- contact area END -->

</div>
@endsection


@section('script')
@endsection
