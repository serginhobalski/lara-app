@extends('app.layouts.base_adm')

@section('estilo')
@endsection

@section('conteudo')
<div class="container-fluid">
    <div class="db-breadcrumb">
        <h4 class="breadcrumb-title">{{$titulo}}</h4>
        <ul class="db-breadcrumb-list">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li>{{$slug}}</li>
        </ul>
    </div>
    <div class="row">
        <!-- Your Profile Views Chart -->
        <div class="col-lg-12 m-b30">
            <div class="widget-box">
                <div class="email-wrapper">
                    @component('mensagens.components.email_menu_bar')
                    @endcomponent
                    <div class="mail-list-container">
                        <div class="mail-toolbar">
                            <div class="check-all">
                                <div class="custom-control custom-checkbox checkbox-st1">
                                    <input type="checkbox" class="custom-control-input" id="check1">
                                    <label class="custom-control-label" for="check1"></label>
                                </div>
                            </div>
                            <div class="mail-search-bar">
                                <input type="text" class="form-control" placeholder="Pesquisar"/>
                            </div>
                             <div class="dropdown all-msg-toolbar">
                                <span class="btn btn-info-icon" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></span>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Deletar</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-open"></i> Responder</a></li>
                                </ul>
                            </div>
                            <div class="next-prev-btn">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <div class="mail-box-list">
                            <div class="mail-list-info">
                                <div class="checkbox-list">
                                    <div class="custom-control custom-checkbox checkbox-st1">
                                        <input type="checkbox" class="custom-control-input" id="check2">
                                        <label class="custom-control-label" for="check2"></label>
                                    </div>
                                </div>
                                <div class="mail-rateing">
                                    <span><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="mail-list-title">
                                    <h6>Usuário Exemplo</h6>
                                </div>
                                <div class="mail-list-title-info">
                                    <p>Assunto Exemplo...</p>
                                </div>
                                <div class="mail-list-time">
                                    <span>10:59 AM</span>
                                </div>
                                <ul class="mailbox-toolbar">
                                    <li data-toggle="tooltip" title="Visualizar"><i class="fa fa-eye"></i></li>
                                    <li data-toggle="tooltip" title="Responder"><i class="fa fa-envelope-open"></i></li>
                                    <li data-toggle="tooltip" title="Deletar"><i class="fa fa-trash-o"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Your Profile Views Chart END-->
    </div>
</div>
@endsection

@section('script')
@endsection
