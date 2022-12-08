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
                                <del>R$ 350,00</del>
                                <h4 class="price">R$ 280,00</h4>
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
                                    <h5 class="text-primary">ITQ</h5>
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
                                    <h2 class="post-title">Instituto Teológico Quadrangular EAD</h2>
                                </div>
                                <div class="ttr-post-text">
                                    <p>Um curso essencial para preparar pastores, líderes e todo cristão que deseja  aprofundar seus conhecimentos sobre Deus, Igreja, missão, ministério e o Reino de Deus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="courese-overview" id="overview">
                            <h4>Visão Geral</h4>
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <ul class="course-features">
                                        <li><i class="ti-book"></i> <span class="label">Séries</span> <span class="value">3</span></li>
                                        <li><i class="ti-pencil-alt"></i> <span class="label">Módulos<br> por série</span> <span class="value">6</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Avaliações</span> <span class="value">Sim</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Certificação</span> <span class="value">Sim</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <h5 class="m-b5">Descrição</h5>
                                    <p><b>Instituto Teológico Quadrangular</b> – Uma escola vocacional evangélica que tem por objetivo promover a educação e a cultura na Igreja do Evangelho Quadrangular, a partir do estudo da teologia e das doutrinas bíblicas das Sagradas Escrituras, através da oferta do Curso Livre em Teologia na modalidade EAD.</p>
                                    <h5 class="m-b5">Certificação</h5>
                                    <p>A certificação do ITQ EAD é a mesma do ITQ presencial, ou seja:
                                        <ul>
                                            <li>Certificado de conclusão do Curso Fundamental (ao concluir o 1º ano).</li>
                                            <li>Diploma de conclusão do Curso Livre em Teologia (ao concluir o 3º ano).</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="m-b30" id="curriculum">
                            <h4>Currículo</h4>
                            <ul class="curriculum-list">
                                    <li>
                                        <h5>1º ANO</h5>
                                        <ul>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>1. </span> Vivência Cristã
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>2. </span> Bibliologia
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>3. </span> Introdução à Teologia
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>4. </span> Metodologia do Trabalho Acadêmico
                                                </div>
                                                <span>Integação</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>5. </span> Vida de Cristo e Espiritualidade
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>6. </span> Dons e Ministérios
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>7. </span> Pastoral Urbana
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>8. </span> Evangelho Quadrangular (Teologia Confessional)
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>9. </span> Discipulado
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>10. </span> Evangelismo
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>11. </span> Cidadania
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>12. </span> Introdução à Educação Cristã
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>13. </span> Hermenêutica
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>14. </span> Administração Eclesiástica
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>15. </span> Aconselhamento e Orientação Familiar
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>16. </span> Homilética
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>17. </span> Métodos de Estudo Bíblico
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>18. </span> Teologia do Culto
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>19. </span> Liderança 1 - Gestão de Pessoal
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>20. </span> Teologia Pastoral
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                        </ul>

                                        <h5>2º ANO</h5>
                                        <ul>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>1. </span> Cultura Bíblica
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>2. </span> Pentateuco (parte 1)
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>3. </span> Teologia do Antigo Testamento
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>4. </span> Teologia do Novo Testamento
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>5. </span> Hebreus
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>6. </span> Pentateuco (parte 2)
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>7. </span> Evangelhos (parte 1)
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>8. </span> Atos dos Apóstolos
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>9. </span> História de Israel (parte 1)
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>10. </span> História de Israel (parte 2)
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>11. </span> Evangelhos (parte 2)
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>12. </span> Epístolas Paulinas (parte 1)
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>13. </span> História de Israel (parte 3)
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>14. </span> Epístolas Paulinas (parte 2)
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>15. </span> Epístolas Gerais
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>16. </span> Livros Poéticos
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>17. </span> Missão Integral da Igreja
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>18. </span> Teologia Sistemática 1
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                        </ul>

                                        <h5>3º ANO</h5>
                                        <ul>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>1. </span> Teologia Sistemática 2 (parte 1)
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>2. </span> TCC - Trabalho de Conclusão de Curso
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>3. </span> Estágio Supervisionado
                                                </div>
                                                <span>Módulo 01</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>4. </span> Teologia Sistemática 2 (parte 2)
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>5. </span> História da Igreja (parte 1)
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>6. </span> Aconselhamento Pastoral
                                                </div>
                                                <span>Módulo 02</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>7. </span> Teologia Sistemática 3 (parte 1)
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>8. </span> História da Igreja (parte 2)
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>9. </span> Escatologia Bíblica (parte 1)
                                                </div>
                                                <span>Módulo 03</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>10. </span> Teologia Sistemática 3 (parte 2)
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>11. </span> Escatologia Bíblica (parte 2)
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>12. </span> Liderança 2 - Gestão Ministerial
                                                </div>
                                                <span>Módulo 04</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>13. </span> Introdução à Missiologia
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>14. </span> Movimentos Religiosos Contemporâneos
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>15. </span> Liderança 3 - Mentoria
                                                </div>
                                                <span>Módulo 05</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>16. </span> Comunicação Social
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>17. </span> Teologia Contemporânea
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                            <li>
                                                <div class="curriculum-list-box">
                                                    <span>18. </span> Ética Cristã
                                                </div>
                                                <span>Módulo 06</span>
                                            </li>
                                        </ul>
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
