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
